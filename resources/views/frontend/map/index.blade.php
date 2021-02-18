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
            width: 88%;
            height: 90%;
            margin-top: 1%;
            margin-left: 7%;
            margin-right: 3%;
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
    </style>
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
                        <p name='{{$marker->name}}' onClick='click_{{$marker->name}}()'>{{$marker->name}}</p>
                    @endforeach
<!--
                    <p name="puertaPuchena">Puerta Puchena</p>
                    <p name="casaMariposas" onClick="click_casaMariposas()">&nbsp&nbsp Edf de las Mariposas</p>
                    <p name="cañillo" onClick="click_cañillo()">Cañillo</p>
                    <p name="mercadoAbastos" onClick="click_mercadoAbastos()">Mercado de Abastos</p>
                    <p name="paseoAlmeriaInicio" onClick="click_paseoAlmeriaInicio()">Paseo de Almeria</p>
                        <p name="plazaEducador" onClick="click_plazaEducador()">&nbsp&nbsp Plaza del Educador</p>
                        <p name="refugios" onClick="click_refugios()">&nbsp&nbsp Refugios</p>
                    <p name="paseoAlmeriaFin" onClick="click_paseoAlmeriaFin()">Paseo de Almeria</p>
                    <p name="plazaBurros" onClick="click_plazaBurros()">Plaza de los Burros</p>
                    <p name="escuelaArtes" onClick="click_escuelaArtes()">Escuela de Artes</p>
                    <p name="celiaViñas" onClick="click_celiaViñas()">IES Celila Viñas</p>
                        <p name="salonActos" onClick="click_celiaViñasSalonActos()">&nbsp&nbsp Salon de Actos</p>
                    <p name="cableIngles" onClick="click_cableIngles()">Cable Ingles</p>
                    <p name="ciudadJardin" onClick="click_ciudadJardin()">Barrio de Ciudad Jardin</p>
                    <p name="plazaToros" onClick="click_plazaToros()">Plaza de Toros</p>
                    <p name="catedral" onClick="click_catedral()">Catedral</p>
                    <p name="alcazaba" onClick="click_alcazaba()">Alcazaba</p>
                        <p name="torreVela" onClick="click_torreVela()">&nbsp&nbsp Torre de la Vela</p>
                    <p name="cerroSanCristobal" onClick="click_cerroSanCristobal()">Cerro San Cristobal</ul>
                    <p name="cerroMuralla" onClick="click_cerroMuralla()">Muralla</ul>
                    <p name="plazaCircular" onClick="click_plazaCircular()">Plaza Circular</ul>
                    <p name="museoDoñaPakyta" onClick="click_museoDoñaPakyta()">Museo Dña Pakita</ul>
                    <p name="calleReinaRegenteInicio" onClick="click_calleReinaRegenteInicio()">C\Reina Regente</ul>
                    <p name="calleReinaRegenteFin" onClick="click_calleReinaRegenteFin()">C\Reina Regente</ul>
                    <p name="plazaSanSebastian" onClick="click_plazaSanSebastian()">Plaza de San Sebastian</ul>
                    <p name="plazaVieja" onClick="click_plazaVieja()">Plaza Vieja</p>
                        <p name="pingurucho" onClick="click_pingurucho()">&nbsp&nbsp Pingurucho</p>
                        <p name="ayuntamientoAlmeria" onClick="click_ayuntamientoAlmeria()">&nbsp&nbsp Ayuntamiento</p>
                    <p name="estacionTren" onClick="click_estacionTren()">Estacion de Tren</p>
                    <p name="caminoCruzCaravacaInicio" onClick="click_caminoCruzCaravacaInicio()">Cruz de Caravaca</p>
                    <p name="caminoCruzCaravacaFin" onClick="click_caminoCruzCaravacaFin()">Cruz de Caravaca</p>
                    <p name="molineta" onClick="click_molineta()">Molineta</p>
                        <p name="embalses" onClick="click_()">&nbsp&nbsp Embalses</p>
                        <p name="minas" onClick="click_()">&nbsp&nbsp Minas</p>
                    <p name="cuevaCampsa" onClick="click_cuevaCampsa()">Cueva de la Campsa</p>
                    <p name="torrePerdigones" onClick="click_torrePerdigones()">Torre de los Perdigones</p>
                    <p name="barrioAlto" onClick="click_barrioAlto()">Barrio Alto</p>
                    <p name="avenidaSantaIsabelInicio" onClick="click_avenidaSantaIsabelInicio()">Avd Sta Isabel</p>
                    <p name="avenidaSantaIsabelFin" onClick="click_avenidaSantaIsabelFin()">Avd Sta Isabel</p>
                    <p name="barrioCaridad" onClick="click_barrioCaridad()">Barrio de la Caridad</p>
-->
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
        $valueMinZoom = my_search($optioList, 'minZoom');
        $valueLat = my_search($optioList, 'latitude');
        $valueLen = my_search($optioList, 'length');
    @endphp
    var map = L.map('map', {
        minZoom: {{$valueMinZoom}} //zoom minimo aceptado
    }).setView([{{$valueLat}}, {{$valueLen}}], 15);// LOCALICACION DEL FOCUS PRIMARIO DEL MAPA
    ///////////////////////////////////////////////////////
    
    L.tileLayer('https://api.maptiler.com/maps/pastel/{z}/{x}/{y}.png?key=gBYlEvCO94RWBZ7O3Osq', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    }).addTo(map);//MODEL DEL MAPA

    ///////////Variables de los limites //////////////////
    var sureste = L.latLng(36.809803, -2.421262);
    var noroeste = L.latLng(36.867133, -2.491599);
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
            img.src = 'img/celiaEscudo.png';
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
    var casaMariposas = L.marker([36.84170, -2.46378]).addTo(map);
    var cañillo = L.marker([36.84142, -2.46400]).addTo(map);
    var mercadoAbastos = L.marker([36.84032, -2.46264]).addTo(map);
    var refugios = L.marker([36.84149608549136, -2.4646839894335444]).addTo(map);
    var paseoAlmeriaInicio = L.marker([36.84159141131295, -2.4639249336854663]).addTo(map);
    var paseoAlmeriaFin = L.marker([36.83556979472669, -2.4629481757629925]).addTo(map);
    var plazaEducador = L.marker([36.83897171955203, -2.4635565602280396]).addTo(map);
    var plazaBurros = L.marker([36.83755782105399, -2.4639612128727033]).addTo(map);
    var escuelaArtes = L.marker([36.83711, -2.46428]).addTo(map);
    var celiaViñas = L.marker([36.83801157287049, -2.461368970896174]).addTo(map);
    var celiaViñasSalonActos = L.marker([36.837984250313205, -2.461137584716642]).addTo(map);
    var cableIngles = L.marker([36.83200, -2.46349]).addTo(map);
    var ciudadJardin = L.circle([36.83202562331118, -2.4536694109363073], {
        color: '#FAF77F',
        fillColor: '#5CC1FF',
        fillOpacity: 0.25,
        radius: 250
    }).addTo(map);
    var plazaToros = L.marker([36.84683, -2.46167]).addTo(map);
    var catedral = L.marker([36.83817, -2.46739]).addTo(map);
    var torreVela = L.marker([36.84111981987807, -2.471620183850794]).addTo(map);
    var cerroSanCristobal = L.circle([36.84243221553866, -2.4686099340586845],{
        color: '#FAF77F',
        fillColor: '#5CC1FF',
        fillOpacity: 0.25,
        radius: 35
    }).addTo(map);
    var hermitaCerroSanCristobal = L.marker([36.84250102543934, -2.468613775143747]).addTo(map);
    var cerroMuralla = L.marker([36.84216649887228, -2.47045566212104]).addTo(map);
    var plazaCircular = L.circle([36.83521602003171, -2.462788207078575], {
        color: '#FAF77F',
        fillColor: '#5CC1FF',
        fillOpacity: 0.25,
        radius: 20
    }).addTo(map);
    var museoDoñaPakyta = L.marker([36.83527, -2.46344]).addTo(map);
    var calleReinaRegenteInicio = L.marker([36.83379889736059, -2.4639100666575082]).addTo(map);
    var calleReinaRegenteFin = L.marker([36.83540896595454, -2.462928378189209]).addTo(map);
    var plazaSanSebastian = L.marker([36.84209, -2.46296]).addTo(map);
    var plazaVieja = L.circle([36.840299167182714, -2.4673508531189756],{
        color: '#FAF77F',
        fillColor: '#5CC1FF',
        fillOpacity: 0.25,
        radius: 45
        }).addTo(map);
    var pingurucho = L.marker([36.840364166645024, -2.467280681008681]).addTo(map);
    var ayuntamientoAlmeria = L.marker([36.84013870879265, -2.4676391905932356]).addTo(map);
    var estacionTren = L.marker([36.83468, -2.45615]).addTo(map);
    var caminoCruzCaravacaInicio = L.marker([36.850349919867284, -2.4544953693318594]).addTo(map);
    var caminoCruzCaravacaFin = L.marker([36.856733590916456, -2.4611706705957332]).addTo(map);
    var molineta = L.marker([36.85048840935207, -2.463165876625142]).addTo(map);
    var cuevaCampsa = L.marker([36.84109, -2.48207]).addTo(map);
    var torrePerdigones = L.marker([36.84294027083929, -2.461729549095982]).addTo(map);
    var barrioAlto = L.circle([36.844426825572754, -2.454965830677139], {
        color: '#FAF77F',
        fillColor: '#5CC1FF',
        fillOpacity: 0.25,
        radius: 150
    }).addTo(map);
    var avenidaSantaIsabelInicio = L.marker([36.846019563057624, -2.455607773969145]).addTo(map);
    var avenidaSantaIsabelFin = L.marker([36.84877022957813, -2.4537131877258664]).addTo(map);
    var barrioCaridad = L.circle([36.84858919011009, -2.4648717906966375], {
        color: '#FAF77F',
        fillColor: '#5CC1FF',
        fillOpacity: 0.25,
        radius: 120
    }).addTo(map);
    var alcazaba = L.polygon([
        [36.84004520769246, -2.4693843764004306],
        [36.84002803484754, -2.4709185999934937],
        [36.841423315926306, -2.474174801815135],
        [36.84182686939978, -2.4728712482028468],
        [36.841444781590226, -2.4713525126486005],
        [36.8404369215936, -2.4691562403203835],
    ],{
        color: '#FAF77F',
        fillColor: '#5CC1FF',
        fillOpacity: 0.10,
        radius: 120
    }).addTo(map);
    //////////////////////////////////////////////////////////////////////////////////

    ////////////POPUPS IMGS//////////////////////////////////

    @foreach($markerList as $marker)
        {{$marker->name}}.bindPopup("{{$marker->name}} <img src='{{$marker->images->getPrincipal->url}}"); 
    @endforeach
/*
    casaMariposas.bindPopup("Casa de las mariposas <img src='img/mariposas.jpg'/>");
    cañillo.bindPopup("Cañillo <img src='img/cañillo.jpg'/>");
    plazaBurros.bindPopup("Plaza de los burros <img src='img/plazaBurros.jpg'/>");
    refugios.bindPopup("Refugios de la Guerra Civil");
    paseoAlmeriaInicio.bindPopup("Inicio del Paseo de Almería");
    paseoAlmeriaFin.bindPopup("Fin del Paseo de Almería");
    plazaEducador.bindPopup("Plaza del Educador");
    escuelaArtes.bindPopup("Escuela de Artes <img src='img/escuelaArtes.jpg'/>");
    celiaViñas.bindPopup("IES Celia Viñas <img src='img/celiaViñasFachada.jpg'/>");
    celiaViñasSalonActos.bindPopup("Salon de Actos IES Celia Viñas <img src='img/salonActos.jpg'/>")
    cableIngles.bindPopup("Cable Ingles <img src='img/cableIngles.jpg'/>");
    ciudadJardin.bindPopup("Ciudad Jardin Falta imagen");
    plazaToros.bindPopup("Plaza de Toros <img src='img/plazaToros.jpg'/>");
    catedral.bindPopup("Catedral <img src='img/catedral.jpg'/>");
    torreVela.bindPopup("Torre de la Vela <img src='img/torreVela.jpg'/>");
    cerroSanCristobal.bindPopup("Cerro San Cristobal <img src='img/cerroCristobal.jpg'/>");
    hermitaCerroSanCristobal.bindPopup("Soy la hermita del Cerro de San Cristobal <img src='img/hermitaCerroSanCristobal.jpg'/>")
    cerroMuralla.bindPopup("Muralla <img src='img/muralla.jpg'/>",{maxWidth: "auto"});
    plazaCircular.bindPopup("Plaza circular");
    museoDoñaPakyta.bindPopup("Museo Dña Pakyta <img src='img/museoPakyta.jpg'/>");
    calleReinaRegenteInicio.bindPopup("Calle Reina Regente Inicio")
    calleReinaRegenteFin.bindPopup("Calle Reina Regente Fin");
    plazaSanSebastian.bindPopup("Plaza San Sebastian <img src='img/plazaSanSebastian.jpg'/>");
    plazaVieja.bindPopup("Plaza Vieja <img src='img/plazaVieja.jpg'/>");
    pingurucho.bindPopup("Pingurucho <img src='img/pingurucho.jpg'/>");
    ayuntamientoAlmeria.bindPopup("Ayuntamiento de Almería <img src='img/ayuntamientoAlmeria.jpg'/>")
    estacionTren.bindPopup("Estacion Tren <img src='img/estacionTren.jpg'/>");
    caminoCruzCaravacaInicio.bindPopup("Camino Cruz de Caravaca Inicio");
    caminoCruzCaravacaFin.bindPopup("Camino Cruz de Caravaca Fin");
    molineta.bindPopup("La Molineta");
    cuevaCampsa.bindPopup("Cueva de la Campsa");
    torrePerdigones.bindPopup("Torre de los Perdigones <img src='img/torrePerdigones.jpg'/>");
    barrioAlto.bindPopup("Barrio Alto");
    avenidaSantaIsabelInicio.bindPopup("Avenida Santa Isabel Inicio");
    avenidaSantaIsabelFin.bindPopup("Avenida Santa Isabel Fin");
    barrioCaridad.bindPopup("Barrio de la Caridad");
    alcazaba.bindPopup("Soy la Alcazaba de Almería <img src='img/alcazaba.jpg'/>");
    mercadoAbastos.bindPopup("Mercado de Abastos <img src='img/mercadoAbastos.jpg'/>");
    */
    ////////////////////////////////////////////////////////////////////////////////

    // FUNCIONES FOCUS HACIA POPUP AL HACER CLICK EN CUALQUIER PUTNO DEL MARKET/////
@foreach($markerList as $marker) 
    function click_{{$marker->name}}() { 
        map.setView([{{$marker->latitude}}, {{$marker->length}}])
        @if ({{$marker->type}} == 0) 
            map.setZoom(18)
        @endif
        @if ({{$marker->type}} == 1) 
            @if ({{$marker->radio}} > 100)
                map.setZoom(17)
            @else
                map.setZoom(18)
            @if
        @endif
        @if ({{$marker->type}} == 2) 
            map.setZoom(17)
        @endif
    
    }
@endforeach

/*
    function click_casaMariposas() {
        map.setView([36.84170, -2.46378]);
        map.setZoom(18);
    }
    function click_cañillo() {
        map.setView([36.84142, -2.46400]);
        map.setZoom(18);
    }
    function click_mercadoAbastos() {
        map.setView([36.84032, -2.46264]);
        map.setZoom(18);
    }
    function click_plazaBurros() {
        map.setView([36.83755782105399, -2.4639612128727033]);
        map.setZoom(18);
    }
    function click_refugios() {
        map.setView([36.84149608549136, -2.4646839894335444]);
        map.setZoom(18);
    }
    function click_paseoAlmeriaInicio() {
        map.setView([36.84159141131295, -2.4639249336854663]);
        map.setZoom(18);
    }
    function click_paseoAlmeriaFin() {
        map.setView([36.83556979472669, -2.4629481757629925]);
        map.setZoom(18);
    }
    function click_plazaEducador() {
        map.setView([36.83897171955203, -2.4635565602280396]);
        map.setZoom(18);
    }
    function click_escuelaArtes() {
        map.setView([36.83711, -2.46428]);
        map.setZoom(18);
    }
    function click_celiaViñas() {
        map.setView([36.83801157287049, -2.461368970896174]);
        map.setZoom(18);
    }
    function click_celiaViñasSalonActos() {
        map.setView([36.837984250313205, -2.461137584716642]);
        map.setZoom(18);
    }
    function click_cableIngles() {
        map.setView([36.83200, -2.46349]);
        map.setZoom(18);
    }
    function click_ciudadJardin() {
        map.setView([36.83202562331118, -2.4536694109363073]);
        map.setZoom(17);
    }
    function click_plazaToros() {
        map.setView([36.84683, -2.46167]);
        map.setZoom(18);
    }
    function click_catedral() {
        map.setView([36.83817, -2.46739]);
        map.setZoom(18);
    }
    function click_torreVela() {
        map.setView([36.84111981987807, -2.471620183850794]);
        map.setZoom(18);
    }
    function click_cerroSanCristobal() {
        map.setView([36.84243221553866, -2.4686099340586845]);
        map.setZoom(17);
    }
    function click_hermitaCerroSanCristobal() {
        map.setView([36.84250102543934, -2.468613775143747]);
        map.setZoom(18);
    }
    function click_cerroMuralla() {
        map.setView([36.84216649887228, -2.47045566212104]);
        map.setZoom(18);
    }
    function click_plazaCircular() {
        map.setView([36.83521602003171, -2.462788207078575]);
        map.setZoom(18);
    }
    function click_museoDoñaPakyta() {
        map.setView([36.83527, -2.46344]);
        map.setZoom(18);
    }
    function click_calleReinaRegenteInicio() {
        map.setView([36.83379889736059, -2.4639100666575082]);
        map.setZoom(18);
    }
    function click_calleReinaRegenteFin() {
        map.setView([36.83540896595454, -2.462928378189209]);
        map.setZoom(18);
    }
    function click_plazaSanSebastian() {
        map.setView([36.84209, -2.46296]);
        map.setZoom(18);
    }
    function click_plazaVieja() {
        map.setView([36.840299167182714, -2.4673508531189756]);
        map.setZoom(17);
    }
    function click_pingurucho() {
        map.setView([36.840364166645024, -2.467280681008681]);
        map.setZoom(18);
    }
    function click_ayuntamientoAlmeria() {
        map.setView([36.84013870879265, -2.4676391905932356]);
        map.setZoom(18);
    }
    function click_estacionTren() {
        map.setView([36.83468, -2.45615]);
        map.setZoom(18);
    }
    function click_caminoCruzCaravacaInicio() {
        map.setView([36.850349919867284, -2.4544953693318594]);
        map.setZoom(18);
    }
    function click_caminoCruzCaravacaFin() {
        map.setView([36.856733590916456, -2.4611706705957332]);
        map.setZoom(18);
    }
    function click_molineta() {
        map.setView([36.85048840935207, -2.463165876625142]);
        map.setZoom(18);
    }
    function click_cuevaCampsa() {
        map.setView([36.84109, -2.48207]);
        map.setZoom(18);
    }
    function click_torrePerdigones() {
        map.setView([36.84294027083929, -2.461729549095982]);
        map.setZoom(18);
    }
    function click_barrioAlto() {
        map.setView([36.844426825572754, -2.454965830677139]);
        map.setZoom(17);
    }
    function click_avenidaSantaIsabelInicio() {
        map.setView([36.846019563057624, -2.455607773969145]);
        map.setZoom(18);
    }
    function click_avenidaSantaIsabelFin() {
        map.setView([36.84877022957813, -2.4537131877258664]);
        map.setZoom(18);
    }
    function click_barrioCaridad() {
        map.setView([36.84858919011009, -2.4648717906966375]);
        map.setZoom(17);
    }
    function click_alcazaba() {
        map.setView([36.84111206158128, -2.4717900855917216]);
        map.setZoom(17);
    }
    function click_plazaBurros() {
        map.setView([36.83755782105399, -2.4639612128727033]);
        map.setZoom(18);
    }
*/

    ////////////////////////////////////////////////////////////////////////////////




    </script>

    <div id="invisible">

    </div>

</body>

</html>