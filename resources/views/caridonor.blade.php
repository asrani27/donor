@extends('layouts.top')

@section('content')
<!-- Small boxes (Stat box) -->
  
<div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">CARI PENDONOR DARAH</h3>
        </div>
        <div class="box-body">
                <div class="row">
                  <div class="col-xs-4">
                        <div class="form-group">
                                <select class="form-control select-sm">
                                  <option>--Filter Berdasarkan Jenis Kelamin--</option>
                                  <option>Pria</option>
                                  <option>Wanita</option>
                                </select>
                        </div>
                  </div>
                  <div class="col-xs-4">
                        <div class="form-group">
                                <select class="form-control select-sm">
                                  <option>--Filter Berdasarkan Gol. Darah--</option>
                                  <option>A</option>
                                  <option>B</option>
                                  <option>AB</option>
                                  <option>O</option>
                                </select>
                        </div>
                  </div>
                  <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="Cari Berdasarkan Nama">
                  </div>
                </div>
                <div class="box-body table-responsive no-padding">
                <table class="table table-hover table-condensed table-bordered">
                        <tbody>
                            <tr class="bg-red">
                          <th style="width: 10px">No</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Golongan Darah</th>
                          <th>Jumlah</th>
                          <th>Telp</th>
                        </tr>
                        <tr class="bg-gray color-palette">
                          <td>1.</td>
                          <td>Ade</td>
                          <td>Pria</td>
                          <td>Jl Kandangan no 4 rt 3 rw 2 kodepos</td>
                          <td><span class="badge bg-red">AB</span></td>
                          <td>1</td>
                          <td>0981977226633</td>
                        </tr>
                        <tr class="bg-gray color-palette">
                                <td>1.</td>
                                <td>Ihsan</td>
                                <td>Pria</td>
                                <td>Jl Kandangan no 4 rt 3 rw 2 kodepos</td>
                                <td><span class="badge bg-red">O</span></td>
                                <td>1</td>
                                <td>0981977226633</td>
                              </tr>
                      </tbody></table>
                </div>
                </div>
        <!-- /.box-body -->
      </div>



@endsection
