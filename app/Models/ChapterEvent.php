<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ChapterEvent extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'chapter_id',
        'slug',
        'thumbnail',
        'description',
        'starts_at',
        'ends_at',
        'time',
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

    public function getChapterAttribute()
    {
        $chapter = \App\Models\Chapter::select('name')->where('id',$this->attributes['chapter_id'])->get()->first();
        return $chapter->name;
    }
}