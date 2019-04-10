<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @include('inc.scripts')

    {{-- Styles --}}
    @include('inc.styles')

</head>
<body>
    <div id="app">
        @guest
        @include('inc.nav')
        @else
        @include('inc.auth-nav')
        @endguest
        <main class="pt-4">
            @include('inc.alerts')
            @yield('content')
        </main>
        @include('inc.footer')
    </div>
</body>
</html>
