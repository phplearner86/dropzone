<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials._head')
    @yield('links')
</head>
<body>
    <div id="app">
        @include('partials._nav')
        <div class="container">
            @yield('content')
        </div>

    </div>

    <!-- Scripts -->
    @include('partials._scripts')
    @yield('scripts')
</body>
</html>
