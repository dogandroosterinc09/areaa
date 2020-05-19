<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\CustomerResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @author Randall Anthony Bondoc
 */
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'user_name',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'profile_image',
        'chapter_id',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Override and make all passwords encrypted.
     *
     * @param  string $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $user = $this;
        $this->notify(new CustomerResetPassword($token, $user));
    }
    
    public function getChapterAttribute()
    {
        $chapter = \App\Models\Chapter::select('name')->where('id',$this->attributes['chapter_id'])->get()->first();

        if ($chapter) {
            return $chapter->name;
        } else {
            return 'national';
        }
    }

    public function getChapterSlugAttribute()
    {
        $chapter = \App\Models\Chapter::select('slug')->where('id',$this->attributes['chapter_id'])->get()->first();
        return $chapter->slug;
    }
}
