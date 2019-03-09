<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  {{--   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title', 'Default')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('plugins/modular/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/modular/css/app.css') }}">
</head>
<body>
    <div>  
        <main>
            @yield('content')
        </main>
    </div>
    
       <script src="{{ asset('plugins/modular/js/vendor.js') }}"></script>
       <script src="{{ asset('plugins/modular/js/app.js') }}"></script>
</body>
</html>
