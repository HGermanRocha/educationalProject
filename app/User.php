<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

    public function favorites()
    {
        return $this->hasMany('App\UserFavorite');
    }
    public function courses()
    {
        return $this->hasMany('App\UserCourse');
    }

    public function postComments()
    {
        return $this->hasMany('App\PostComment');
    }
    public function postLessons()
    {
        return $this->hasMany('App\PostLesson');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
