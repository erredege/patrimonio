<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/caratula.css') }}" />
    <title>Caratula</title>
</head>
<style>
    html {
        overflow: hidden;
        height: 100vh;
        width: 100vw;
        padding-top: 2px;
    }

    body {
        overflow: hidden;
        background-image: url("{{ url('img/caratula.png') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

</style>

<body>

    <div class="all">
        <div class="left" id="juego" onclick="redirect(this.id)">
            <div class="text">Juego</div>
        </div>
        <div class="center" id="mapa" onclick="redirect(this.id)">
            <div class="explainer"><span><strong> De los Porqués <br>La aplicación<br></strong></span></div>
            <div class="text"> Mapa </div>
        </div>
        <div class="right" id="colaboradores" onclick="redirect(this.id)">
            <div class="text">Colaboradores</div>
        </div>
    </div>

    <div class="device" style="display:none">
        <div class="container">
            <button id="burger" class="open-main-nav" onclick="translateButtonMenuMovil(this.id)">
                <span class="burger"></span>
                <span class="burger-text"><strong> De los Porqués <br>La aplicación<br></strong></span>
            </button>
            <nav class="main-nav" id="main-nav">
                <ul>
                    <li>
                        <a href="{{ route('game.index') }}">Juego</a>
                    </li>
                    <li>
                        <a href="{{ route('map.index') }}">Mapa</a>
                    </li>
                    <li>
                        <a href="{{ route('colaboradores.index') }}">Colaboradores</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    <a class="imagenCelia"></a>
</body>

<script>
    /*SCRIPT MENU MOVIL/TABLETS*/
    let burger = document.getElementById('burger'),
        nav = document.getElementById('main-nav'),
        slowmo = document.getElementById('slowmo');

    burger.addEventListener('click', function(e) {
        this.classList.toggle('is-open');
        nav.classList.toggle('is-open');
    });

    slowmo.addEventListener('click', function(e) {
        this.classList.toggle('is-slowmo');
    });

    /* Onload demo - dirty timeout */
    let clickEvent = new Event('click');

    window.addEventListener('load', function(e) {
        slowmo.dispatchEvent(clickEvent);
        burger.dispatchEvent(clickEvent);

        setTimeout(function() {
            burger.dispatchEvent(clickEvent);

            setTimeout(function() {
                slowmo.dispatchEvent(clickEvent);
            }, 3500);
        }, 5500);
    });

</script>
<script>
    function translateButtonMenuMovil(id) {
        var burger1 = document.getElementById(id);

        burger1.classList.toggle("arriba");


    }

</script>
<script>
    /* SCRIPT MENU DE CUADROS*/
    function redirect(id) {

        if (id == "juego") {
            window.location.href = '{{ route('game.index') }}';
        } else if (id == "mapa") {
            window.location.href = '{{ route('map.index') }}';
        } else {
            window.location.href = '{{ route('colaboradores.index') }}';
        }
    }

</script>

</html>
