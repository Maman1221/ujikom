<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Gallery</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dasboard</span></a>
    </li>


    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{route('Photo.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Photo</span></a>
    </li> --}}

    <li class="nav-item active">
        <a class="nav-link" href="{{route('albums.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Album</span></a>
    </li>\

    <!-- Divider -->

    </ul>
