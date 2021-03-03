<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ url('css/caratula.css') }}"/>
        <title>Caratula</title>
    </head>
    <style>
        body{
            background-image:"url{{('img/caratula.jpg')}}"
        }
    </style>
    <body class="animate__bounceInLeft">

        <ul class="menu-bar">
            <li>
                <a href="{{route('map.index')}}">MAPA
            </li>
            <li>
                <a href="">JUEGO
            </li>
        </ul>

    </body>
</html>