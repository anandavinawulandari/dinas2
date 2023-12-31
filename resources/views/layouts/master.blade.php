<html>
    <head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
   
        <title>@yield('title')</title>
        
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/summernote/summernote-bs4.min.css">

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
@include('layouts.navbar')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>

<script
src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script
src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

@stack('scripts')



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-50">
    <!-- Brand Logo -->
    <a href="{{ asset('')}}" class="brand-link">
      <img src="" alt="" class="brand-image img-circle elevation-10" style="opacity: .8">
      <span class="brand-text font-weight-light" align="right">DINAS KELAUTAN DAN <br>PERIKANAN PROVINSI <br>JAWA TIMUR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" class="img-circle elevation-2" alt="User Image" ><b class="text-light"> --- {{ Auth::user()->name }}</b> 
        </div>
        <div class="info">
          <a href="#" class="d-block">  </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group-append">
            
         
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-1">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          <li class="nav-item">
            <a href="{{ route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <i class=""></i>
              </p>
            </a>      
         
            <!-- <li class="nav-item">
            <a href="{{ route('suratmasuk.index')}}" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Kotak Surat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li> -->
          
<li class="nav-item">
            <a href="{{ route('suratkeluar.index')}}" class="nav-link">
              <i class="nav-icon fas fa-share"></i>
              <p>
                Surat Keluar
                <i class=""></i>
              </p>
            </a>
            </li>
            
               
            <li class="nav-item">
            <a href="{{ route('notadinas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-paperclip"></i>
              <p>
                Nota Dinas
                <i class=""></i>
              </p>
            </a>
            </li>
           
   
            <li class="nav-item">
            <a href="{{ route('surattugas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-envelope-square"></i>
              <p>
                Surat Tugas
                <i class=""></i>
              </p>
            </a>
            </li>
               
            <li class="nav-item">
            <a href="{{ route('bast1.index')}}" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Bast
                <i class=""></i>
              </p>
            </a>
            </li>
               
            <!-- <li class="nav-item">
            <a href="{{ route('bast2.index')}}" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Bast-Pengurus-Barang
                
                <p>Bast-Pengurus-Persediaan</p>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li> -->
               
            <li class="nav-item">
            <a href="{{ route('ruangrapat.index')}}" class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Pesan Ruangan
                <i class=""></i>
              </p>
            </a>
            </li>
          
            
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header " >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <body>

        @yield('content')
        <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
                    ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
                    @stack('scripts')

                  </body>




         
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          
          <!-- right col -->
        </div>
        
        <!-- /.row (main row) -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>
  </body>
  
</html>