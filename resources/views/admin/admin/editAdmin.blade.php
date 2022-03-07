@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Akun Admin</h4>
    </div>

    <div class="card-body">
        <form action="{{route ('admin.updateAdmin', $admin->id) }}" 
            method="POST" enctype="multipart/form-data">@csrf
            <div class="form-group">
                <label for="nama_adm">Nama Admin</label>
                <input type="text" class="form-control" name="nama_adm" value="{{$admin->nama_adm}}">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="{{$admin->email}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                <label>*) Jika Password Tidak Diganti, Kosongkan Saja</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="{{route ('admin.showPelanggan')}}" class="btn btn-danger"> Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection