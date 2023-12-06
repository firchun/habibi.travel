<div class="rd-navbar-main-outer">
    <div class="rd-navbar-main">
        <div class="rd-navbar-nav-wrap">
            <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                <li><a class="icon fa fa-facebook" href="#"></a></li>
                {{-- <li><a class="icon fa fa-twitter" href="#"></a></li> --}}
                {{-- <li><a class="icon fa fa-google-plus" href="#"></a></li> --}}
                <li><a class="icon fa fa-instagram" href="#"></a></li>
            </ul>
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
                <li class="rd-nav-item @if (request()->is('/')) active @endif"><a class="rd-nav-link"
                        href="{{ url('/') }}">Home</a>
                </li>
            </ul>
        </div>
    </div>
</div>
