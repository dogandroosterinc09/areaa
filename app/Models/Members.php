<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Members extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'bio',
        'position',
        'location',
        'company',
        'language_spoken',
        'designations',
        'area_of_specialty',
        'social_media',
        'authorize_profile_id',
        'authorize_payment_profile_id',
        'authorize_address_id',
        'authorize_subscription_id',
        'subscription_status',
        'paypal_id',
        'joined_date',
        'expires'
    ];

    public function getAvatarAttribute() {
        $user = \App\Models\User::where('id',$this->attributes['user_id'])->get()->first();

        return $user->profile_image;
    }

    public function getNameAttribute() {
        $user = \App\Models\User::where('id',$this->attributes['user_id'])->get()->first();

        return $user->first_name . ' ' . $user->last_name;
    }

    public function getMembershipYearAttribute() {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('Y');;        
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function getChapterAttribute() {
        $user = \App\Models\User::where('id',$this->attributes['user_id'])->get()->first();

        $chapter = \App\Models\Chapter::find($user->chapter_id);

        if ($chapter) {
            return $chapter->name;
        } else {
            return 'National';
        }
        
    }
}