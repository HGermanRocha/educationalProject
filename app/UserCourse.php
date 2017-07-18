<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserCourse extends Authenticatable
{
    protected $table = 'course_users';

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
