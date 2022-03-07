@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Akun Vendor</h4>
    </div>

    <div class="card-body">
        <form action="{{route ('admin.updateVendor', $vendor->id) }}" 
            method="POST" enctype="multipart/form-data">@csrf
            <div class="form-group">
                <label for="nama_ven">Nama Vendor</label>
                <input type="text" class="form-control" name="nama_ven" value="{{$vendor->nama_ven}}">
            </div>

            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" class="form-control" name="nama_perusahaan" value="{{$vendor->nama_perusahaan}}">
            </div>

            <div class="form-group">
                <label for="Alamat_perusahaan">Alamat Perusahaan</label>
                <input type="text" class="form-control" name="alamat_perusahaan" value="{{$vendor->Alamat_perusahaan}}">
            </div>

            <div class="form-group">
                <label for="Notelp_vendor">Telepon Perusahaan</label>
                <input type="text" class="form-control" name="telp_perusahaan" value="{{$vendor->Notelp_vendor}}">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" value="{{$vendor->email}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                <label>*) Jika Password Tidak Diganti, Kosongkan Saja</label>
            </div>

            <div class="form-group">
                <select name="status" class="form-control">
                    <option value="">Status Akun</option>
                    <option value="0">Tidak Terverifikasi</option>
                    <option value="1">Terverifikasi</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="{{route ('admin.showVendor')}}" class="btn btn-danger"> Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection