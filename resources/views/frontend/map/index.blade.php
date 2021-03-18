<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ url('icons/fontawesome-free-5.15.2-web/css/all.min.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>

    <link rel="stylesheet" href="{{ url('js/pluginSidebar/leaflet-sidebar.css') }}"/>
    <script src="{{ url('js/pluginSidebar/leaflet-sidebar.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ url('css/map.css') }}">

    <script>
        var ajax = new XMLHttpRequest();

        function ocultar(id) {
            var map = document.getElementById("map");
            var fm = document.getElementById("footer-map");
            var info = document.getElementById("info");
            var galeria = document.getElementById("galeria");
            var boton = document.getElementsByClassName("botonVer");

            if (fm.style.display === "block") {
                fm.style.display = "none";
            } else {
                fm.style.display = "block";
                galeria.style.border = "solid";
                info.innerHTML = ""
            }
            if(fm.style.display === "block"){
                map.style.height = "66%";
            }else{
                map.style.height = "100%";
            }

            ajax.onreadystatechange = procesarRespuesta; // Función que procesará la respuesta del servidor
            ajax.open("GET", "{{ url('/marker/getInfo/') }}/"+id);
            ajax.send();
        }

        function procesarRespuesta() {
            if (ajax.readyState == 4) {
                if(ajax.status == 200) {

                    var data = JSON.parse(ajax.responseText);
                    console.log(data);
                    var titulo = data[0].title;
                    var info = data[0].information;
                    var ruta = data[0].route;
                    document.getElementById("info").innerHTML = "<p class='texto'>" + titulo + "</p> <p class='texto2'>" + info + "</p>";
                    document.getElementById("carruselImg").innerHTML = "";
                    for(var i = 0; i < data.length; i++) {
                        if(i == 0)   {
                            document.getElementById("carruselImg").innerHTML += "<div class='carousel-item active' id='imgCarrusel'><img src='" + data[i].route + "' class='d-block w-100' alt='" + titulo + "'></div>" ;
                        }else{
                            document.getElementById("carruselImg").innerHTML += "<div class='carousel-item' id='imgCarrusel'><img src='" + data[i].route + "' class='d-block w-100' alt='" + titulo + "'></div>" ;
                        }
                    }
                }
            }
        }
    </script>
</head>

<body>

    <div class="sidebar-map" id="map" style="z-index: 10">
           <div id="sidebar" class="sidebar collapsed">
            <!-- Nav tabs -->
            <div class="sidebar-tabs">
                <ul role="tablist">
                    <li style="height:620px"><a  href="#home" role="tab"><i class="fas fa-map-marked-alt"></i></a></li>
                </ul>
            </div>

            <!-- Tab panes -->
            <div class="sidebar-content" style="background-image: url('');">
                <div class="sidebar-pane" id="home">
                    <h1 class="sidebar-header">Puntos de Interés<span class="sidebar-close"><i class="fa fa-caret-right"></i></span></h1>

                    @foreach ($markerList as $marker)
                        <p name='{{$marker->name}}' onClick='click_{{$marker->name}}()' id='{{$marker->id}}'>{{$marker->title}}</p>
                    @endforeach
                </div>
                <!--------------------------------Circular Menu Dentro de Mapa---------------------------------->

                <div id="circularMenu1" class="circular-menu circular-menu-left desactive">

                    <a style="z-index: 50" class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');" z>
                    <i class="fa fa-bars"></i>
                    </a>

                    <menu class="items-wrapper">
                    <a href="{{url('/')}}" class="menu-item fa fa-home"></a>
                    <a href="{{route('game.index')}}" class="menu-item fa fa-gamepad"></a>
                    <a href="https://iescelia.org/web/" class="menu-item fas fa-school"></a>
                    <a href="https://www.instagram.com/iescelia/?hl=es" class="menu-item fab fa-instagram"></a>
                    </menu>

                </div>
             <!------------------------------------------------------------------------------------->
            </div>

        </div>

    </div>



    <script>
    ////////Variable para que aprezca mapa/////////////////
    @php
        function my_search($my_array, $key) {
            $result = '';
            foreach($my_array as $pos) {
                if ($pos->key == $key)
                    $result = $pos->value;
            }
            return $result;
        }
        $valueMinZoom = my_search($optionList, 'minZoom');
        $valueMaxZoom = my_search($optionList, 'maxZoom');
        $valueMarkerZoom = my_search($optionList, 'markerZoom');
        $valueLatitude = my_search($optionList, 'latitude');
        $valueLength = my_search($optionList, 'length');
        $valueUrlMap = my_search($optionList, 'urlMap');
        $valueLatitudeSoutheast = my_search($optionList, 'latitudeSoutheast');
        $valueLengthSoutheast = my_search($optionList, 'lengthSoutheast');
        $valueLatitudeNortheast = my_search($optionList, 'latitudeNortheast');
        $valueLengthNortheast = my_search($optionList, 'lengthNortheast');
    @endphp
    var map = L.map('map', {
        minZoom: {{$valueMinZoom}} //zoom minimo aceptado
    }).setView([{{$valueLatitude}}, {{$valueLength}}], 15);// LOCALICACION DEL FOCUS PRIMARIO DEL MAPA
    ///////////////////////////////////////////////////////
    L.tileLayer('{{$valueUrlMap}}', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);//MODEL DEL MAPA
    ///////////Variables de los limites //////////////////
    var sureste = L.latLng({{$valueLatitudeSoutheast}}, {{$valueLengthSoutheast}});
    var noroeste = L.latLng({{$valueLatitudeNortheast}}, {{$valueLengthNortheast}});
    var bounds = L.latLngBounds(sureste, noroeste);
    //////////////////////////////////////////////////////
    //////Funcion que nos premite establecer los limites //
        map.setMaxBounds(bounds);
        map.on('drag', function () {
            map.panInsideBounds(bounds, { animate: false });
        });
    ////////////////////////////////////////////////////////
    //////////Variables para el sidebar ////////////////////
    var sidebar = L.control.sidebar('sidebar').addTo(map);
    sidebar.open('home');
    ////////////////////////////////////////////////////////
    //////////Marca de agua del Celia Viñas/////////////////
    /*L.Control.Watermark = L.Control.extend({
        onAdd:function(map) {
            var img = L.DomUtil.create('img');
            img.src =" {{url('img/celiaEscudo.png')}}";
            img.style.width = '80px';
            return img;
        }

    });

    L.control.watermark= function (opts) {
        return new L.Control.Watermark(opts);
    }
    L.control.watermark({position:'bottomleft'}).addTo(map);*/
    ////////////////////////////////////////////////////////
    /////////////// VARIABLES DE LOS PUNTOS ///////////////////
    @foreach($markerList as $marker)
        @if ($marker->type == 0)
            var {{$marker->name}} = L.marker([{{$marker->latitude}}, {{$marker->length}}], {class:"marcador", id:{{$marker->id}}}).addTo(map);
        @elseif($marker->type == 1)
            var {{$marker->name}} = L.circle([{{$marker->latitude}}, {{$marker->length}}], {
                id:{{$marker->id}},
                class:"marcador",
                radius:{{$marker->radio}},
                fillOpacity:{{$marker->opacity}},
                fillColor:"{{$marker->background_color}}",
                color:"{{$marker->border_color}}",
            }).addTo(map);
        @else
            var {{$marker->name}} = L.polygon([
                [{{$marker->latitude}},{{$marker->length}}],
                @foreach($pointsList as $point)
                    @if($marker->name == $point->marker_name)

                        [{{$point->latitude}}, {{$point->length}}],
                    @endif
                @endforeach
            ], {
                id:{{$marker->id}},
                class:"marcador",
                fillOpacity:{{$marker->opacity}},
                fillColor:"{{$marker->background_color}}",
                color:"{{$marker->border_color}}",
            }).addTo(map);
        @endif
    @endforeach
    //////////////////////////////////////////////////////////////////////////////////
    ////////////POPUPS IMGS//////////////////////////////////
    var encontrado= false;
    @foreach($markerList as $marker)
        @foreach($imageList as $image)
            @if(($marker->name)==($image->title) && ($image->order==1))
                encontrado=true;
                {{$marker->name}}.bindPopup("<p class='texto'>{{$marker->title}}</p>  <img src={{$image->route}}> <br><br><br><button id='{{$marker->id}}' class='botonVer' onclick='ocultar({{$marker->id}})'><img src='../img/info5.png' width='25' height='25'>nformacion</button>");
            @endif

        @endforeach
        if(!encontrado){
            {{$marker->name}}.bindPopup("<p class='texto'>{{$marker->title}}</p> <br><button id='{{$marker->id}}' class='botonVer' onclick='ocultar({{$marker->id}})'><img src='../img/info5.png' width='25' height='25'></button>");
        }
    @endforeach
    ////////////////////////////////////////////////////////////////////////////////
    // FUNCIONES FOCUS HACIA POPUP AL HACER CLICK EN CUALQUIER PUTNO DEL MARKET/////
    @foreach($markerList as $marker)
        function click_{{$marker->name}}() {
            map.setView([31.86043839842163, -45.337342818000984]);
            map.setView([{{$marker->latitude}}, {{$marker->length}}]);
            @if ($marker->type == 0)
                map.setZoom(18);
            @endif
            @if ($marker->type == 1)
                @if ($marker->radio > 20)
                    map.setZoom(17);
                @else
                    map.setZoom(18);
                @endif
            @endif
            @if ($marker->type == 2)
                map.setZoom(17);
            @endif
            //{{$marker->name}}.openPopup();
        }
    @endforeach
    ////////////////////////////////////////////////////////////////////////////////
    ///////Cerrar footer con click en el mapa////////
    map.on('click', function(e) {
        var map = document.getElementById("map");
        var fm = document.getElementById("footer-map");
        fm.style.display = "none";
        map.style.height = "100%";
        document.getElementById("info").innerHTML = " ";
        document.getElementById("carruselImg").innerHTML = " ";
    });
    </script>
    <div id ="footer-map">
        <div id="galeria" >
            <!--aqui va la galertia-->

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 204px">
                <div class="carousel-inner" id="carruselImg">

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div id="info" ></div>
    </div>
</body>

</html>
