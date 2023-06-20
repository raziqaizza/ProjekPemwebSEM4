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
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Pegawai</h4>
                                    <a href="{{ route('input-pegawai') }}" class="btn btn-success">Tambah Data</a>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Aksi</th>
                                        </tr>
                                        @foreach ($dataPegawai as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->tgllhr }}</td>
                                                <td><a href="{{ route('ubah-pegawai', $item->id) }}">Ubah</a> | <a
                                                        href="{{ route('hapus-pegawai', $item->id) }}"
                                                        style="color: red">Hapus</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="card-footer">
                                    {{ $dataPegawai->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div><!-- /.container-fluid -->
            </div>
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
    @include('sweetalert::alert')
</body>

</html>
