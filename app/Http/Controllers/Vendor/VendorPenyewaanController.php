<?php

namespace App\Http\Controllers;

use App\Billboard;
use App\Penyewaan;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorPenyewaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }
      
    public function showPenyewaan(){
        $sewa = Penyewaan::with(['billboard','pelanggan','vendor'])->get();
        
        return view('vendor.penyewaan.showPenyewaan',compact('sewa'));
    }
    public function createPenyewaan(){
        return view('vendor.penyewaan.createPenyewaan');
    }

    public function editPenyewaan(){
        
    }
}
