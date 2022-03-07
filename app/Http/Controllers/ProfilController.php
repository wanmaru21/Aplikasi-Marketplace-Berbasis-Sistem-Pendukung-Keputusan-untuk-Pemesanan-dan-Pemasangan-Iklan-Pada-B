<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pelanggan;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function showProfiles(){
        $pel = Pelanggan::findOrFail(Auth::user()->id);
        return view("pelanggan.profiles.showProfiles", compact("pel"));
    }

    public function editProfiles(Pelanggan $pel,$id){
        $pel = Pelanggan::findOrFail($id);
        return view('pelanggan.profiles.editProfiles', compact('pel'));
    }

    public function updateProfiles(Request $request,$id){
        // return $request;
        $this->validate($request, [
            'nama_pel' => ['required', 'string', 'max:255'],
            'alamat_pel' => ['required', 'string', 'max:255'],
            // 'email_perusahaan' => ['required', 'string', 'email', 'max:255', 'unique:vendors'],
            'telp_pel' => ['required', 'numeric'],
        ],
        [ 'telp_pel.required' => 'Input Nomor Kontak tidak boleh kosong',
            'alamat_pel.required' => 'Input Alamat tidak boleh kosong'
        ]);
        
        //return $request;
        $pel = Pelanggan::findOrFail($id);
        
        if($request->password){
            //return "ISI BRO";
            $pel->update([
                "nama_pel" => $request->nama_pel,
                "alamat_pel" => $request->alamat_pel,
                //"email" => $request->email,
                "notelp_pel" => $request->telp_pel,
                "password" => Hash::make($request->password),
            ]);
        }else{
            //return "KOSONG BRO";
            $pel->update([
                "nama_pel" => $request->nama_pel,
                "alamat_pel" => $request->alamat_pel,
                //"email" => $request->email,
                "notelp_pel" => $request->telp_pel,
                ]);
        }
        return redirect(route('pelanggan.showProfiles', $pel->id))->with('pesan','Profil Berhasil Diperbaharui');
    }
}
