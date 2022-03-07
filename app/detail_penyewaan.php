<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_penyewaan extends Model
{
    protected $table = 'detail_penyewaan';

    protected $fillable = [
        'qty',
        'Harga_sewa',
        'Total_harga'
    ];

    public function billboard(){
        return $this->belongsTo('App\Billboard','id_billboard','id');
    }

    public function penyewaan(){
        return $this->belongsTo('App\Penyewaan','id_penyewaan','id');
    }
}
