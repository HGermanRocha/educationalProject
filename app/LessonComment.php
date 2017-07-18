<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LessonComment extends Authenticatable
{
    protected $table = 'lesson_comments';

    public function lesson()
    {
        return $this->belongsTo('App\CourseLesson');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
