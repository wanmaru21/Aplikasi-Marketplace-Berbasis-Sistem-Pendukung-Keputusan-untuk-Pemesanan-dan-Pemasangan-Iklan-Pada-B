<?php

namespace App\Http\Controllers;

use App\Keranjang;
use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::findorFail(Auth::user()->id);

        return view("pelanggan.keranjang.showKeranjang");
    }

    public function createPesanan(){
        
    }

    public function editPesanan(){
        
    }

    public function storePesanan(){
        
    }
}
