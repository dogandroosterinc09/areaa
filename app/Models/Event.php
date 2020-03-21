<?php

namespace App\Models;

use App\Http\Traits\Attachments\HasAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Event extends Model
{
    use SoftDeletes, HasAttachment;

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