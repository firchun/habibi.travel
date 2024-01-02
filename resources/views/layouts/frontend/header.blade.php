<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
            data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle"
                            data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <!--Brand--><a class="brand" href="{{ url('/') }}"><img
                                    src="{{ asset('frontend_theme') }}/images/logo-default-450x37.png" alt=""
                                    width="225" height="18" /></a>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-right rd-navbar-collapse">
                        <ul class="rd-navbar-corporate-contacts">
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                                    <div class="unit-body">
                                        <p> <span>{{ Carbon\Carbon::parse($setting->time_open)->format('H:i a') }} —
                                                {{ Carbon\Carbon::parse($setting->time_closed)->format('H:i a') }}</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                    <div class="unit-body"><a class="link-phone"
                                            href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @guest
                            <a class="button button-md button-default-outline-2 button-ujarak" href="{{ route('login') }}">
                                Sign In</a>
                        @else
                            <a class="button button-md button-default-outline-2 button-ujarak" href="{{ route('home') }}">
                                Dashboard</a>
                        @endguest
                    </div>
                </div>
            </div>
            @include('layouts.frontend.menu')
        </nav>
    </div>
</header>
