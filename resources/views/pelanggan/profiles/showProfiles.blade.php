@extends('layouts.app')

@section('content')
    <div class="card">
        @if (Session::has('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button> {{Session::get('pesan')}}</div>          
        @endif
        <div class="card-header">
            <h4>Nama                : {{Auth::user()->nama_pel}}</h4>
            <h4>Alamat              : {{Auth::user()->alamat_pel}}</h4>
            <h4>Email               : {{Auth::user()->email}}</h4>
            <h4>Nomor Kontak       : {{Auth::user()->notelp_pel}}</h4>
        </div>
        <div>
            <a href="{{route ('pelanggan.editProfiles',Auth::user()->id)}}" class="btn btn-info">
                <i class="fa fa-pencil"></i> Edit</a>
        </div>
        
    </div>
    <div class="table-responsive-lg">
        <table class="table table-bordered" border="5">
        <thead class="thead-light">
            <tr>
                <th rowspan="2">Nomor</th>
                <th rowspan="2">Nama Billboard</th>
                <th rowspan="2">Alamat Billboard</th>
                <th rowspan="2">Display</th>
                <th rowspan="2">View</th>
                <th rowspan="2">Penerangan</th>  
                <th colspan="2" style="text-align: center">Ukuran</th>
                <th rowspan="2">Jarak Pandang</th>
                <th rowspan="2">Banyak Kendaraan</th>
                <th colspan="2" style="text-align: center">Koordinat</th>
                <th rowspan="2">Gambar</th>
                <th rowspan="2">Harga</th>
                <th rowspan="2">Lingkungan</th>
                <th rowspan="2">Status Sewa</th>
            </tr>
            <tr>
                <th>Panjang (m)</th>
                <th>Lebar (m)</th>
                <th>Lat</th>
                <th>Long</th>
            </tr>
        </thead>  
        </div>
@endsection 