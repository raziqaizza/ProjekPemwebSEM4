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
                                    <h4>Tambah Pegawai</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('simpan-pegawai') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" id="nama" name="nama" class="form-control"
                                                placeholder="Nama Pegawai">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <h6>Tanggal Lahir</h6>
                                            <input type="date" id="tgllhr" name="tgllhr" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <a href="{{ route('data-pegawai') }}" class="btn btn-danger">Batal</a>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
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

</body>

</html>
