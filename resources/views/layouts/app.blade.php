<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.frontend.head')

<body>
    @include('layouts.frontend.loader')
    <div class="page">
        @include('layouts.frontend.header')
        @yield('content')
        @include('layouts.frontend.footer')
    </div>
    <script src="{{ asset('frontend_theme') }}/js/core.min.js"></script>
    <script src="{{ asset('frontend_theme') }}/js/script.js"></script>
</body>

</html>
