@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Rekomendasi Billboard</h4>
                </div>

                <div class="card-body">
                    <div>
                        <table class="table">
                            <tbody>
                              <tr>
                                <th>Lingkungan</th>
                                <td><select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  <option selected>Pilih Lingkungan</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </td>
                                <td>
                                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Pilih Tingkat Kepentingan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </td>
                                <td rowspan="6">
                                  <p>Keterangan Tingkat Kepentingan:</p>
                                  <p>1 : Sangat Tidak Penting</p>
                                  <p>2 : Tidak Penting</p>
                                  <p>3 : Cukup Penting</p>
                                  <p>4 : Penting</p>
                                  <p>5 : Sangat Penting</p>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Kepadatan</th>
                                <td><select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  <option selected>Pilih Tingkat Kepadatan</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </td>
                                <td>
                                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Pilih Tingkat Kepentingan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Jarak Pandang</th>
                                <td><select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  <option selected>Pilih Tingkat Jarak Pandang</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </td>
                                <td>
                                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Pilih Tingkat Kepentingan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Harga</th>
                                <td><select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  <option selected>Pilih Rentang Harga</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </td>
                                <td>
                                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Pilih Tingkat Kepentingan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </td>
                              </tr>
                          </table>
                          <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection 

