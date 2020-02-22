<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contact extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'message',
        'last_name',
        'first_name',
    ];

    public function getNameAttribute()
    {
        return "{$this->attributes['first_name']} {$this->attributes['last_name']}";
    }
}