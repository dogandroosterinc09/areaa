<?php

namespace App\Models;

use App\Http\Traits\Attachments\HandlesAttachments;
use App\Http\Traits\Attachments\HasAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes, HasAttachment;

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
        return $this->belongsTo(SeoMeta::class);
    }

    public function page_type()
    {
        return $this->belongsTo(PageType::class);
    }

    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(Section::class);
    }
}