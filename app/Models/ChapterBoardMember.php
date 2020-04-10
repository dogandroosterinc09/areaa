<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\Attachments\HasAttachment;
use Illuminate\Database\Eloquent\SoftDeletes;


class ChapterBoardMember extends Model
{
    use SoftDeletes, HasAttachment;

    const TYPE_EXECUTIVE = 1;
    const TYPE_BOARD_OF_DIRECTOR = 2;
    const TYPE_ADVISORY = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bio',
        'chapter_id',
        'slug',
        'type',
        'order',
        'avatar',
        'position',
        'is_active',
        'last_name',
        'first_name',
    ];

    public function getNameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }

    public function getTypeAsStringAttribute()
    {
        switch ($this->attributes['type']) {
            case self::TYPE_EXECUTIVE:
                return 'Executive';
            case self::TYPE_BOARD_OF_DIRECTOR:
                return 'Board of Director';
            case self::TYPE_ADVISORY:
                return 'Advisory';
            default: return '';
        }
    }

    public function getChapterAttribute()
    {
        $chapter = \App\Models\Chapter::select('name')->where('id',$this->attributes['chapter_id'])->get()->first();
        return $chapter->name;
    }
}