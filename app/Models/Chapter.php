<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Attachments\HandlesAttachments;


class Chapter extends Model
{
    use SoftDeletes, HandlesAttachments;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'thumbnail',
        'name',
        'latitude',
        'longitude'
    ];
}