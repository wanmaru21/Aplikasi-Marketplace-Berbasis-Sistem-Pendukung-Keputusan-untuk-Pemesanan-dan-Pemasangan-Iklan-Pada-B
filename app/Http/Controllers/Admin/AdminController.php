<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Pelanggan;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function showPelanggan()
    {
        $pelanggan = Pelanggan::orderBy('id','desc')->paginate(5);
        $no = 5 *($pelanggan->currentPage()-1);

        return view('admin.pelanggan.showPelanggan', compact('pelanggan','no'));
    }

    public function createPelanggan(){
        return view('admin.pelanggan.createPelanggan');
    }

    public function storePelanggan(Request $request){
        $this->validate($request ,[
            'nama_pel' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:pelanggan'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $pelanggan = new Pelanggan;
        $pelanggan ->nama_pel = $request->nama_pel;
        $pelanggan ->email = $request->email;
        $pelanggan ->password = Hash::make($request->password);
        $pelanggan->save();
        return redirect('admin/pelanggan') 
        ->with('pesan','Data Pelanggan Berhasil Ditambahkan');
    }

    public function destroyPelanggan($id){
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/admin/pelanggan')
        ->with('pesan', 'Data Pelanggan Berhasil Di Hapus');
    }

    public function editPelanggan($id){
        $pelanggan = Pelanggan::find($id);
        return view('admin.pelanggan.editPelanggan', compact('pelanggan'));
    }

    public function updatePelanggan(Request $request,$id){
        $pelanggan = Pelanggan::find($id);
        if($request->input('password')){
            $pelanggan->nama_pel = $request->nama_pel;
            $pelanggan->alamat_pel = $request->alamat_pel;
            $pelanggan->notelp_pel = $request->telp_pelanggan;
            $pelanggan->email = $request->email;
            $pelanggan->status_verif = $request->status;
            $pelanggan->password = Hash::make($request->password);
        }else{
            $pelanggan->nama_pel = $request->nama_pel;
            $pelanggan->alamat_pel = $request->alamat_pel;
            $pelanggan->notelp_pel = $request->telp_pelanggan;
            $pelanggan->email = $request->email;
            $pelanggan->status_verif = $request->status;
        }
        $pelanggan->update();
        return redirect('/admin/pelanggan') ->with('pesan','Data Pelanggan Berhasil di Perbaharui');
    }



//for Vendor
    public function showVendor()
    {
        $vendor = Vendor::orderBy('id','desc')->paginate(5);
        $no = 5 *($vendor->currentPage()-1);

        return view('admin.vendor.showVendor', compact('vendor','no'));
    }

    public function createVendor(){
        return view('admin.vendor.createVendor');
    }

    public function storeVendor(Request $request){
        $this->validate($request ,[
            'nama_ven' => ['required', 'string', 'max:255'],
            'nama_perusahaan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:vendors'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $vendor = new Vendor;
        $vendor ->nama_ven = $request->nama_ven;
        $vendor ->nama_perusahaan = $request->nama_perusahaan;
        $vendor ->email = $request->email;
        $vendor ->password = Hash::make($request->password);
        $vendor->save();
        return redirect('admin/vendor') 
        ->with('pesan','Data Vendor Berhasil Ditambahkan');
    }

    public function destroyVendor($id){
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect('/admin/vendor')
        ->with('pesan', 'Data Vendor Berhasil Di Hapus');
    }

    public function editVendor($id){
        $vendor = Vendor::find($id);
        return view('admin.vendor.editVendor', compact('vendor'));
    }

    public function updateVendor(Request $request,$id){
        $vendor = Vendor::find($id);
        if($request->input('password')){
            $vendor->nama_ven = $request->nama_ven;
            $vendor ->nama_perusahaan = $request->nama_perusahaan;
            $vendor ->Alamat_perusahaan = $request->alamat_perusahaan;
            $vendor ->Notelp_vendor = $request->telp_perusahaan;
            $vendor->email = $request->email;
            $vendor->status_verif = $vendor->status;
            $vendor->password = Hash::make($request->password);
        }else{
            $vendor->nama_ven = $request->nama_ven;
            $vendor ->nama_perusahaan = $request->nama_perusahaan;
            $vendor ->Alamat_perusahaan = $request->alamat_perushaan;
            $vendor ->Notelp_vendor = $request->telp_perusahaan;
            $vendor->email = $request->email;
            $vendor->status_verif = $vendor->status;
        }
        $vendor->update();
        return redirect('/admin/vendor') ->with('pesan','Data Vendor Berhasil Diperbaharui');
    }


//for Admin
    public function showAdmin()
    {
        $admin = Admin::orderBy('id','desc')->paginate(5);
        $no = 5 *($admin->currentPage()-1);

        return view('admin.admin.showAdmin', compact('admin','no'));
    }

    public function createAdmin(){
        return view('admin.admin.createAdmin');
    }

    public function storeAdmin(Request $request){
        $this->validate($request ,[
            'username' => ['required', 'string', 'unique:admins', 'max:20'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $admin = new Admin;
        $admin ->nama_adm = $request->nama_adm;
        $admin ->username = $request->username;
        $admin ->password = Hash::make($request->password);
        $admin->save();
        return redirect('admin/admin') 
        ->with('pesan','Data Admin Berhasil Ditambahkan');
    }

    public function destroyAdmin($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/admin/admin')
        ->with('pesan', 'Data Admin Berhasil Di Hapus');
    }

    public function editAdmin($id){
        $admin = Admin::find($id);
        return view('admin.admin.editAdmin', compact('admin'));
    }

    public function updateAdmin(Request $request,$id){
        $admin = Admin::find($id);
        if($request->input('password')){
            $admin->nama_adm = $request->nama_adm;
            $admin->username = $request->username;
            $admin->password = Hash::make($request->password);
        }else{
            $admin->nama_adm = $request->nama_adm;
            $admin->username = $request->username;
        }
        $admin->update();
        return redirect('/admin/admin') ->with('pesan','Data Admin Berhasil Diperbaharui');
    }
}
