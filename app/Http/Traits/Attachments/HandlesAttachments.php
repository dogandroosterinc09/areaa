<?php

namespace App\Http\Traits\Attachments;


use App\Models\Attachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

trait HandlesAttachments
{
    public function attachment($name)
    {
        if (empty($this->$name))
            return null;

        $attachment = json_decode($this->$name);

        $path = $attachment->folder . '/' . $attachment->alias;

        $attachment->url = asset("public/storage/$path");

        return $attachment;
    }

    public function attach($files, $identifier = 'section')
    {
        if ($files instanceof UploadedFile)
            return $this->handleUpload($files, $identifier);

        if (is_array($files) || $files instanceof \Traversable)
            return collect($files)->map(function ($file) use ($identifier) {
                return $this->handleUpload($file, $identifier);
            });

        return collect([]);
    }

    private function handleUpload(UploadedFile $file, $identifier)
    {
        $attachment = $this->mutateAttachment($file, $identifier);
        if ($identifier != 'section') {
            if (str_singular($identifier) === $identifier) {
                $this->$identifier = json_encode($attachment);
            } else {
                if (empty($this->$identifier))
                    $this->$identifier = json_encode([]);

                $attachments = json_decode($this->$identifier);
                array_push($attachments, $attachment);

                $this->$identifier = json_encode($attachments);
            }
            $this->save();
        }

        $this->saveAttachmentToDisk($file, $attachment->alias, $this->getClassName());

        return $attachment;
    }

    private function getAttachmentModelInstance($identifier)
    {
        $method = $identifier;

        if ($identifier === 'default') {
            if (method_exists($this, 'attachment')) {
                $method = 'attachment';
            } else if (method_exists($this, 'attachments')) {
                $method = 'attachments';
            } else return null;
        }
        $className = get_class($this->$method()->getQuery()->getModel());

        return new $className;
    }

    private function mutateAttachment(UploadedFile $file, string $identifier): object
    {
        $alias = str_random() . '.' . $file->getClientOriginalExtension();

        return (object) array_merge([
            'alias' => $alias,
            'folder' => $this->getFolderName($this->getClassName()),
            'mime' => $file->getClientMimeType(),
            'name' => $file->getClientOriginalName(),
            'extension' => $file->getClientOriginalExtension(),
            'identifier' => $identifier
        ], $this->appendAttachmentData($file, $identifier));
    }

    protected function appendAttachmentData(UploadedFile $file, string $identifier): array
    {
        return [];
    }

    protected function getClassName(): string
    {
        $namespace = explode('\\', get_class($this));

        return end($namespace);
    }

    protected function getFolderName(string $class)
    {
        return $class;
    }

    protected function saveAttachmentToDisk(UploadedFile $file, $alias, string $class)
    {
        $file->storeAs($class, $alias, ['disk' => 'public']);
    }

    private function attachmentFor($identifier = 'default')
    {
        return $this->morphToMany(Attachment::class, 'attachable', 'attachables')->where('identifier', $identifier);
    }
}