<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EventRegistration extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'member_id',
        'event_id',
        'chapter_event_id',
        'event_chapter_id',            
        'first_name',
        'last_name',
        'email',
        'phone',
        'is_member',
        'status',
        'member_chapter_id'
    ];

    public function getEventAttribute() {
        $event = \App\Models\Event::find($this->attributes['event_id']);
        return $event->name;
    }

    public function getNameAttribute() {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }
}