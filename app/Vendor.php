<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vendor extends Authenticatable
{
    use Notifiable;
    protected $guard = 'vendor';
    protected $fillable = [
        'nama_ven', 
        'nama_perusahaan', 
        'Alamat_perusahaan', 
        'Notelp_vendor', 
        'email', 
        'password', 
        'status_verif',
        'image',
    ];

    protected $hidden = [
        'password', 
        'password_confirmation',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
