@extends('layouts.top')

@section('content')
<!-- Small boxes (Stat box) -->
  
<div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Selamat Datang Di web Donor Darah</h3>
        </div>
        <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="{{ url('LTE/dn.jpg')}}"  width="100%" height="50%" alt="First slide">
        
                            {{-- <div class="carousel-caption">
                              First Slide
                            </div> --}}
                          </div>
                          <div class="item">
                            <img src="{{ url('LTE/dn2.png')}}"  width="100%" height="50%" alt="Second slide">
        
                            {{-- <div class="carousel-caption">
                              Second Slide
                            </div> --}}
                          </div>
                          <div class="item">
                            <img src="{{ url('LTE/dn3.jpg')}}" width="100%" height="50%" alt="Third slide">
        
                            {{-- <div class="carousel-caption">
                              Third Slide
                            </div> --}}
                          </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                          <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                          <span class="fa fa-angle-right"></span>
                        </a>
                      </div>
                Donor darah adalah proses pengambilan darah dari seseorang secara sukarela atau pengganti untuk disimpan di bank darah sebagai stok darah untuk kemudian digunakan untuk transfusi darah
        </div>
        <!-- /.box-body -->
      </div>



@endsection
