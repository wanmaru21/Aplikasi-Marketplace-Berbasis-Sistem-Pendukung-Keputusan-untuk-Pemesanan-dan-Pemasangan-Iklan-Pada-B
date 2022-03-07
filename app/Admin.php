<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';

    protected $fillable = [
       'nama_adm', 
       'username', 
       'password',
    ];

    protected $hidden = [
        'password',
        'password_confirmation',
    ];
}
