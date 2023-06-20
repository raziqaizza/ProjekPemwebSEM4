<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Transaksi</li>
                    </ol>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4>List Transaksi Penjualan</h4>
                            <a class="btn btn-success" href="{{ route('input-transaksi') }}" role="button"
                                style="margin-top: 1rem;">Tambah Transaksi</a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Nama Penjual</th>
                                            <th>Nama Pembeli</th>
                                            <th>Obat yang terjual</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($transaksiDetail as $tr)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><span class="badge badge-dark">{{ $tr->tglbeli }}</span></td>
                                                <td>{{ $tr->nama }}</td>
                                                <td>{{ $tr->nama_pembeli }}</td>
                                                <td>{{ $tr->jumlah }} {{ $tr->nama_obat }}</td>
                                                <td>
                                                    <a href="{{ route('hapus-detail-transaksi', $tr->id) }}"
                                                        style="color: red"> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




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
    @include('sweetalert::alert')
</body>

</html>
