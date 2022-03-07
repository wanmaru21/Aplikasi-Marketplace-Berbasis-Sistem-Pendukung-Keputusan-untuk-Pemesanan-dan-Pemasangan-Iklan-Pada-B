@extends('layouts.vendor')

@section('content')
    <div class="card">
        @if (Session::has('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button> {{Session::get('pesan')}}</div>          
        @endif
        <div class="card-header">
            <img src="{{ asset('storage/images/'.Auth::user()->image) }}" height="200px" width="200px;">
            <h4>Nama                : {{Auth::user()->nama_ven}}</h4>
            <h4>Nama Perusahaan     : {{Auth::user()->nama_perusahaan}}</h4>
            <h4>Alamat Perusahaan    : {{Auth::user()->Alamat_perusahaan}}</h4>
            <h4>Email               : {{Auth::user()->email}}</h4>
            <h4>Nomor Kontak       : {{Auth::user()->Notelp_vendor}}</h4>
        </div>
        <div>
            <a href="{{route ('vendor.editProfiles',Auth::user()->id)}}" class="btn btn-info">
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
        <tbody>
        @foreach ($bill as $bil)
        @if(Auth::user()->id == $bil->id_ven)
        <tr>
            <td>{{++$no}}</td>
            <td>{{$bil->nama_bill}}</td>
            <td>{{$bil->alamat_bill}}</td>
            <td>{{$bil->display}}</td>
            <td>{{$bil->view}}</td>
            <td>{{$bil->penerangan}}</td>
            <td>{{$bil->panjang}}</td>
            <td>{{$bil->lebar}}</td>
            <td>{{$bil->jarak_pandang}}</td>
            <td>{{$bil->Byk_kendaraan}}</td>
            <td>{{$bil->lat}}</td>
            <td>{{$bil->long}}</td>
            <td>{{$bil->Gambar}}</td>
            <td>{{$bil->Harga}}</td>
            <td>{{$bil->Lingkungan}}</td>
            <td>{{$bil->status_sewa}}</td>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
@endsection 