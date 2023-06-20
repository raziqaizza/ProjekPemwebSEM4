<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @include('Template.head')
</head>

<style>
    .menu-wrapper a {
        font-size: 2rem;
        font-weight: 500;
        margin: 2rem 1rem;
    } 

</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="font-family: 'Poppins'; display:flex; align-items:center; justify-content:center; flex-direction:column">
            <!-- Content Header (Page header) -->
                <h1 style="font-weight: 600; font-size:4rem;">Selamat Datang</h1>
                <h1 style="font-weight: 600; font-size:4rem;">di Apotek Sederhana</h1>
                <div class="menu-wrapper">
                    <a class="btn btn-outline-primary" href="{{ route('data-obat') }}" role="button">Obat</a>
                    <a class="btn btn-outline-warning" href="{{ route('data-pegawai') }}" role="button">Pegawai</a>
                    <a class="btn btn-outline-danger" href="{{ route('data-supplier') }}" role="button">Supplier</a>
                    <a class="btn btn-outline-success" href="{{ route('data-transaksi') }}" role="button">Transaksi</a>
                </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')

</body>

</html>
