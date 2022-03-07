@extends('layouts.vendor')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Penyewaan Billboard</h4>
        </div>

        <div class="card-body">
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{route ('vendor.storePenyewaan') }}" 
                method="POST" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label> $bill->'nama_bill'</label>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i> Hapus</button>

                    <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="alamat_bill">Nama Billboard</label>
                                    <input type="text" class="form-control" name="nama_bill">
                                </div>
                                                
                                <div class="form-group">
                                    <label for="alamat_bill">Alamat Billboard</label>
                                    <input type="text" class="form-control" name="alamat_bill">
                                </div>
                
                                <div class="form-group">
                                    <label for="display">Display/Tampilan</label><br>
                                    <input type="radio" name="display" value="horizontal">
                                        <label for="display">horizontal</label><br>
                                    <input type="radio" name="display" value="vertical">
                                        <label for="display">vertical</label><br>
                                </div>
                
                                <div class="form-group">
                                    <label for="view">View (Sisi)</label><br>
                                    <input type="radio" name="view" value="1">
                                        <label for="view">1 Sisi</label><br>
                                    <input type="radio" name="view" value="2">
                                        <label for="view">2 Sisi</label><br>
                                </div>
                
                                <div class="form-group">
                                    <label for="penerangan">Penerangan</label><br>
                                    <input type="radio" name="penerangan" value="Front">
                                        <label for="penerangan">Front Light</label><br>
                                    <input type="radio" name="penerangan" value="Back">
                                        <label for="penerangan">Back Light</label><br>
                                </div>
                
                                <div class="form-group">
                                    <label for="panjang">Panjang (dalam Meter)</label>
                                    <input type="text" class="form-control" name="panjang">
                                </div>
                
                                <div class="form-group">
                                    <label for="lebar">Lebar (dalam Meter)</label>
                                    <input type="text" class="form-control" name="lebar">
                                </div>
                
                                <div class="form-group">
                                    <label for="jarak_pandang">Jarak Pandang (dalam Meter)</label>
                                    <input type="text" class="form-control" name="jarak_pandang">
                                </div>
                
                                <div class="form-group">
                                    <label for="byk_kendaraan">Kepadatan (Kendaraan)</label>
                                    <input type="text" class="form-control" name="byk_kendaraan">
                                </div>
                
                                <div class="form-group">
                                    <label for="lat">Latitude</label>
                                    <input type="text" class="form-control" name="lat">
                                </div>
                
                                <div class="form-group">
                                    <label for="long">Longitude</label>
                                    <input type="text" class="form-control" name="long">
                                </div>
                                <div id="map"></div>
                                
                                <div class="form-group">
                                    <label for="Gambar">Gambar</label>
                                    <input type="file" class="form-control" name="Gambar">
                                </div>
                
                                <div class="form-group">
                                    <label for="Harga">Harga</label>
                                    <input type="text" class="form-control" name="Harga">
                                </div>
                
                                <div class="form-group">
                                    <label for="Lingkungan">Lingkungan</label><br>
                                    <input type="radio" name="Lingkungan" value="Jalan Raya">
                                        <label for="Lingkungan">Jalan Raya</label><br>
                                    <input type="radio" name="Lingkungan" value="Pertokoan">
                                        <label for="Lingkungan">Pertokoan</label><br>
                                    <input type="radio" name="Lingkungan" value="Pemukiman">
                                        <label for="Lingkungan">Pemukiman</label><br>
                                </div>
                
                                <div class="form-group">
                                    <label for="status_sewa">Status Sewa</label><br>
                                    <input type="radio" name="status_sewa" value="1">
                                        <label for="status_sewa">Disewa</label><br>
                                    <input type="radio" name="status_sewa" value="0">
                                        <label for="status_sewa">Tersedia</label><br>
                                </div>                
                            </div>
                            <div class="modal-footer">
                                <a href="{{route ('admin.destroyAdmin', $adm->id)}}" class="btn btn-default"> Iya  </a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                    </div>  
                <div class="form-group">
                    <label for="nama_bill">Nama Penyewa</label>
                    <input type="text" class="form-control" name="nama_penyewa">
                </div>  

                <div class="form-group">
                    <label for="nama_bill"></label>
                    <input type="text" class="form-control" name="nama_penyewa">
                </div>  

                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Simpan </button>
                    <a href="{{route ('vendor.showBillboard')}}" class="btn btn-danger"> Batal </a>
                </div>

            </form>
        </div>
    </div>
@endsection