<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-dark">
        @include('layouts.nav-header')
        <!--<div class="row">
            <div class="col-md-8">
                <h3>La Casa de las Salsas</h3>
                <p>Disfruta de tus papas tarascas con nuestra variedad de salsas disponibles</p>
                <a href="logueado.php">Inicia tu pedido</a>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="rounded float-right" width="200" height="200" src="{{ asset('picture/Papas.jpeg')}}"/>
                </div>
            </div>
        </div>-->
        <div class="row">
            
        </div>
    </body>
</html>
