<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Vendor;

class Billboard extends Model
{
    protected $table = 'billboard';

    protected $fillable = [
        'id_ven',
        'nama_bill', 
        'alamat_bill', 
        'display',
        'view',
        'penerangan',
        'panjang',
        'lebar',
        'jarak_pandang',
        'byk_kendaraan',
        'lat',
        'long',
        'Gambar',
        'Harga',
        'Lingkungan',
        'status_sewa',
    ];

    public function vendor(){
        return $this->belongsTo('App\Vendor', 'id_ven', 'id');
    }

    public function detail_penyewaan(){
        return $this->hasMany('App\detail_penyewaan','id_billboard','id');
    }
}
