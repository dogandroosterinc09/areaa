<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Attachments\HandlesAttachments;


class Event extends Model
{
    use SoftDeletes, HandlesAttachments;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'description',
        'starts_at',
        'ends_at',
        'location_name',
        'city',
        'state',
        'zip',
        'country',
        'longitude',
        'latitude',
        'amount',
    ];

    /**
     * the attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['starts_at', 'ends_at'];
}