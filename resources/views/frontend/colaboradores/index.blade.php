<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ url('css/colaboradores.css') }}"/>
        <title>Colaboradores</title>
    </head>
    <style>
        html{
            background-image: url("{{url('img/caratula.png')}}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
        html::-webkit-scrollbar {
            display: none;
        }
    </style>
    <body>
        <div class="volver">
            <a href="{{route('caratula.index')}}"><img src="../img/home.png" style="height: 50px; float: right;"/></a>
        </div>
        <div class="lookbook-gallery">

            <h1 class="look-hed" style="text-align: center">Desarrolladores</h1>
            <div class="bloque1">
                <div class="lookbook-grid" >
                
                <figure class="model">
                    <img src="../img/user-tie.png" />
                    <figcaption class="model--caption">
                        <h3>De Quero Granados Rosendo</h3>
                        <p><a href="https://github.com/erredege">GitHub</a><p>
                    </figcaption>
                </figure>
                
                <figure class="model">
                    <img src="../img/user-tie.png" />
                    <figcaption class="model--caption">
                        <h3>Montoya Sanchez Ivan</h3>
                        <p><a href="https://github.com/MontoyaSanchezIvan">GitHub</a><p>
                    </figcaption>
                </figure>
                </div> 
            </div>
            <br>

            <h1 class="look-hed" style="text-align: center">Profesores</h1>
            <div class="bloque2">
                <div class="lookbook-grid" >
                <figure class="model">
                    <img src="../img/user-tie.png" />
                    <figcaption class="model--caption">
                        <h3>Expósito López Felix</h3>
                    </figcaption>
                </figure>
                
                <figure class="model">
                    <img src="../img/user-tie.png" />
                    <figcaption class="model--caption">
                        <h3>Moreno Vozmediano Alfredo</h3>
                    </figcaption>
                </figure>

                <figure class="model">
                    <img src="../img/user-tie.png" style="margin-left: 5%" />
                    <figcaption class="model--caption">
                        <h3>Piñero Mendoza Manuel Cristóbal</h3>
                    </figcaption>
                </figure>
                </div>
            </div>
            <br>

            <h1 class="look-hed" style="text-align: center">Colaboradores</h1>
            <div class="bloque1">
                <div class="lookbook-grid" role="region">
                <figure class="model">
                    <img src="../img/user-tie.png" />
                    <figcaption class="model--caption">
                        <h3>Lopez Morales Javier</h3>
                        <p><a href="https://github.com/JavierLopezMorales">GitHub</a><p>
                    </figcaption>
                </figure>
            
                <figure class="model">
                    <img src="../img/user-tie.png" />
                    <figcaption class="model--caption">
                        <h3>Alejandra</h3>
                    </figcaption>
                </figure>
                </div>
            </div>
        </div>
    </body>  
</html>