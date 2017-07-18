<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserFavorite extends Authenticatable
{
    protected $table = 'user_favorite';

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
