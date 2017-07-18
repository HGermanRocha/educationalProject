<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LessonDoc extends Authenticatable
{
    protected $table = 'lesson_docs';

    public function lesson()
    {
        return $this->belongsTo('App\CourseLesson');
    }
}
