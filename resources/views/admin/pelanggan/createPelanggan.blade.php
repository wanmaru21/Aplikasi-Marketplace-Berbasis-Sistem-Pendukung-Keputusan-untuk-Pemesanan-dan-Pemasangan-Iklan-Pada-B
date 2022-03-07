@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Akun Pelanggan</h4>
        </div>

        <div class="card-body">
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{route ('admin.storePelanggan') }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label for="nama_pel">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_pel">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Simpan </button>
                    <a href="{{route ('admin.showPelanggan')}}" class="btn btn-danger"> Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection