<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pengaduan Siswa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    @hasrole('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('siswa')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Siswa</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('petugas')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Petugas</span></a>
    </li>
    @endhasrole
    <li class="nav-item">
        <a class="nav-link" href="{{route('laporan-pengaduan')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Laporan Pengaduan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('update-pengaduan')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Update data pengaduan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
