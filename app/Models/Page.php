<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 * @package App\Models
 * @author Randall Anthony Bondoc
 */
class Page extends Model
{
    use SoftDeletes;

    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'content',
        'banner_image',
        'banner_description',
        'is_active',
        'seo_meta_id',
        'page_type_id',
    ];

    public function seo_meta()
    {
        return $this->hasOne('App\Models\SeoMeta', 'id', 'seo_meta_id');
    }

    public function page_type()
    {
        return $this->hasOne('App\Models\PageType', 'id', 'page_type_id');
    }

    public function page_sections()
    {
        return $this->hasMany('App\Models\PageSection', 'page_id');
    }
}