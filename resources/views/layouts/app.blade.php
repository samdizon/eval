<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{{asset('favicon.ico')}}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- Scripts -->
     <script src="{{ asset('js/jquery.min.js') }}" integrity=""  crossorigin="anonymous"></script>
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('js/mdb.min.js') }}" defer></script>
</head>
<body>
    @include('layouts.inc')
    <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div id="app"></div>
</body>
</html>
