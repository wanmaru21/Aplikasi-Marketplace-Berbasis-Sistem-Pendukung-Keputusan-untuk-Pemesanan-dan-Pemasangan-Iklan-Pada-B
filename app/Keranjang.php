<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';

    protected $fillable = [
        'qty',
        'Harga_sewa',
        'Total_harga'
    ];

    public function pelanggan(){
        return $this->belongsTo('App\Pelanggan', 'id_pel', 'id');
    }
}
