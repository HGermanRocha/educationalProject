<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CourseLesson extends Authenticatable
{
    protected $table = 'course_lessons';

    public function docs()
    {
        return $this->hasMany('App\LessonDoc');
    }
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    public function comments()
    {
    	return $this->hasMany('App\LessonComment');
    }
}
