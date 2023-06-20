<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php use Illuminate\Support\Facades\Session; ?>
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
                        <li class="breadcrumb-item active">Tambah Transaksi</li>
                    </ol>
                </div>
            </div>


            <!-- Main content -->
            <div class="container-fluid">


                <div class="col-lg-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <h1 class="h3 mb-4 text-gray-800">Tambah transaksi</h1>
                                <tr>
                                    <th>Tanggal penjualan</th>
                                    <td> : <?php echo date('Y-m-d h:i:s'); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card shadow mb-4" id="card-transaksi">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="error-form"></div>
                            <form action="{{ route('simpan-transaksi') }}" method="post" class="form-obat">
                                {{ csrf_field() }}
                                <input type="hidden" name="data_obat" id="data_obat">
                                <div class="form-group">
                                    <label for="nama-pembeli">Nama Pembeli</label>
                                    <input type="text" required name="nama_pembeli" id="nama-pembeli"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="pegawai">Pegawai</label>
                                    <div class="input-group">
                                        <select id="nama" name="nama" class="form-control">
                                            <option disabled selected>Pegawai</option>
                                            @foreach ($dataPegawai as $peg)
                                                <option value="{{ $peg->nama }}">{{ $peg->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="obat">Obat</label>
                                    <div class="input-group">
                                        <select id="nama_obat" name="nama_obat" class="form-control">
                                            <option disabled selected>Pilih obat</option>
                                            @foreach ($dataObat as $ob)
                                                <option value="{{ $ob->nama_obat }}">{{ $ob->nama_obat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_obat">Jumlah Obat</label>
                                    <input type="number" required name="jumlah" id="jumlah" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('data-transaksi') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->


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
