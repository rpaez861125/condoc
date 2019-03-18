<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> CONDOC | Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> --}}
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('plugins/modular/css/vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/modular/css/app.css') }}">
    
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">

                {{-- Include Nav an Aside to main template --}}
                @include('admin.template.partials.nav')
                @include('admin.template.partials.aside')

                @yield('content')
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>      
        <script src="{{ asset('plugins/modular/js/vendor.js') }}"></script>
        <script src="{{ asset('plugins/modular/js/app.js') }}"></script>
    </body>
</html>