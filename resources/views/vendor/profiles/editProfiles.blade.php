@extends('layouts.vendor')

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('vendor.updateProfiles', $vendor->id) }}" 
                method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="form-group">
                    <label for="nama_ven">Nama</label>
                    <input type="text" class="form-control" name="nama_vendor" value="{{$vendor->nama_ven}}">
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
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email_perusahaan" value="{{$vendor->email}}">
                </div>

                <div class="form-group">
                    <label for="Notelp_vendor">Nomor Kontak</label>
                    <input type="text" class="form-control" name="telp_perusahaan" value="{{$vendor->Notelp_vendor}}">
                </div> 

                <div class="form-group">
                    <label for="image">Foto Profil</label>
                    <input type="file" name="image">
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
                    <a href="{{route ('vendor.showProfiles',Auth::user()->id)}}" class="btn btn-danger"> Batal</a>
                </div>
            </form>
        </div>
@endsection