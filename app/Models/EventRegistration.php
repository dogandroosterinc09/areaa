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

    public function getEventNameAttribute() {
        $event = $this->attributes['event_id'] != 0 ? Event::find($this->attributes['event_id']) : ChapterEvent::find($this->attributes['chapter_event_id']);
        
        return $event->name;
    }

    public function getNameAttribute() {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }

    public function getStatusAttribute() {
        if ($this->attributes['status'] == 0) return 'UNPAID';
        else return 'PAID';
    }

    public function getIsMemberAttribute() {
        return $this->attributes['is_member'] == 1 ? 'Member' : 'Non Member';
    }

    public function event() {
        if ($this->attributes['event_id'] != 0) {
            return $this->hasOne('App\Models\Event', 'id', 'event_id');
        } else {
            return $this->hasOne('App\Models\ChapterEvent', 'id', 'chapter_event_id');
        }
        
    }    

    public function chapter() {
        return $this->hasOne('App\Models\Chapter', 'id', 'member_chapter_id');
    }

    public function getEventChapterAttribute() {
        $event_chapter = \App\Models\Chapter::find($this->attributes['event_chapter_id']);

        if ($event_chapter) {
            return $event_chapter->name;
        } else {
            return 'National';
        }
        
    }

    // public function scopeNational(Builder $query){
    //     return $query->where('event_id','<>',0);
    // }
}