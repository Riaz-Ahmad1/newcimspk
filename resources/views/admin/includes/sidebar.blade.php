<style>
    .active {
        background: darkblue;
}
</style>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
            </div>
        </div>
    </li>
    <li class="nav-item ">
        <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="/profile">
            <i class="fas fa-fw fa-cog"></i>
            <span>Profile</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link {{ Request::is('crud') ? 'active' : '' }}" href="/crud">
            <i class="fas fa-fw fa-cog"></i>
            <span>Crud Operation</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link {{ Request::is('search') ? 'active' : '' }}" href="/search">
            <i class="fas fa-fw fa-cog"></i>
            <span>Search Students</span>
        </a>
    </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#challan"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Challans</span>
            </a>
            <div id="challan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Challan Managment:</h6>
                    <a class="collapse-item  {{ Request::is('challan') ? 'active' : '' }}" href="/challan">Challan Reason</a>
                    <a class="collapse-item  {{ Request::is('viewchallan') ? 'active' : '' }}" href="/viewchallan">View Challan</a>
                </div>
            </div>
        </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
