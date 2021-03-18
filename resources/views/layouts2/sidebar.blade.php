<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Pengaduan <sup>Masyarakat</sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard.admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Manajemen Pengaduan
    </div>

    @if (auth()->user()->role == 'admin')
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('petugas.index')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Data Petugas</span>
    </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('petugas.index')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Data Masyarakat</span>
    </a>
    </li>
    @endif

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('pengaduan.proses')}}">
        <i class="fas fa-fw fa-cog"></i>
        <span>Pengaduan Diproses</span>
    </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
    <a class="nav-link" href="{{route('pengaduan.tanggapi')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Tanggapi Pengaduan</span></a>
    </li>

    <!-- Divider -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
