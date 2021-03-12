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

            background-image: url("{{url('img/caratula.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <body class="animate__bounceInLeft">

        <div class="all">
            <div class="left" id="juego" onclick="redirect(this.id)">
                <div  class="text" >Juego</div>
            </div>
            <div class="center" id="mapa" onclick="redirect(this.id)">
              <div class="explainer"><span><strong> De los Porqués <br>La aplicación<br></strong></span></div>
              <div  class="text" > Mapa </div>
            </div>
            <div class="right" id="colaboradores" onclick="redirect(this.id)">
              <div  class="text" >Colaboradores</div>
            </div>
        </div>
        <a class="imagenCelia"></a>
    </body>
    <script>
    function redirect(id){

        if(id=="juego"){
            window.location.href = '{{route('game.index')}}';
        }else if(id=="mapa"){
            window.location.href ='{{route('map.index')}}';
        }else{
            window.location.href = '';
        }
    }
    </script>
</html>

<!--a href="{{route('map.index')}}"-->
