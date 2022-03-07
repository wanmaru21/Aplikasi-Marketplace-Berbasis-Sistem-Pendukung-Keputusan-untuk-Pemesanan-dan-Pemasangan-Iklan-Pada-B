<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pelanggan extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $table = 'pelanggan';

    protected $fillable = [
        'nama_pel', 
        'email', 
        'alamat_pel',
        'notelp_pel',
        'password',
        'status_verif'
    ];

    protected $hidden = [
        'password', 
        'password_confirmation',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function keranjang(){
        return $this->hasMany('App\Keranjang', 'id_pel', 'id');
    }
    
}
