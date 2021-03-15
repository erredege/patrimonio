<html>
    <head>
        <title>
            @yield('Juego del patrimonoio')
        </title>
        <style type="text/css">
            .credit-card-div  span { padding-top:10px; }
            .credit-card-div img { padding-top:30px; }
            .credit-card-div .small-font { font-size:9px; }
            .credit-card-div .pad-adjust { padding-top:10px; }
            .form-group {
                margin-left: 25%;
                width:50%;
                text-align:  justify;
            }
            .navbar{
                text-align: center;
            }
            .table{
                border-width: 1px;
                border: solid;
                width: 95% !important;
                margin: auto;
                text-align: center;
                table-layout: fixed;
                overflow: auto;
            }
            .marker{
                max-height: calc(100vh - 110px);
                overflow:auto;
            }
            .informacion{
                position: absolute;
                overflow: auto;
                width: 7%;
                height: 6.5vh;
            }
            
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class='header'>
            <br>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href='index.php'>INICIO <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href='{{route("marker.index")}}'>MARCADORES<a>
                    <a class="nav-item nav-link" href='{{route("option.index")}}'>OPCIONES<a>
                    <a class="nav-item nav-link" href='{{route("image.index")}}'>IMAGENES<a>
                    <a class="nav-item nav-link" href='{{route("map.index")}}'>MAPA<a>
                  </div>
                </div>
            </nav>

            <h2>Juego del patrimonoio</h2>
            @yield('header')
        </div>

        <div class='main-content'>
            @yield('content')
        </div>

        <footer>
            <br><br>
            <center>
                <small> proyecto Celia Viñas 2ºDAW 2020/2021</small>
            </center>
        </footer>
    </body>
</html>
