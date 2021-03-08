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

            background-image: url({{url('img/caratula.jpg')}});
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
              <div class="explainer"><span>La Aplicación de los Por Qués</span></div>
              <div  class="text" > Mapa </div>
            </div>
            <div class="right" id="colaboradores" onclick="redirect(this.id)">
              <div  class="text" >Colaboradores</div>
            </div>
        </div>
    </body>
    <script>
    function redirect(id){

        if(id=="juego"){
            window.location.href = '';
        }else if(id=="mapa"){
            window.location.href ='{{route('map.index')}}';
        }else{
            window.location.href = '';
        }
    }
    </script>
</html>

<!--a href="{{route('map.index')}}"-->
