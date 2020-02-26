<?php

namespace App\Http\Traits\Attachments;


use App\Models\Attachment;

trait HasAttachment
{
    use HandlesAttachments;

    /**
     * Get the file attached to the resource.
     *
     * @return Attachment|null
     */
    public function getAttachmentAttribute()
    {
        return $this->attachment()->first();
    }

    public function attachment()
    {
        return $this->attachmentFor();
    }
}