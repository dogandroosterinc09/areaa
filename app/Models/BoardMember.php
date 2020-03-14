<?php

namespace App\Models;

use App\Http\Traits\Attachments\HandlesAttachments;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BoardMember extends Model
{
    use SoftDeletes, HandlesAttachments;

    const TYPE_EXECUTIVE = 1;
    const TYPE_DELEGATE = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bio',
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

    public function getUrlAttribute()
    {
        $type = strtolower($this->getTypeAsStringAttribute());

        $route = "board.{$type}.show";

        return route($route, $this->attributes['slug']);
    }

    public function getTypeAsStringAttribute()
    {
        switch ($this->attributes['type']) {
            case self::TYPE_EXECUTIVE:
                return 'Executive';
            case self::TYPE_DELEGATE:
                return 'Delegate';
            default: return '';
        }
    }

    public function getIsExecutiveAttribute()
    {
        return $this->attributes['type'] == self::TYPE_EXECUTIVE;
    }

    public function getIsDelegateAttribute()
    {
        return $this->attributes['type'] == self::TYPE_DELEGATE;
    }

    public function scopeExecutives(Builder $query)
    {
        return $query->whereType(self::TYPE_EXECUTIVE);
    }

    public function scopeDelegates(Builder $query)
    {
        return $query->whereType(self::TYPE_DELEGATE);
    }
}