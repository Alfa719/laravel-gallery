<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.style')
</head>
<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <x-navbar></x-navbar>
    <main class="py-4">
        @yield('content')
    </main>
    <x-footer></x-footer>
@include('layouts.script')
</body>
</html>
