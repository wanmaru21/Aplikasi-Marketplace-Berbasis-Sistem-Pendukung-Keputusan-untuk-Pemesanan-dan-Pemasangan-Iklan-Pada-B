@extends('layouts.vendor')


@section('content')
    <div class="card">
        <div class="card-header">
            <h4> Data Billboard
                <a href="{{ route('vendor.createBillboard') }}" class="btn btn-primary" style="float: right">
                    <i class="fa fa-plus"></i> Tambah Billboard</a>
            </h4>
        </div>
    </div>
    <form>
    
    <div class="card-body">
        @if (Session::has('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button> {{Session::get('pesan')}}</div>          
        @endif
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
                    <th rowspan="2">Aksi</th> 
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
                <td>
                    <a href="{{route ('vendor.editBillboard', $bil->id)}}" class="btn btn-info">
                        <i class="fa fa-pencil"></i> Edit</a>
                                             
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i> Hapus</button>

                    <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-body">
                                <h6>Yakin Hapus Data Ini?</h6>
                            </div>
                            <div class="modal-footer">
                                <a href="{{route ('vendor.destroyBillboard', $bil->id)}}" class="btn btn-default"> Iya  </a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                    </div>   
                </td>
            </tr>    
            @endforeach
        </tbody>
        </table>
    </div>
        <div style="float: right">{{ $bill->links() }}</div>
    </div>
    </form>
@endsection