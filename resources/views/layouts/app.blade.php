<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'API ANIME')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dataTables.dataTables.min.css') }}" rel="stylesheet">
    </head>
    <body class="d-flex flex-column min-vh-100">

        @include('layouts.topo') 
        <div class="container mt-4">
            @yield('content') 
        </div>

        @include('layouts.rodape') 

    <script src="{{ asset('jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.min.js') }}"></script>    
    @yield('js')
    </body>
</html>