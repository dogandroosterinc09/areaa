<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ChapterPageEvent extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chapter_id',
        'content',
        'banner_image',
        'seo_meta_id',
        'section_1'
    ];

    public function getChapterAttribute() {
        $chapter = \App\Models\Chapter::select('name')->where('id',$this->attributes['chapter_id'])->get()->first();
        return $chapter->name;
    }
}