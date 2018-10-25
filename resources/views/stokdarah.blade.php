@extends('layouts.top')

@section('content')
<!-- Small boxes (Stat box) -->
  
<div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">STOK DARAH</h3>
        </div>
        <div class="box-body">
                <table class="table table-condensed table-bordered">
                        <tbody>
                            <tr class="bg-red">
                          <th style="width: 10px">No</th>
                          <th>Golongan Darah</th>
                          <th>Baik</th>
                          <th>Rusak</th>
                          <th style="width: 80px">Stok Darah</th>
                        </tr>
                        <tr class="bg-gray color-palette">
                          <td>1.</td>
                          <td>A</td>
                          <td>2</td>
                          <td>3</td>
                          <td><span class="badge bg-red">5</span></td>
                        </tr>
                        <tr class="bg-gray color-palette">
                                <td>2.</td>
                                <td>B</td>
                                <td>2</td>
                                <td>3</td>
                                <td><span class="badge bg-red">5</span></td>
                              </tr>
                              <tr class="bg-gray color-palette">
                                    <td>3.</td>
                                    <td>AB</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td><span class="badge bg-red">5</span></td>
                                  </tr>
                                  <tr class="bg-gray color-palette">
                                        <td>4.</td>
                                        <td>O</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td><span class="badge bg-red">5</span></td>
                                      </tr>
                      </tbody></table>
                </div>
        <!-- /.box-body -->
      </div>



@endsection
