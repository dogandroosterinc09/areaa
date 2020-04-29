<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Event;
use App\Models\ChapterEvent;

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
        $event = $this->attributes['event_id'] != 0 ? Event::find($this->attributes['event_id']) : ChapterEvent::find($this->attributes['chapter_event_id']);
        
        return $event->name;
    }

    public function getNameAttribute() {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }

    public function getStatusAttribute() {
        if ($this->attributes['status'] == 0)

        return 'UNPAID';

        else

        return 'PAID';
    }
}