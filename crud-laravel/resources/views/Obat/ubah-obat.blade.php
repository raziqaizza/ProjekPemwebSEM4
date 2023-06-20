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
                        <li class="breadcrumb-item active">Data Obat</li>
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
                                    <h4>Ubah Data Obat</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('update-obat', $ob->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" id="nama_obat" name="nama_obat" class="form-control"
                                                placeholder="Nama Obat" value="{{ $ob->nama_obat }}"></input>
                                        </div>
                                        <div class="form-group">
                                            <input name="kode_obat" id="kode_obat" class="form-control"
                                                placeholder="Kode Obat" value="{{ $ob->kode_obat }}"></input>
                                        </div>
                                        <div class="form-group">
                                            <select name="supplier_id" id="supplier_id" class="form-control select2"
                                                style="width: 100%;">
                                                <option disabled value>Pilih Supplier</option>
                                                <option value="{{ $ob->supplier_id }}">
                                                    {{ $ob->supplier->nama_supplier }}</option>
                                                @foreach ($supp as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_supplier }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input name="stok" id="stok" class="form-control"
                                                placeholder="Jumlah Stok" value="{{ $ob->stok }}"></input>
                                        </div>
                                        <div class="form-group">
                                            <input name="harga" id="harga" class="form-control"
                                                placeholder="Harga" value="{{ $ob->harga }}"></input>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <a href="{{ route('data-obat') }}" class="btn btn-danger">Batal</a>
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
