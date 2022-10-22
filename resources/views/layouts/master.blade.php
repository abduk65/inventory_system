<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{asset("vendor/plugins/fontawesome-free/css/all.min.css")}}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{asset("vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("vendor/dist/css/adminlte.min.css")}}>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src={{asset("vendor/dist/img/AdminLTELogo.png")}} alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  @include('layouts.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('layouts.partials.control_sidebar')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@yield('javascript')
<!-- jQuery -->
<script src={{asset("vendor/plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap -->
<script src={{asset("vendor/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- overlayScrollbars -->
<script src={{asset("vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("vendor/dist/js/adminlte.js")}}></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src={{asset("vendor/plugins/jquery-mousewheel/jquery.mousewheel.js")}}></script>
<script src={{asset("vendor/plugins/raphael/raphael.min.js")}}></script>
<script src={{asset("vendor/plugins/jquery-mapael/jquery.mapael.min.js")}}></script>
<script src={{asset("vendor/plugins/jquery-mapael/maps/usa_states.min.js")}}></script>
<!-- ChartJS -->
<script src={{asset("vendor/plugins/chart.js/Chart.min.js")}}></script>

<!-- AdminLTE for demo purposes -->
{{-- <script src={{asset("vendor/dist/js/demo.js")}}></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset("vendor/dist/js/pages/dashboard2.js")}}></script>
</body>
</html>
