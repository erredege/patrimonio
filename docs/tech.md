# **Indice**
1. [Laravel](#id1)
2. [Mapa](#id2)
    2.1[Leaflet](#id2.1)
    2.2[Sidebar](#id2.2)
    2.3[Footer](#id2.3)
3. [Juego](#id3)

# ** Laravel** <a name="id1"></a>
Principalmente la aplicación esta desplegada en la version 8 de [laravel] (https://laravel.com/docs/8.x/installation), la cual necesita unos requerimientos mínimos como:
- PHP >= 7.3.
- Apache 2 o - MySQL >=5.7

# **Mapa**<a name="id2"></a>
Básicamente el mapa está desplegado mediante una librería de JavaScript, llamada Leaflet, la cual se enfoca en dar funcionalidades de mapeo, también junto a Lealfet utilizamos un plugin creado por la comunidad que nos proporciona el menú situado dentro del mapa en donde se ubican los puntos del mapa.Por último en el footer de la página del mapa, utilizamos una galería de Bootstrap para las imágenes asociadas a cada pun

# **Leaflet**<a name="id2.1"></a>
[Leaflet] (https://leafletjs.com/reference-1.7.1.html) es una librería externa de JavaScript la cual nos permite incorporar la funciones de mapeo a cualquier mapa pudiendo coger posicionamiento de la vida real como en una imagen crear los ejes y personalizar los puntos que deseemos.
En nuestro caso utilizamos un mapa suministrado por un servicio externo y gratuito que nos proporciona el mapa callejero en blanco del mundo y mediante unos límites establecemos el foco en la ciudad de Almería, no pudiendo así poder salir de la misma.Toda esta información se puede modificar desde el panel de administración

# **Sidebar**<a name="id2.2"></a>





A parte de leaflet, utilizamos una librería creada por la comunidad para la utilización del menú llamada [sidebar] (https://github.com/noerw/leaflet-sidebar-v2).