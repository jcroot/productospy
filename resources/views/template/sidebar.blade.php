<ul class="navbar-nav bg-light bg-white sidebar accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/')  }}">
        <img src="{{ @url('assets/img/logo.png')  }}" class="img-fluid" />
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Top Charts
    </div>

    <!-- Nav Item - Item -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span>Mas popular</span></a>
    </li>

    <!-- Nav Item - Item -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fa fa-check" aria-hidden="true"></i>
            <span>Mejor rankeado</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Categorias
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
