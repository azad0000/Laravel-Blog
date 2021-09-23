
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  
  @include('admin.css.all-css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


    @include('admin.includes.navbar')
  <!-- Main Sidebar Container -->
  @include('admin.includes.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pl-4">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
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

@include('admin.includes.scripts')
</body>
</html>
