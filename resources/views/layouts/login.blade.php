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

            #card{
                width: 75%;
                margin-left: 15%;
            }

            .header{
                margin-left: 5vh;
            }

            .body{
                height: 90%;
            }
            
            .footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 70px;
            }

            #titulo{
                text-align: right;
            }

            #boton{
                width: 100%;
                margin-left: -25%;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class='body'>
        <div class='header'>
            <br>
            <h2>Juego de patrimonio</h2>
            @yield('header')
            <br><br>
        </div>

        <div class='main-content'>
            @yield('content')
        </div>
    </body>

    <footer class='footer'>
        <br><br>
        <center>
            <small> Proyecto Celia Viñas 2ºDAW 2020/2021</small>
        </center>
    </footer>
</html>
