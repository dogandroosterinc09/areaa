<?php

namespace App\Models;

use App\Http\Traits\Attachments\HasAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ChapterHome extends Model
{
    use SoftDeletes, HasAttachment;

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

        'who_we_are_title',
        'who_we_are_featured_image',
        'who_we_are_featured_image_alt',
        'who_we_are_content',
        'who_we_are_button1_text',
        'who_we_are_button1_link',
        'who_we_are_button2_text',
        'who_we_are_button2_link',

        'member_benefits_title',
        'member_benefits_featured_image',
        'member_benefits_featured_image_alt',
        'member_benefits_content',
        'member_benefits_items',
        'member_benefits_button1_text',
        'member_benefits_button1_link',
        'member_benefits_button2_text',
        'member_benefits_button2_link',
        'member_benefits_items',

        'sponsors_title',
        'sponsors_content',
        'sponsors_button1_text',
        'sponsors_button1_link',

        'sponsors_filters',

        'top_sponsor',

        'other_sponsors',
    ];

    public function getChapterAttribute() {
        $chapter = \App\Models\Chapter::select('name')->where('id',$this->attributes['chapter_id'])->get()->first();
        return $chapter->name;
    }
}