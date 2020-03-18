<?php

namespace App\Repositories;


use App\Models\Attachment;
use App\Models\Section;
use Illuminate\Support\Collection;

class SectionRepository
{
    /**
     * Section collection.
     *
     * @var Collection
     */
    private $sections;

    /**
     * SectionRepository constructor.
     *
     * @param Collection $sections
     */
    public function __construct(Collection $sections)
    {
        $this->sections = $sections;
    }


    public function render($parameters)
    {
        return once(function () use ($parameters) {
            $parameters = explode('.', $parameters);
            $sectionName = array_splice($parameters, 0, 1)[0];
            $section = $this->find($sectionName);
            $value = $section;
            $fetchAttachment = end($parameters) === 'data';

            foreach ($parameters as $parameter) {
                if ($parameter === 'first')
                    $value = $value[0];

                elseif ($parameter === 'second')
                    $value = $value[1];

                elseif ($parameter === 'third')
                    $value = $value[2];

                elseif (is_numeric($parameter))
                    $value = $value[$parameter];

                else {
                    $value = $value->{$parameter};

                    if ($parameter === 'data') {
                        $attachmentFields = array_filter($section->fields, function ($field) {
                            return $field->type === 'attachment';
                        });

                        if (empty($attachmentFields))
                            continue;

                        $value = array_map(function ($item) use ($attachmentFields, $fetchAttachment) {
                            foreach ($attachmentFields as $field) {
                                $alias = isset($field->alias) ? $field->alias : str_slug($field->name);
                                if (true || $fetchAttachment) {
                                    $attachment = Attachment::find($item->$alias);
                                    $item->$alias = $attachment;
                                } else
                                    $item->$alias = "|x|{$item->$alias}|x|";
                            }

                            return $item;
                        }, $value);
                    }
                }
            }

            return $value;
        });
    }

    private function find($name)
    {
        $sections = $this->sections;

        return once(function () use ($name, $sections) {
            $section = $sections->where('name', $name)->first();

            if (empty($section))
                return Section::content($name);
            return json_decode($section->value);
        });
    }
}