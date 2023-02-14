<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi Lelang <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            @if (auth()->user()->level == 'petugas')
            <li class="nav-item">
                <a class="nav-link" href="/barang">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Barang</span></a>
                <a class="nav-link" href="/lelang">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lelang</span></a>
            </li>
            @endif
            @if (auth()->user()->level == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/barang">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Barang</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/user">
                    <i class="fas fa-users"></i>
                    <span>Data User</span></a>
            </li>
            @endif

            @if (auth()->user()->level == 'masyarakat')
            <li class="nav-item">
                <a class="nav-link" href="/lelang">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lelang</span></a>
            </li>
            @endif
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>