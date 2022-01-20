<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EasySport</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/cover.css')}}"/>
</head>
<body class="text-center" style="background-color:rgb(40,200,250)">
    <div id="app" class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        @include('userLayouts.navbar')

        <main class="py-4">
            @yield('content')
        </main>
        @include('userLayouts.footer')

    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
             ':35729/livereload.js?snipver=1"></' + 'script>')
     </script>
</body>
</html>
