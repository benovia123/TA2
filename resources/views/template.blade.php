<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
 </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Havas Worldwide Jakarta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dimas Adi Nugroho</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
            <i class="fas fa-database"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('advertiser')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advertiser</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('spending')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Spending</p>
                </a>
              </li>
            </ul>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
            <i class="fas fa-database"></i>
              <p>
                Visualisasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('streamgraph')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Streamgraph Diagram</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('sankey')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sankey Diagram</p>
                </a>
              </li>
            </ul>
          </li>
         <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
            <i class="fas fa-database"></i>
              <p>
                Data Food
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('food')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Data Food</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    
    <!-- Default to the left -->
    {{-- <pre>
      Menara Sentraya, Lt. 11 
      Jl. Iskandarsyah Raya No. 1 A 
      Jakarta Selatan 


      Phone : (021) 7251856 
              (021) 27882441 
    </pre>

    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      CONTACT US <br>
      <a href="https://www.instagram.com/havasjkt" target="_blank">
        <img src="{{ asset('img/ig.jpg')}}" alt="IG Logo">
      </a>
    </div> --}}

    <div class="row">
      <div class="col-md-6">
        <p>
          <strong>ADDRESS</strong>
          Menara Sentraya, Lt. 11 <br>
          Jl. Iskandarsyah Raya No. 1 A <br>
          Jakarta Selatan <br>
          <br>
          <br>
              
          Phone : (021) 7251856 / (021) 27882441 
        </p>
      </div>
      <div class="col-md-6">
        <p>
          <strong>CONTACT US</strong>
          <br>
          <a href="https://www.instagram.com/havasjkt" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('img/ig.jpg') }}" alt="IG Logo" width="50">
          </a>
        </p>
      </div>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
{{-- <!-- Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}
{{-- D3js --}}
{{-- <script src="https://d3js.org/d3.v5.min.js"></script> --}}

@stack('script')
</body>
</html>
