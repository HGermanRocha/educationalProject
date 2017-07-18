<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Course extends Authenticatable
{
    protected $table = 'courses';

    public function users()
    {
        return $this->hasMany('App\UserCourse');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function userFavorites()
    {
    	return $this->hasMany('App\UserFavorite');
    }
    public function lessons()
    {
    	return $this->hasMany('CourseLesson');
    }
}
