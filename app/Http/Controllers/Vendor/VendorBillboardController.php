<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Billboard;
use App\Vendor;
use Illuminate\Support\Facades\Auth;

class VendorBillboardController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    public function showBillboard(){
        $bill = Billboard::orderBy('id','desc')->paginate(10);
        $no = 10 *($bill->currentPage()-1);

        return view('vendor.billboard.showBillboard', compact('bill','no'));
    }
    
    public function createBillboard(){
        return view('vendor.billboard.createBillboard');
    }

    public function storeBillboard(Request $request){
        $bill = new Billboard;
        $bill['id_ven'] = Vendor::findOrFail(Auth::user()->id);
        $bill ->nama_bill = $request->nama_bill;
        $bill ->alamat_bill = $request->alamat_bill;
        $bill ->display = $request->display;
        $bill ->view = $request->view;
        $bill ->penerangan = $request->penerangan;
        $bill ->panjang = $request->panjang;
        $bill ->lebar = $request->lebar;
        $bill ->jarak_pandang = $request->jarak_pandang;
        $bill ->byk_kendaraan = $request->byk_kendaraan;
        $bill ->lat = $request->lat;
        $bill ->long = $request->long;
        $bill ->Gambar = $request->Gambar;
        $bill ->Harga = $request->alamat_bill;
        $bill ->Lingkungan = $request->Harga;
        $bill ->status_sewa = $request->status_sewa;
        $bill->save();
        return redirect('vendor/billboard') 
        ->with('pesan','Data Billboard Berhasil Ditambahkan');
    }

    public function updateBillboard(Request $request,$id){
        $bill = Billboard::find($id);
        $bill['id_ven'] = Vendor::findOrFail(Auth::user()->id);
        $bill ->nama_bill = $request->nama_bill;
        $bill ->alamat_bill = $request->alamat_bill;
        $bill ->display = $request->display;
        $bill ->view = $request->view;
        $bill ->penerangan = $request->penerangan;
        $bill ->panjang = $request->panjang;
        $bill ->lebar = $request->lebar;
        $bill ->jarak_pandang = $request->jarak_pandang;
        $bill ->byk_kendaraan = $request->byk_kendaraan;
        $bill ->lat = $request->lat;
        $bill ->long = $request->long;
        $bill ->Gambar = $request->Gambar;
        $bill ->Harga = $request->alamat_bill;
        $bill ->Lingkungan = $request->Harga;
        $bill ->status_sewa = $request->status_sewa;
        $bill->update();
        return redirect('/vendor/billboard') ->with('pesan','Data Billboard Berhasil di Perbaharui');
    }

    public function destroyBillboard($id){
        $bill = Billboard::find($id);
        $bill->delete();
        return redirect('/vendor/billboard')
        ->with('pesan', 'Data Billboard Berhasil Di Hapus');
    }

    public function mapMarker(){
        $bill = Billboard::all();
        $map_markers = array ();
        foreach ($bill as $key => $location) {
            $map_markers[] = (object)array(
                'lat' => $location->lat,
                'long' => $location->long,
            );
        }
        return response()->json($map_markers);
    }
}
