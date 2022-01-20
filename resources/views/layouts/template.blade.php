<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/cover.css')}}"/>
        
        <title>EasySport.tn</title>
    </head>
    <body class="text-center">
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        @include('layouts.navbar')
        
        @yield("content")
        
        @include('layouts.footer')
    </div>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
             ':35729/livereload.js?snipver=1"></' + 'script>')
     </script>
    </body>
</html>