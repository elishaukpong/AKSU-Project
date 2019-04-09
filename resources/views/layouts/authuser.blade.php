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
            <div class="container-fluid px-5">
                <div class="row">
                    {{-- Left Hand Pane --}}
                    <div class="col-md-3">
                        @yield('left-hand-content')
                    </div>
                    {{-- Middle Pane --}}
                    <div class="col-md-6 py-5">
                        @yield('body-content')
                    </div>
                    {{-- Right HAnd Pane --}}
                    <div class="col-md-3">
                        @yield('right-hand-content')
                    </div>
                </div>
            </div>
            {{-- @yield('content') --}}
        </main>
        {{-- @include('inc.footer') --}}

    </div>
</body>
</html>
