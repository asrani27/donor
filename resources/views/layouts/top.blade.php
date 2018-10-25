
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DONOR SEHATI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('LTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('LTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('LTE/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('LTE/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('LTE/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    @include('layouts.topmenu')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      {{-- <section class="content-header">
        <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section> --}}

      <!-- Main content -->
      <section class="content">
          
      <!-- Info boxes -->
      <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              

              <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Menu Navigasi 
                      </h3>
                    </div>
                    <div class="box-body">
                    <a href="{{url('/stokdarah')}}" class="btn btn-block btn-social btn-bitbucket btn-lg">
                        <i class="fa fa-bitbucket"></i> Stok Darah
                      </a>
                      <a href="{{url('/caridonor')}}" class="btn btn-block btn-social btn-dropbox btn-lg">
                        <i class="fa fa-search"></i> Cari Pendonor
                      </a>
                      <a href="{{url('/jadwaldonor')}}" class="btn btn-block btn-social btn-facebook btn-lg">
                        <i class="fa fa-tumblr"></i> Jadwal Donor
                      </a>
                    <a href="{{url('/daftar')}}" class="btn btn-block btn-social btn-flickr btn-lg">
                        <i class="fa fa-flickr"></i> Daftar Jadi Pendonor
                      </a>
                      <br>
                    </div>
                  </div>
            </div>
            <!-- /.col -->
            <div class="col-md-8 col-sm-6 col-xs-12">
    
                
        @yield('content')
      
            </div>
            <!-- /.col -->

          </div>
          <!-- /.row -->

          
                  <!-- /.box -->
        <div class="row">
          <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Data Pendonor Terbaru 
                      </h3>
                    </div>
                    <div class="box-body">
                      
                            <table class="table table-bordered table-condensed">
                                    <tbody><tr>
                                      <th style="width: 10px">No</th>
                                      <th>Nama</th>
                                      <th>Jumlah</th>
                                    </tr>
                                    <tr>
                                      <td>1.</td>
                                      <td>Ade Prasetyo</td>
                                      <td><span class="badge bg-red">2 Kantong</span></td>
                                    </tr>
                                    <tr>
                                            <td>2.</td>
                                            <td>Rahmad</td>
                                            <td><span class="badge bg-red">2 Kantong</span></td>
                                    </tr>
                                    <tr>
                                            <td>3.</td>
                                            <td>Ihsan</td>
                                            <td><span class="badge bg-red">1 Kantong</span></td>
                                    </tr>
                                  </tbody></table>
                    </div>
                  </div>
          <!-- /.info-box -->
        </div>
        </div>

          <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="box box-danger">
                        <div class="box-header with-border">
                                <center>
                                    <h3 class="box-title">STOK DARAH 
                                    </h3>
                                </center>
                              </div>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                        <span class="info-box-icon bg-red">A</span>
            
                        <div class="info-box-content">
                          <span class="info-box-text">Jumlah</span>
                          <span class="info-box-number">1,410 Kantong</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                                <span class="info-box-icon bg-red">B</span>
                    
                                <div class="info-box-content">
                                  <span class="info-box-text">Jumlah</span>
                                  <span class="info-box-number">1,410 Kantong</span>
                                </div>
                                <!-- /.info-box-content -->
                              </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box">
                                        <span class="info-box-icon bg-red">AB</span>
                            
                                        <div class="info-box-content">
                                          <span class="info-box-text">Jumlah</span>
                                          <span class="info-box-number">1,410 Kantong</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                      </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="info-box">
                                                <span class="info-box-icon bg-red">O</span>
                                    
                                                <div class="info-box-content">
                                                  <span class="info-box-text">Jumlah</span>
                                                  <span class="info-box-number">1,410 Kantong</span>
                                                </div>
                                                <!-- /.info-box-content -->
                                              </div>
                                        </div>
          </div>

        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2018 Diskominfo HSS.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url('LTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('LTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ url('LTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ url('LTE/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('LTE/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('LTE/dist/js/demo.js')}}"></script>
</body>
</html>
