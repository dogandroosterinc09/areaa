<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ChapterPageHomeslider extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chapter_id',
        'name',
        'background_image',
        'thumbnail_image',
        'thumbnail_text',
        'content',
        'button_label',
        'button_link',
        'is_active',
    ];

    public function getChapterAttribute() {
        $chapter = \App\Models\Chapter::select('name')->where('id',$this->attributes['chapter_id'])->get()->first();
        return $chapter->name;
    }
}