<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserSession extends Authenticatable
{
    protected $table = 'user_sessions';

}
