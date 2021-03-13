<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Game</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
       
        <link rel="stylesheet" href="{{ url('gameFiles/css.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script><!--Iconos-->
    </head>
    <body>
        <!-- start Quiz button -->
        <div class="start_btn"><button>Empezar el Juego</button></div>

        <!-- Info Box -->
        <div class="info_box">
            <div class="info-title"><span>Algunas reglas antes de empezar </span></div>
            <div class="info-list">
                <div class="info">1. Tendrás <span>30 segundos</span> para responder por pregunta.</div>
                <div class="info">2. Una vez selecciones una respuesta, no se podrá cambiar.</div>
                <div class="info">3. No se podrá seleccionas varias opciones a la vez.</div>
                <div class="info">4. Iniciado el juego, no se podrá salir.</div>
                <div class="info">5. Conseguiras puntos respecto al numero de preguntas acertadas.</div>
            </div>
            <div class="buttons">
                <button class="quit">Salir </button>
                <button class="restart">Continuar</button>
            </div>
        </div>

        <!-- Quiz Box -->
        <div class="quiz_box">
            <header>
                <div class="title">Juego de los Por Qué</div>
                <div class="timer">
                    <div class="time_left_txt">Tiempo Restante:</div>
                    <div class="timer_sec">30</div>
                </div>
                <div class="time_line"></div>
            </header>
            <section>
                <div class="que_text">
                    <!-- Insertadas en el archivo questions.js -->
                </div>
                <div class="option_list">
                    <!-- Insertadas en el archivo questions.js -->
                </div>
            </section>

            <!-- footer of Quiz Box -->
            <footer>
                <div class="total_que">
                    <!-- Nos los traemos del archivo rutinas.js-->
                </div>
                <button class="next_btn">Siguiente </button>
            </footer>
        </div>

        <!-- Result Box -->
        <div class="result_box">
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">¡Gracias por Jugar!</div>
            <div class="score_text">
                <!-- Nos los traemos del archivo rutinas.js -->
            </div>
            <div class="buttons">
                <button class="restart">Volver a jugar</button>
                <button class="quit">Salir</button>
            </div>
        </div>
        <!--------------------------------Circular Menu Dentro de Mapa---------------------------------->
                               
        <div id="circularMenu1" class="circular-menu circular-menu-left desactive">
                
            <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
            <i class="fa fa-bars"></i>
            </a>
        
            <menu class="items-wrapper">
            <a href="{{url('/')}}" class="menu-item fa fa-home"></a>
            <a href="{{route('game.index')}}" class="menu-item fa fa-gamepad"></a>
            <a href="https://iescelia.org/web/" class="menu-item fas fa-school"></a>
            <a href="https://www.instagram.com/iescelia/?hl=es" class="menu-item fab fa-instagram"></a>
            </menu>
        
        </div>
        <!-----------------------------------------------------------------------------------

        <a class="imagenCelia" class="animate__bounceIn" href ='{{url('/')}}';></a>-->
        

        <script src="{{ url('gameFiles/js/questions.js') }}"></script>
        <script src="{{ url('gameFiles/js/rutinas.js') }}"></script>

    </body>
    
</html>