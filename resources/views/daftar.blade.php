@extends('layouts.top')

@section('content')
<!-- Small boxes (Stat box) -->
  
<div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR JADI PENDONOR DARAH</h3>
        </div>
        <form class="form-horizontal">
        <div class="box-body">
              
                <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" required>
                        </div>
                </div>
                <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">No HP</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="0878xxxxxxxx" required>
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label">Kecamatan</label>
                        <div class="col-sm-10">
                        <select class="form-control">
                          <option value="0">--Pilih--</option>
                          <option>Angkinang</option>
                          <option>Daha Barat</option>
                        </select>
                        </div>
                </div>
                <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Desa</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Desa" required>
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label">Gol. Darah</label>
                        <div class="col-sm-10">
                        <select class="form-control">
                          <option value="0">--Pilih--</option>
                          <option>A</option>
                          <option>B</option>
                          <option>AB</option>
                          <option>O</option>
                        </select>
                        </div>
                </div>
                <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Riwayat Penyakit</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Riwayat Penyakit" required>
                        </div>
                </div>
            </div>
                <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Daftar</button>
                </div>
        </form>
        <!-- /.box-body -->
      </div>



@endsection
