<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Attachments\HandlesAttachments;


class Gallery extends Model
{
    use SoftDeletes, HandlesAttachments;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'photos',
        'user_id',
        'thumbnail',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}