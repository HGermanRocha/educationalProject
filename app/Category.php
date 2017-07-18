<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    protected $table = 'categories';

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
