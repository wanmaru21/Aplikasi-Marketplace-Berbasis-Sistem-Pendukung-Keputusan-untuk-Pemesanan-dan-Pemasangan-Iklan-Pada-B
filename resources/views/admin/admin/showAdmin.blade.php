@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4> Data Admin
                <a href="{{ route('admin.createAdmin') }}" class="btn btn-primary" style="float: right">
                    <i class="fa fa-plus"></i> Tambah Akun</a>
            </h4>
        </div>
    </div>
    <form>
    
    <div class="card-body">
        @if (Session::has('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button> {{Session::get('pesan')}}</div>          
        @endif
    
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Nomor</th>
                    <th>Nama Admin</th>
                    <th>Username</th>
                    <th>Status</th>  
                    <th>Aksi</th> 
                </tr>
            </thead>       
        <tbody>
            @foreach ($admin as $adm)
            <tr>
                <td>{{++$no}}</td>
                <td>{{$adm->nama_adm}}</td>
                <td>{{$adm->username}}</td>
                <td>{{$adm->status_aktif}}</td>
                <td>
                    <a href="{{route ('admin.editAdmin', $adm->id)}}" class="btn btn-info">
                        <i class="fa fa-pencil"></i> Edit</a>
                                             
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i> Hapus</button>

                    <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-body">
                                <h6>Yakin Hapus Data Ini?</h6>
                            </div>
                            <div class="modal-footer">
                                <a href="{{route ('admin.destroyAdmin', $adm->id)}}" class="btn btn-default"> Iya  </a>
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
        <div style="float: right">{{ $admin->links() }}</div>
    </div>
    </form>
@endsection

