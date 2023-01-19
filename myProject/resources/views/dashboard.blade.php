
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- iCheck -->
  <!-- JQVMap -->
  <!-- Theme style -->
  <!-- overlayScrollbars -->
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/jqvmap/jqvmap.min.css')}}">
</head>
<link rel="stylesheet" href="{{ asset('admin_assets/dist/css/adminlte.min.css')}}">
<body class="hold-transition sidebar-mini layout-fixed">
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <div class="wrapper">
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/daterangepicker/daterangepicker.css')}}">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3">
        <div class="info">
          <h3 style="color: #fff">{{ auth()->user()->name}}</h3>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('crud')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                  <p>Category</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
                <a href="{{url('insertRead')}}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                  <p>Add Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/manage_product')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                  <p>Manage Products</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{url('/profile')}}" class="nav-link active bg-info ">
                {{ __('Profile') }}
                </a>
              </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="mb-0">
              @csrf
              <a href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();" class="nav-link active bg-info ">
                  {{ __('Log Out') }}
              </a>
            </form>              
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
    <div class="content-header">
    
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!--Alert message if category added successfully-->
            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                    {{session()->get('message')}} 
                    
            </div>
            @endif

            @yield('content')
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset ('admin_assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset ('admin_assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset ('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset ('admin_assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset ('admin_assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset ('admin_assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset ('admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset ('admin_assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset ('admin_assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset ('admin_assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset ('admin_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset ('admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('admin_assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset ('admin_assets/dist/js/demo.js')}}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src= "{{asset ('admin_assets/dist/js/pages/dashboard.js')}}"></script> -->
</body>
</html>


 
