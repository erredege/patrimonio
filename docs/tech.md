# **Indice**
1. [Laravel](#id1)
2. [Mapa](#id2)
    * 2.1[Leaflet](#id2.1)
    * 2.2[Sidebar](#id2.2)
    * 2.3[Footer](#id2.3)
3. [Juego](#id3)
4. [Panel de Administarción](#id4)
    * 4.1[Marcadores](#id4.1)
    * 4.2[Opciones](#id4.2)
    * 4.3[Imagenes](#id4.3)
    * 4.4[Usuarios](#id4.4)

# ** Laravel** <a name="id1"></a>
Principalmente la aplicación esta desplegada en la version 8 de [laravel] (https://laravel.com/docs/8.x/installation), la cual necesita unos requerimientos mínimos como:
- PHP mayor o igual a  7.3.
- Apache 2 o  MySQL mayor o igual a 5.7

# **Mapa**<a name="id2"></a>
Básicamente el mapa está desplegado mediante una librería de JavaScript, llamada Leaflet, la cual se enfoca en dar funcionalidades de mapeo, también junto a Lealfet utilizamos un plugin creado por la comunidad que nos proporciona el menú situado dentro del mapa en donde se ubican los puntos del mapa.Por último en el footer de la página del mapa, utilizamos una galería de Bootstrap para las imágenes asociadas a cada punto.
Toda la información asociada a cada punto se carga mediante AJAX para facilitar trabajo al servidor.

# **Leaflet**<a name="id2.1"></a>
[Leaflet] (https://leafletjs.com/reference-1.7.1.html) es una librería externa de JavaScript la cual nos permite incorporar la funciones de mapeo a cualquier mapa pudiendo coger posicionamiento de la vida real como en una imagen crear los ejes y personalizar los puntos que deseemos.
En nuestro caso utilizamos un mapa suministrado por un servicio externo y gratuito que nos proporciona el mapa callejero en blanco del mundo y mediante unos límites establecemos el foco en la ciudad de Almería, no pudiendo así poder salir de la misma.Toda esta información se puede modificar desde el panel de administración

# **Sidebar**<a name="id2.2"></a>
[Sidebar](https://github.com/noerw/leaflet-sidebar-v2) es un plugin creado por la comunidad de Leaflet, en donde han creado básicamente un menú que interacciona bien con la librería de Leaflet y nos permite crear un menú lateral dentro del propio mapa, pudiendo plegarse, desplegarse e interaccionar con él.

# **Footer**<a name="id2.3"></a>
[Bootstrap](https://getbootstrap.com/docs/4.6/getting-started/introduction/) o implemtentamos en el footer del mapa el cual esta divido en dos partes:
- Una situada a la izquierda que es donde esta ubicada la galería de imágenes que utilizamos de Bootstrap 4.
- Otra situada a la derecha que es basicamente un contenedor de texto que es donde se carga la información asociada a cada punto que traemos de la petición AJAX.

# **Juego**<a name="id3"></a>
El juego esta divido en dos archivos principalmente, uno en donde se le introducen las preguntas, junto con la respuestas y un apartado en done hemos de copiar la respuesta correcta ( han de ser exactamente igual a la opción, si no al cargar el juego y saltar la pregunta siempre saldrá error ) junto con su id.
Por otra parte tenemos un fichero denominado rutina, que es el que se encarga de todo el funcionamiento del juego ( selección de la pregunta, selección de las respuestas asociadas a la pregunta, comprobación de las respuestas seleccionadas, etc )

# **Panel de Administarción**<a name="id4"></a>
Básicamente es un panel de administración, en el cual nos permite cambiar las opciones generales del mapa, marcadores, imágenes y por último usuarios.
Para poder acceder al panel de administración es direciondelservidor/login, en donde previamente para poder acceder a él ha de estar creado el usuario previamente.

# **Marcadores**<a name="id4.1"></a>
En el apartado de marcadores básicamente se encarga de cargar los puntos que aparecerán en el mapa, en donde tenemos que pasarle la latitud y la longitud del mundo real.Por otra parte tenemos opciones como la información que aparecerá asociada al punto.
Leaflet te permite crear tres tipos de puntos según el tipo de superficie que desees marcar, los cuales pueden ser un marcador simple, un circulo (al cual tenemos que pasarle un radio y una opacidad para el color de la circunferencia) y por último un Poligono (en donde cada vértice del Poligono es un punto, una vez rodeado el lugar deseado, no es necesario la unión del último punto con el primero, ya que leaflet se encarga internamente de crear la unión).
También tenemos dos entradas denominadas título y nombre, en donde el titulo es el que aparecerá en el popup del marcador y el nombre nos permite hacer el cruce con las imágenes para sacar aquellas que tienen el mismo nombre que el punto.

# **Opciones**<a name="id4.2"></a>
Este apartado se encarga de las opciones generales del mapa, en donde encontramos la dirección del servicio del mapa, los limites de movimiento, zoom inicial al abrir el mapa, zoom máximo y mínimo, etc

# **Imagenes**<a name="id4.3"></a>
En el apartado e imágenes podemos ingresar ina imagen asociada a un punto, en donde el titulo de la imagen a de ser el mismo que el nombre del punto. A continuación el siguiente apartado relevante del panel de administración es el orden de prioridad, en donde 1 sera el que se muestre en el popup del mapa, y el resto se mostraran en la galería.

# **Usuarios**<a name="id4.4"></a>
Principalmente este apartado es el que se encarga de conceder permisos a los usuarios para poder acceder al panel de administración, pudiendo crear, modificar y borrar usuarios.