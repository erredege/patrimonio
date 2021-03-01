<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="caratula.css">
        <title>Document</title>
    </head>
    <body>
        <div id="contenedor"  style="background-image:".
                                @foreach($optionList as $option)
                                    @if(($option->Key)=="backgroundImage")
                                        $option->value                                                                                  
                                    @endif. 
        >
            <div>
                <p><a href="{{route('map.index')}}">Mapa</p>
            </div>
            <div>
                <p><a href="">Juego</p>
            </div>
        </div>
        <div id="footer">
            
        </div>
    </body>
</html>