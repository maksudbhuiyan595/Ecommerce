<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('category.list') }}" >
        <i class="fas fa-fw fa-cog"></i>
        <span>Categories</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('brand.list')}}" >
        <i class="fas fa-fw fa-cog"></i>
        <span>Brands</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('product.list') }}" >
        <i class="fas fa-fw fa-cog"></i>
        <span>Products</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('role.list') }}" >
        <i class="fas fa-fw fa-cog"></i>
        <span>Roles</span>
    </a>
</li>

</ul>