@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('pelanggan.updateProfiles', $pel->id) }}" 
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                            <label for="nama_pel">Nama</label>
                            <input type="text" class="form-control" name="nama_pel" value="{{$pel->nama_pel}}">
                        </div>
            
                        <div class="form-group">
                            <label for="alamat_pel">Alamat</label>
                            <input type="text" class="form-control" name="alamat_pel" value="{{$pel->alamat_pel}}">
                        </div>
        
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" name="email" value="{{$pel->email}}">
                        </div>
        
                        <div class="form-group">
                            <label for="notelp_pel">Nomor Kontak</label>
                            <input type="text" class="form-control" name="telp_pel" value="{{$pel->notelp_pel}}">
                        </div> 
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                            <label>*) Jika Password Tidak Diganti, Kosongkan Saja</label>
                        </div>

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <button type="submit" class="btn btn-success"> Update </button>
                            <a href="{{route ('pelanggan.showProfiles',Auth::user()->id)}}" class="btn btn-danger"> Batal</a>
                        </div>
                    </form>
               </div>
@endsection

