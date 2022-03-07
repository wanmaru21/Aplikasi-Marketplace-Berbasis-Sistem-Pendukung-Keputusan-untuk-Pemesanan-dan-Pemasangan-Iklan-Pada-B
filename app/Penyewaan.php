<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    protected $table = 'Penyewaan';

    protected $fillable = [
        'id_pel',
        'id_bill',
        'tgl_awal_sewa',
        'tgl_akhir_sewa',
        'total_harga',
        'status_pembayaran',
        'bukti_transfer',
        'tgl_transaksi',
    ];

    public function detail_penyewaan(){
        return $this->hasMany('App\detail_penyewaan','id_penyewaan','id');
    }

    public function pelanggan(){
        return $this->belongsTo('App\Pelanggan','id_pel','id');
    }
}
