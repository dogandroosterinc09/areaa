<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Webinars extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [        
        'link',
        'title',
        'media_category_id'
    ];

    public function getMediaCategoryAttribute() {
        $media_category = \App\Models\MediaCategory::select('name')->where('id',$this->attributes['media_category_id'])->get()->first();
        return $media_category->name;
    }
}