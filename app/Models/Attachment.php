<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'mime',
        'order',
        'alias',
        'folder',
        'extension',
        'identifier'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['url'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function default()
    {
        $attachment = new Attachment();
        $attachment->name = 'Default';
        $attachment->mime = 'jpeg';
        $attachment->folder = '';
        $attachment->extension = 'jpg';
        $attachment->alias = 'placeholder.jpg';
        $attachment->identifier = 'placeholder.jpg';

        return $attachment;
    }

    /**
     * Generate a url that represents this resource.
     *
     * @return string
     */
    public function getUrlAttribute() : string
    {
        $path = ($this->attributes['folder'] ?? '') . '/' . ($this->attributes['alias'] ?? '');
        $path = str_replace('\\', '/', $path);
        return url("public/storage/$path");
    }

    public function property()
    {
        return $this->morphTo(Property::class, 'attachable');
    }

    /**
     * Return the url when serialized.
     *
     * @return string
     */
    public final function __toString() : string
    {
        return $this->getUrlAttribute();
    }
}
