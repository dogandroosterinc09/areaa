<?php

namespace App\Http\Traits\Attachments;


use App\Models\Attachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

trait HandlesAttachments
{
    public function attach($files, $identifier = 'default', $name = '')
    {
        if ($files instanceof UploadedFile)
            return $this->handleUpload($files, $identifier, $name);

        if (is_array($files) || $files instanceof \Traversable)
            return collect($files)->map(function ($file) use ($identifier, $name) {
                return $this->handleUpload($file, $identifier, $name);
            });

        return collect([]);
    }

    private function handleUpload(UploadedFile $file, $identifier, $name)
    {
        $attachment = $this->getAttachmentModelInstance($identifier);
        $this->mutateAttachment($attachment, $file, $identifier);

        $attachment->name = $name;

        if ($identifier === 'default') {
            if (method_exists($this, 'attachment')) {
                $this->attachment()->count() > 0 && $this->attachment()->delete();

                $this->attachment()->save($attachment);
            } else if (method_exists($this, 'attachments')) {
                $this->attachments()->save($attachment);
            } else return null;
        } else {
            if (method_exists($this, $identifier)) {
                $this->$identifier()->count() > 0 && $this->$identifier()->delete();

                $this->$identifier()->save($attachment);
            }
        }

        $this->saveAttachmentToDisk($file, $attachment, $this->getClassName());

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

    private function mutateAttachment(Model $model, UploadedFile $file, string $identifier)
    {
        $alias = str_random() . '.' . $file->getClientOriginalExtension();
        $model->alias = $alias;
        $model->folder = $this->getFolderName($this->getClassName());
        $model->mime = $file->getClientMimeType();
        $model->name = $file->getClientOriginalName();
        $model->extension = $file->getClientOriginalExtension();
        $model->identifier = $identifier;

        $model = $this->appendAttachmentData($model, $file, $identifier);

        return $model;
    }

    protected function appendAttachmentData(Model $model, UploadedFile $file, string $identifier)
    {
        return $model;
    }

    protected function getClassName()
    {
        $namespace = explode('\\', get_class($this));

        return end($namespace);
    }

    protected function getFolderName(string $class)
    {
        return $class;
    }

    protected function saveAttachmentToDisk(UploadedFile $file, Attachment $attachment, string $class)
    {
        $file->storeAs($class, $attachment->alias, ['disk' => 'public']);
    }

    private function attachmentFor($identifier = 'default')
    {
        return $this->morphToMany(Attachment::class, 'attachable', 'attachables')->where('identifier', $identifier);
    }
}