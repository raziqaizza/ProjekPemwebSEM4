<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- bg-gradient-primary sidebar sidebar-dark accordion --}}
    <!-- Brand Logo -->
    <a href="#" class="brand-link d-flex justify-content-center">
        Apotek
    </a>
    <!-- Sidebar -->
    <div class="sidebar ">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Halaman<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item menu-open">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p> Beranda </p>
                            </a>
                            <a href="{{ route('data-obat') }}" class="nav-link">
                                <i class="nav-icon fa fa-medkit" aria-hidden="true"></i>
                                <p> Obat </p>
                            </a>
                            <a href="{{ route('data-pegawai') }}" class="nav-link">
                                <i class="nav-icon fas fa-user" aria-hidden="true"></i>
                                <p> Pegawai </p>
                            </a>
                            <a href="{{ route('data-supplier') }}" class="nav-link">
                                <i class="nav-icon fas fa-archive" aria-hidden="true"></i>
                                <p> Supplier </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
