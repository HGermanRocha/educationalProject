<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tag extends Authenticatable
{
    protected $table = 'tags';

    public function postTags()
    {
        return $this->hasMany('App\PostTag');
    }
}
