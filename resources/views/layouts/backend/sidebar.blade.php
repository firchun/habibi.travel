<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #162e44;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Habibi Travel') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Nav::isRoute('home') }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Divider -->
    @if (Auth::user()->role == 'admin')
        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Master Data') }}
        </div>
        <!-- Nav Item - images -->
        <li class="nav-item {{ Nav::isRoute('galeri') }}">
            <a class="nav-link" href="{{ route('galeri') }}">
                <i class="fas fa-fw fa-images"></i>
                <span>{{ __('Images') }}</span>
            </a>
        </li>
        <!-- Nav Item - team -->
        <li class="nav-item {{ Nav::isRoute('team') }}">
            <a class="nav-link" href="{{ route('team') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>{{ __('Teams') }}</span>
            </a>
        </li>
        <!-- Nav Item - services -->
        <li class="nav-item {{ Nav::isRoute('services') }}">
            <a class="nav-link" href="{{ route('services') }}">
                <i class="fas fa-fw fa-box"></i>
                <span>{{ __('Services') }}</span>
            </a>
        </li>
        <hr class="sidebar-divider">
    @endif
    <div class="sidebar-heading">
        {{ __('Article') }}
    </div>
    <!-- Nav Item - images -->
    <li class="nav-item {{ Nav::isRoute('article') }}">
        <a class="nav-link" href="{{ route('article') }}">
            <i class="fas fa-fw fa-layer-group"></i>
            <span>{{ __('Article') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Settings') }}
    </div>
    @if (Auth::user()->role == 'admin')
        <!-- Nav Item - setting -->
        <li class="nav-item {{ Nav::isRoute('setting') }}">
            <a class="nav-link" href="{{ route('setting') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>{{ __('Setting Web') }}</span>
            </a>
        </li>
    @endif
    <!-- Nav Item - Profile -->
    <li class="nav-item {{ Nav::isRoute('profile') }}">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>{{ __('Profile') }}</span>
        </a>
    </li>

    <!-- Nav Item - About -->
    <li class="nav-item {{ Nav::isRoute('about') }}">
        <a class="nav-link" href="{{ route('about') }}">
            <i class="fas fa-fw fa-hands-helping"></i>
            <span>{{ __('About') }}</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
