<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PostTag extends Authenticatable
{
    protected $table = 'post_tags';

    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
