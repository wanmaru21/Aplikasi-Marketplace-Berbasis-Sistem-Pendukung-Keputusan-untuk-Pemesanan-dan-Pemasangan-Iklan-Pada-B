@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Akun Pelanggan</h4>
    </div>

    <div class="card-body">
        <form action="{{route ('admin.updatePelanggan', $pelanggan->id) }}" 
            method="POST" enctype="multipart/form-data">@csrf
            <div class="form-group">
                <label for="nama_pel">Nama Pelanggan</label>
                <input type="text" class="form-control" name="nama_pel" value="{{$pelanggan->nama_pel}}">
            </div>
            <div class="form-group">
                <label for="alamat_pel">Alamat Pelanggan</label>
                <input type="text" class="form-control" name="alamat_pel" value="{{$pelanggan->alamat_pel}}">
            </div>
            <div class="form-group">
                <label for="notelp_pel">Telpon Pelanggan</label>
                <input type="text" class="form-control" name="telp_pelanggan" value="{{$pelanggan->notelp_pel}}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" value="{{$pelanggan->email}}">
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
                <a href="{{route ('admin.showPelanggan')}}" class="btn btn-danger"> Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection