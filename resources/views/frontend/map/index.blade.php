<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="{{ url('js/pluginSidebar/leaflet-sidebar.css') }}"/>
    <script src="{{ url('js/pluginSidebar/leaflet-sidebar.js') }}"></script>

    <style>
        #map {
            position: absolute;
            width: 99%;
            height: 98%;
        }
        .leaflet-popup{
            max-width: 1000px;
            max-height: 1000px;
        }
        .leaflet-popup-content > img{
           max-width:  68%;
           max-height: 68%;
        }
        #bannerImg{
            width: 104.5em;
            height: 10em;
            margin-left: 7%;
            margin-right: 3%;
        }
        .leaflet-control-attribution{
            display: none; /* Nos permite quitar la marca de agua de Leaflet*/
        }
        #info{
            width: 68%;
            height: 99%;
            position:static;
            float: right;
        }

        #galeria{
            width: 28%;
            height: 99%;
            position:absolute;
            float: left;
        }

        #footer-map{
            position: absolute;
            width: 99%;
            height: 34%;
            bottom: 0px;
        }
    </style>
    <script>
        function ocultar() {
            var info = document.getElementById("info");
            var map = document.getElementById("map");
            if (info.style.display === "block") {
                info.style.display = "none";
            } else {
                info.style.display = "block";
            }
            if(info.style.display === "block"){
                map.style.height = "65%";
            }else{
                map.style.height = "99%";
            }
        }
    </script>
</head>

<body>
    <div class="sidebar-map" id="map">
        <div id="sidebar" class="sidebar collapsed">
            <!-- Nav tabs -->
            <div class="sidebar-tabs" style="background-image: url('');">
                <ul role="tablist">
                    <li><a href="#home" role="tab"><i class="fa fa-bars"></i></a></li>
                </ul>
                <ul role="tablist">
                    <li><a href="juego.html" role="tab"><i class="fa fa-gamepad"></i></a></li>
                </ul>
                <!--<ul role="tablist">
                    <li><a href="#settings" role="tab"><i class="fa fa-gear"></i></a></li>
                </ul>-->
            </div>

            <!-- Tab panes -->
            <div class="sidebar-content" style="background-image: url('');">
                <div class="sidebar-pane" id="home">
                    <h1 class="sidebar-header">Listado<span class="sidebar-close"><i class="fa fa-caret-right"></i></span></h1>

                    @foreach ($markerList as $marker)
                        <p name='{{$marker->name}}' onClick='click_{{$marker->name}}()'>{{$marker->title}}</p>
                    @endforeach
                </div>
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
    ////////////////////////////////////////////////////////
    //////////Marca de agua del Celia Viñas/////////////////
    L.Control.Watermark = L.Control.extend({
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
    L.control.watermark({position:'bottomleft'}).addTo(map);
    ////////////////////////////////////////////////////////
    /////////////// VARIABLES DE LOS PUNTOS ///////////////////
    @foreach($markerList as $marker)
        @if ($marker->type == 0)
            var {{$marker->name}} = L.marker([{{$marker->latitude}}, {{$marker->length}}]).addTo(map);
        @elseif($marker->type == 1)
            var {{$marker->name}} = L.circle([{{$marker->latitude}}, {{$marker->length}}], {
                radius:{{$marker->radio}},
                fillOpacity:{{$marker->opacity}},
                fillColor:"{{$marker->background_color}}",
                color:"{{$marker->border_color}}",
            }).addTo(map);
        @else
            var {{$marker->name}} = L.polygon([
                @foreach($pointsList as $point)
                    @if($marker->name == $point->name)
                        [{{$point->latitude}}, {{$point->length}}],
                    @endif
                @endforeach
            ], {
                fillOpacity:{{$marker->opacity}},
                fillColor:"{{$marker->background_color}}",
                color:"{{$marker->border_color}}",
            }).addTo(map);

        @endif
    @endforeach
    //////////////////////////////////////////////////////////////////////////////////
    ////////////POPUPS IMGS//////////////////////////////////
    @foreach($markerList as $marker)
        {{$marker->name}}.bindPopup("{{$marker->title}} <br><button onclick='ocultar()'>+</button>");
        
    @endforeach
    
    ////////////////////////////////////////////////////////////////////////////////
    // FUNCIONES FOCUS HACIA POPUP AL HACER CLICK EN CUALQUIER PUTNO DEL MARKET/////
    @foreach($markerList as $marker)
        function click_{{$marker->name}}() {
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
    </script>
    <div id ="footer-map">
        <div id=galeria >
            <!--aqui va la galertia-->
            <div class="carousel-item">
                @foreach ($imageList as $image)
                    @if ($image->$title == $marker->title)
                        <img src="{{$imgPath}}" alt="{{$image->$title}}">
                        <!--div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                        </div-->
                    @endif 
                @endforeach
            </div>
        </div>
        <div id="info" >
            @foreach ($markerList as $marker)
                {{$marker->information}}
            @endforeach
        </div>
    </div>
</body>

</html>
