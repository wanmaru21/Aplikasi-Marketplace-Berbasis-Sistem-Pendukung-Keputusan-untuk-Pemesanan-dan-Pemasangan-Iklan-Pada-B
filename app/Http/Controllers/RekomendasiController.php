<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function index(){
        return view("pelanggan.rekomendasi.showRekomendasi");
    }

    public function wp(){
        return view("pelanggan.rekomendasi.showRekomendasi");
    }

    
}
