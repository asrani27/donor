@extends('layouts.top')

@section('content')
<!-- Small boxes (Stat box) -->
  
<div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">JADWAL DONOR DARAH</h3>
        </div>
        <div class="box-body">
                <table class="table table-condensed table-bordered">
                        <tbody>
                            <tr class="bg-red">
                          <th style="width: 10px">No</th>
                          <th>Hari/Tgl</th>
                          <th>Tempat</th>
                          <th>Waktu</th>
                          <th>Keterangan</th>
                        </tr>
                        <tr class="bg-gray color-palette">
                          <td>1.</td>
                          <td>Senin / 1 Mei 2018</td>
                          <td>PMI HSS</td>
                          <td>09:00</td>
                          <td>Donor Massal</td>
                        </tr>
                      </tbody></table>
                </div>
        <!-- /.box-body -->
      </div>



@endsection
