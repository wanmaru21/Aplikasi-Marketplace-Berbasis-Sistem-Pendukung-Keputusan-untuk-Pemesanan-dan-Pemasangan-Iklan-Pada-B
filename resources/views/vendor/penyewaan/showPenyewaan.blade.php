@extends('layouts.vendor')


@section('content')
    <div class="card">
        <div class="card-header">
            @if (Session::has('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button> {{Session::get('pesan')}}</div>          
            @endif
            <h4> Daftar Pesanan</h4>
            <table class="table table-bordered" border="5">
                <thead class="thead-light">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama Pelanggan</th>
                        <th rowspan="2">Nama Billboard</th>
                        <th rowspan="2">Harga</th>
                        <th rowspan="2">Tanggal Awal</th>
                        <th rowspan="2">Tanggal Akhir</th>  
                        <th rowspan="2">Aksi</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penyewaan as $sewa)
                    <tr>
                        <td>{{++$no}}</td>
                        <td>{{$sewa->nama_pelanggan}}</td>
                        <td>{{$sewa->nama_bill}}</td>
                        <td>{{$sewa->harga}}</td>
                        <td>{{$sewa->tgl_awal_sewa}}</td>
                        <td>{{$sewa->tgl_akhir_sewa}}</td>
                        <td>{{$sewa->tgl_akhir_sewa}}</td>
                        <td>
                            <a href="{{route ('vendor.editPenyewaan', $sewa->id)}}" class="btn btn-light">Setuju</a>                                                     
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Tolak</button>

                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h6>Yakin Tolak Penyewaan Ini?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{route ('vendor.destroyPenyewaan', $sewa->id)}}" class="btn btn-default">Iya</a>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <form>
    
    <div class="card-body">    
    <div class="table-responsive-lg">
        <table class="table table-bordered" border="5">
            <thead class="thead-light">
                <h4>Daftar Penyewaan</h4>
                <tr>
                    <th rowspan="2">Nomor</th>
                    <th rowspan="2">Nama Pelanggan</th>
                    <th rowspan="2">Nama Billboard</th>
                    <th rowspan="2">Harga</th>
                    <th rowspan="2">Tanggal Awal</th>
                    <th rowspan="2">Tanggal Akhir</th>
                    <th rowspan="2">Lama Sewa</th>
                    <th rowspan="2">Pembayaran</th>  
                    <th rowspan="2">Aksi</th> 
                </tr>
            </thead>       
        <tbody>
            @foreach ($penyewaan as $sewa)
            <tr>
                <td>{{++$no}}</td>
                <td>{{$sewa->nama_pelanggan}}</td>
                <td>{{$sewa->nama_bill}}</td>
                <td>{{$sewa->harga}}</td>
                <td>{{$sewa->tgl_awal_sewa}}</td>
                <td>{{$sewa->tgl_akhir_sewa}}</td>
                <td>{{$sewa->tgl_akhir_sewa}}</td>
                <td>{{$sewa->status_pembayaran}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Bukti Transfer</button>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    {{$sewa->bukti_transfer}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>   
                </td>
                <td>
                    <a href="{{route ('vendor.editPenyewaan', $sewa->id)}}" class="btn btn-info">
                        <i class="fa fa-pencil"></i> Edit</a>
                                             
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i> Hapus</button>

                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h6>Yakin Hapus Data Sewa Ini?</h6>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{route ('vendor.destroyBillboard', $sewa->id)}}" class="btn btn-default">Iya</a>
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