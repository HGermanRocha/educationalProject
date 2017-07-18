<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    protected $table = 'posts';

    public function postTags()
    {
        return $this->hasMany('App\PostTag');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function comments()
    {
    	return $this->hasMany('PostComment');
    }
}
