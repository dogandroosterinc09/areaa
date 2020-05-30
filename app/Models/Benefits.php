<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Benefits extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category_id',
        'thumbnail',
        'short_description',
        'content',
        'slug',
        'is_active'
    ];

    public function getCategoryAttribute() {
        $category = \App\Models\BenefitsCategories::find($this->attributes['category_id']);

        return $category->name;
    }
}