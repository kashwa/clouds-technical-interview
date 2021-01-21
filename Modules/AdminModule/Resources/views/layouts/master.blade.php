<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Admin </title>

    @include('adminmodule::includes.css')
</head>
<body class="hold-transition sidebar-mini">


<div class="wrapper" >

        <!-- Navbar -->
    @include('adminmodule::includes.nav')
    <!-- /.navbar -->

        <!-- Main Sidebar Container -->
    @include('adminmodule::includes.aside')

      @yield('content')

    <!-- Content Wrapper. Contains page content -->
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('adminmodule::includes.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('adminmodule::includes.js')

</body>
</html>
