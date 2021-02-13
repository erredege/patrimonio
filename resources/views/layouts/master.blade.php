<html>
    <head>
        <title>
            @yield('Juego del patrimonoio')
        </title>
    </head>
    <body>
        <div class='header'>
            <br>
            <div class='navigation-menu'>
                <center>
                    <a href='index.php'>INICIO<a> 
                </center>
            </div>
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