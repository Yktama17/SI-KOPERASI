<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('Welcome') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI-KOPERASI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href={{ route('dashboard') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('barang') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Barang</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('stock') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Stock</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('aset') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Aset</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('pengadaanaset') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pengadaan Aset</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('kategoriaset') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kategori Aset</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('kategoribarang') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kategori Barang</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('keuangan') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Keuangan</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('pengiriman') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pengiriman</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href={{ route('gudang') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Gudang</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>