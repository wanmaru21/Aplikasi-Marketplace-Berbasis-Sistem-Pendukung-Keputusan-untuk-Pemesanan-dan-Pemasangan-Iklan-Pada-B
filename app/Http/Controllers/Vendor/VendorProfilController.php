<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Vendor;
use Illuminate\Support\Facades\Auth;
use App\Billboard;

class VendorProfilController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    public function showProfiles(){
        $vendor = Vendor::findOrFail(Auth::user()->id);
        $bill = Billboard::with('vendor');
        
        return view("vendor.profiles.showProfiles", compact("vendor","bill"));
    }

    public function editProfiles(Vendor $vendor,$id){
        $vendor = Vendor::findOrFail($id);
        return view('vendor.profiles.editProfiles', compact('vendor'));
    }

    public function updateProfiles(Request $request,$id){
        // return $request;
        $this->validate($request, [
            'nama_vendor' => ['required', 'string', 'max:255'],
            'nama_perusahaan' => ['required', 'string', 'max:255'],
            'alamat_perusahaan' => ['required', 'string', 'max:255'],
            // 'email_perusahaan' => ['required', 'string', 'email', 'max:255', 'unique:vendors'],
            'telp_perusahaan' => ['required', 'numeric'],
        ],
        [ 'telp_perusahaan.required' => 'Input :attribute tidak boleh kosong']);

        // return $request;
        $vendor = Vendor::findOrFail($id);
        
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'images');
            Auth()->user()->update(['image'=>$filename]);
        }else{
            $vendor->update([
                "nama_ven" => $request->nama_vendor,
                "nama_perusahaan" => $request->nama_perusahaan,
                "Alamat_perusahaan" => $request->alamat_perusahaan,
                "email" => $request->email_perusahaan,
                "Notelp_vendor" => $request->telp_perusahaan,
                "password" => Hash::make($request->password),
            ]);
        if($request->password){
            //return "ISI BRO";
            $vendor->update([
                "nama_ven" => $request->nama_vendor,
                "nama_perusahaan" => $request->nama_perusahaan,
                "Alamat_perusahaan" => $request->alamat_perusahaan,
                "email" => $request->email_perusahaan,
                "Notelp_vendor" => $request->telp_perusahaan,
                "password" => Hash::make($request->password),
            ]);
        }else{
            //return "KOSONG BRO";
            $vendor->update([
                "nama_ven" => $request->nama_vendor,
                "nama_perusahaan" => $request->nama_perusahaan,
                "Alamat_perusahaan" => $request->alamat_perusahaan,
                "email" => $request->email_perusahaan,
                "Notelp_vendor" => $request->telp_perusahaan,
                ]);
            }
        }
        return redirect(route('vendor.showProfiles', $vendor->id))->with('pesan','Profil Berhasil Diperbaharui');
    }
}