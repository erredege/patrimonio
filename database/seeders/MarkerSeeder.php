<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('markers')->insert([
            'title' => 'La Casa de las Mariposas',
            'latitude' => '36.84170',
            'length' => '-2.46378',
            'name' => 'casaMariposas',
            'information' => 'Fue levantada en 1909 según planos de Trinidad Cuartara de 1905 sobre el solar donde se ubicaba una antigua posada, en la confluencia de la calle Granada y la Puerta de Purchena. El arquitecto municipal buscaba ornamentar el centro urbano con un edificio que simbolizara el creciente poder económico y político de la burguesía almeriense.
            En efecto, la Casa de las Mariposas es un típico ejemplo de arquitectura burguesa y urbana, aunque sobrepasado en dimensiones: se trató en sus años del edificio más alto y voluminoso de la ciudad, con sus cuatro plantas. El edificio se organiza de acuerdo a las premisas de la arquitectura burguesa, dividiéndose en zócalo, cuerpo central de viviendas y cornisa de coronamiento con grandes aleros. La esquina queda visualmente potenciada por un remate con castillete en dos cuerpos más cúpula.
            La planta baja es de carácter pesado en cuanto a materiales y composición, el cuerpo central más ligero y de acentuada verticalidad y ornamento jerarquizante, culminando el edificio en una amplia cornisa.
            Cabe destacar los elementos modernistas, como la decoración de las barandillas o las coloridas mariposas que decoran el castillete y que dan su nombre al edificio. Estas mariposas son otra demostración de la pertenencia del arquitecto Cuartara a la masonería, que solía incluir algún detalle masón a sus diseños. La mariposa en la masonería es su símbolo de la resurrección, inmortalidad y protección.
            En 2008, el edificio fue adquirido por el grupo financiero Cajamar para uso institucional. En 2010 se acometió su rehabilitación.
            Alberga una sala de reuniones con capacidad para 270 personas.
            Curiosidades
            Se dice que el día en el que se finalizaron las obras de construcción, en la primavera de 1911, el arquitecto del edificio adquirió una arroba de vino y un vaso como celebración. Los presentes, los propietarios del inmueble don Bernardo Campos y don José Rapallo junto a los obreros y el arquitecto bebieron y brindaron todos con el mismo vaso. Tras ello, como recuerdo, el vaso se quedaría en lo alto del castillete de la cúpula. Es posible que uno de los niños trabajadores como peón de albañil fuera levantado colocarlo allí. Durante 99 años, el vaso no se movió del lugar, habiendo resistido a los embates del viento e incluso a los bombardeos de la ciudad durante la Guerra Civil Española. Dicho vaso fue recogido y puesto a buen resguardo antes de la restauración para devolverlo a su emplazamiento original tras las reformas.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Cañillo',
            'latitude' => '36.84142',
            'length' => '-2.46400',
            'name' => 'cañillo',
            'information' => 'El origen de este pilar tan simbólico de la capital almeriense hay que encontrarlo a principios del siglo XIX. Su original emplazamiento fue la Puerta Purchena y aunque años más tarde se trasladó junto a la iglesia de Santiago, más adelante volvió a la Puerta Purchena, donde ya ha permanecido hasta la actualidad.
            Su ubicación en la céntrica Puerta de Purchena le ha hecho convertirse en el mejor testigo de las idas y venidas de la ciudad en los últimos dos siglos. Esa carga simbólica se fusiona con su sencillez, siendo una fuente con un pilar de forma hexagonal del cual salen tres pequeñas piletas utilizadas como abrevaderos.
            La fuente es pequeña, alcanzado el metro y medio de altura. El pilar de la misma tiene una pequeña placa que añadida en el año 2005 y que dice «la Puerta de Purchena no tiene puerta pero tiene un hechizo para que vuelvas». Las leyendas, precisamente, le han acompañado casi desde su construcción, diferentes y variadas. Desde la que asegura que si bebes del ‘cañillo’ te enamoras de una almeriense, pasando porque los visitantes se convierten en un almeriense más o que regresarás a la ciudad algún día. También se acuñó «ser más almeriense que el cañillo» como demostración del almeriensismo.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Mercado de Abastos',
            'latitude' => '36.84032',
            'length' => '-2.46264',
            'name' => 'mercadoAbastos',
            'information' => 'Ejemplo magnífico de arquitectura del hierro junto con el Cable Inglés, la antigua Estación de Ferrocarril o la Plaza de Toros. La Almería burguesa de finales del siglo XIX necesita equipamientos de ocio y educativos (colegios, teatros, plaza de toros...) y comerciales e industriales (mercados, naves, estación...) como símbolos del progreso y de una ciudad en crecimiento. El nuevo mercado central pretende acabar con la venta por puntos diversos de la ciudad (tenderetes ambulantes con carácter antihigiénico y creando basura) y centralizar el abastecimiento alimentario.
            El modelo será la planta basilical de cinco naves (la central sobreelevada permitiendo una galería de ventanas dando luz al interior), definidas por columnas de fundición y un esquema en cruz terminando en cuatro puertas
            La aparición en la segunda mitad del siglo XIX de un ensanche burgués a levante de la ciudad, arrinconó los proyectos de construirlo en el casco antiguo, prosperando la idea de situarlo en el área de residencia de la burguesía local.
            Su ubicación era la más idónea, cerca de la confluencia de los dos ejes viarios más importantes del ensanche burgués, la calle Obispo Orberá y el Paseo, abierto a éste a través de una calle que a tal fin se proyectaba (calle Aguilar de Campoo), en cuyo fondo se situaría la fachada principal.
            El edificio fue encargado en 1892 al arquitecto Antonio Martínez Pérez, aunque fue finalmente diseñado y ejecutado por el entonces arquitecto municipal Trinidad Cuartara Cassinello en 1893. La inauguración tuvo lugar cuatro años después, en 1897. La construcción, que se engloba dentro de la Arquitectura del Hierro, se hizo prácticamente entera de este material, salvo el basamento y el pabellón de la fachada principal que se levantaron con fábrica de mampostería, ladrillo y cantería. La armadura de las cubiertas es metálica y la cerrazón de los paramentos hecha a base de persianas y cristales. En la portada principal, de la calle Aguilar de Campoo, se encuentra representado el símbolo de la abundancia, una figura femenina con un cesto de frutas.
            El Mercado se ha conservado prácticamente intacto hasta nuestros días. En 1982 se llevó a cabo una importante restauración. Asimismo, en 2009, se llevó a cabo una reforma de modernización adecuando la presente estructura a la realidad económica y comercial de nuestros días',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Refugios',
            'latitude' => '36.84149608549136',
            'length' => '-2.4646839894335444',
            'name' => 'refugios',
            'information' => 'Los refugios subterráneos de Almería son una estructura ubicada en la ciudad de Almería, España, a raíz de los 52 bombardeos por aire y mar que sufrió la población, en los que cayeron un total de 754 bombas durante la Guerra Civil Española.1​ Esto provocó que se decidiera construir un sistema de refugios subterráneos, con más de 4 kilómetros de longitud en total, un quirófano y capacidad para albergar a unos 40 000 habitantes de la ciudad por la época.
            Estos fueron diseñados por el arquitecto local Guillermo Langle Rubio, con la ayuda del ingeniero de minas Carlos Fernández Celaya y el ingeniero de caminos José Fornieles;2​ y se convertirían en unos de los más importantes y mejor conservados a nivel europeo.3​ Estos refugios han soportado el principal ataque que ha sufrido la ciudad en toda su historia, el Bombardeo de Almería. Desde 2013 forman parte de la red de Lugares de Memoria Histórica de la Junta de Andalucía.4​
            Existía un código de conducta dentro de estos refugios. De principio, estaba prohibido fumar, para evitar que el refugio se llenara de humo si la ventilación natural era incapaz de eliminarlo. Los niños no podían estar solos dentro y, además, para evitar enfrentamientos dentro, se pedía que no se hablara de política o de religión.11​ También estaba prohibido entrar con armas, ya fueran blancas o de fuego. Una vez acabada la contienda, los refugios permanecieron abiertos por temor a la entrada de España en la Segunda Guerra Mundial, siendo finalmente cerrados en 1944 dado que se convirtieron en hogar de personas sin techo.12​ Hasta septiembre de 1945 no se dieron por concluidas las labores de sellado de los refugios, desinfectación y desescombro de las calles.
            Cuando aún no habían concluido los enfrentamientos, ya se proyectó que el uso que se daría al conjunto de refugios una vez terminada la guerra sería como alcantarillado de la urbe, algo de lo que finalmente no pudo disponer la ciudad hasta los años 1970.5​
            Tras la clausura completa de los refugios, durante el Franquismo, estos pasadizos cayeron en el olvido13​ hasta que fueron encontrados fortuitamente el año 2001. Así, los refugios pasaron desapercibidos para los almerienses, que durante generaciones ignoraron su existencia.
            Su hallazgo fue accidental, pues unas obras contiguas para la realización de un aparcamiento subterráneo en la cercana Rambla Obispo Orberá en el año 2001 se toparon con estas galerías.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);
        //36.83873442036214, -2.4634421656642216
        DB::table('markers')->insert([
            'title' => 'Paseo de Almeria',
            'latitude' => '36.83873442036214',
            'length' => '-2.4634421656642216',
            'name' => 'paseoAlmeriaInicio',
            'information' => 'Constituye su apertura la gran operación urbanística burguesa realizada en el siglo XIX en Almería, equivalente a la Gran Vía de Madrid o Granada, o la Diagonal de Barcelona, como un ensanche o crecimiento burgués de la ciudad, aprovechando el espacio dejado por el frente oriental de murallas que se derriba y los solares de los conventos desamortizados (San Francisco, Santo Domingo y la Trinidad).
            Es tras la demolición de las murallas a partir de 1855 cuando comienzan las alineaciones y aperturas de nuevas calles. En 1856 presentan un proyecto para abrir y urbanizar un amplio salón entre la Puerta de Purchena y la Puerta del Sol (la salida de la calle Trajano al Paseo, cuya prolongación es la actual calle Rueda López). Se delineó una perspectiva amplia y recta y se trazó el paseo con amplio andén central elevado y dos calzadas laterales. Los edificios empezaron a bordearlo. En 1865 se paga a Ramón Orozco, el gran terrateniente y hombre más rico de Almería, el precio por los terrenos ocupados y dos años después el Paseo está prácticamente terminado.
            La primera fase del Paseo fue diseñada por el arquitecto Fabio Gago en 1859 y llegaba hasta la actual Plaza del Educador. Las viviendas responden al modelo arquitectónico de vivienda unifamiliar de la burguesía liberal.
            La segunda fase, hasta Rueda López, corresponde a un proyecto de ensanche de 1860 del arquitecto municipal Martín Baldó, siguiendo el Paseo en línea recta sin respetar el quiebro de la antigua muralla.
            La tercera y última fase responde a un proyecto de Trinidad Cuartara de 1874, organizando el Paseo como un boulevard con calzada central y dos paseos laterales con árboles y aceras.
            En 1890 se decide construir una plaza circular en la confluencia del Paseo y la Rambla así como una calle (Reina Regente) que una el paseo con el nuevo puerto. Todas las edificaciones debían ajustarse a un modelo, con aprobación del Ayuntamiento.
            En marzo de 1867 se enciende el alumbrado de hidrógeno. En 1882 Juan Lirola le pone aceras de Portland. En 1892 don Francisco Jover, quita el andén central y se estrena el alumbrado eléctrico. En 1911 don Braulio Moreno manda hacer las aceras y pavimenta la calzada. En 1857 se dedicó a Alfonso XII, el Paseo del Príncipe y posteriormente Paseo de Cádiz, con la Primera República lo llamaron Paseo de Orozco. Tras la proclamación de la Segunda República en 1931 se convierte en la avenida de la República y tras la Guerra Civil en 1939 a avenida del Generalísimo. Desde 1979 vuelve a tener el nombre de Paseo de Almería.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza del Educador',
            'latitude' => '36.83897171955203',
            'length' => '-2.4635565602280396',
            'name' => 'plazaEducador',
            'information' => 'La Plaza Juan Cassinello, nombre del arquitecto del edificio Banesto, es más conocida como Plaza del Educador. Está situada en el Paseo de Almería. Una estatua de 1969 homenajea a la figura del maestro, representada por un profesor impartiendo conocimiento a sus alumnos.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza de los Burros',
            'latitude' => '36.83755782105399',
            'length' => '-2.4639612128727033',
            'name' => 'plazaBurros',
            'information' => 'A raíz de la unión de las dos plazas, su remodelación dio como resultado de una de las zonas mas visitadas en Almeria y su nombre, se debe a que tiempo atrás era la parada de los coches de caballos. Ahora, totalmente peatonal, se puede pasear, disfrutar en las terrazas de los bares y pubs de la bordean, entrar al Teatro Cervantes, visitar la preciosa Escuela de Arte que tenemos o salir de los refugios de la Guerra Civil que hay.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Escuela de Artes',
            'latitude' => '36.83711',
            'length' => '-2.46428',
            'name' => 'escuelaArtes',
            'information' => 'El antiguo convento fue suprimido en 1810 por las tropas napoleónicas, en 1822 por el gobierno constitucional, y definitivamente en 1835 durante la desamortización de Mendizábal.
            En 1841 se destinó el edificio a la enseñanza, lo que trajo consigo importantes reformas, tanto en su interior como en sus fachadas, que dirigieron los arquitectos almerienses Guillermo Langle y Trinidad Cuartara. Durante la guerra civil española sus instalaciones sirvieron a la causa republicana, designándose los sótanos para establecer la central de telégrafos de la ciudad, las dos primeras plantas estaban destinadas a las fuerzas del bando republicano y la tercera y última como alojamiento de refugiados llegados de Málaga. Además, sus puertas quedaban abiertas durante los bombardeos como refugio.1​ La Escuela de Artes quedó definitivamente instalada en el edificio en 1951.
            El antiguo claustro hoy hace las veces de patio interior. Edificado probablemente en el siglo XVI, fue remodelado durante el siglo XVIII, concluyéndose las obras en 1728, y muestra detalles góticos y manieristas, más blasones reales y de la Orden de Santo Domingo
            Curiosidades
            Hacia 1989, el director de cine Steven Spielberg grabó parte del largometraje Indiana Jones y la última cruzada en el patio del edificio. Inicialmente, Spielberg quería grabar la escena en la que se muestra un Rolls-Royce Phantom II en el conocido Patio de los Leones de la Alhambra, pero los directores del monumento granadino se negaron a introducir el coche usando un helicóptero como se sugería. Al volver a Almería, donde se rodaban otras partes de la película, se encontró con este emplazamiento, el cual le pareció adecuado. Para introducir el vehículo, se ideó una rampa de madera para librar los escalones que descienden hasta el lugar, que finalmente no fue capaz de soportar el peso. El golpe deterioró tres escalones que, a día de hoy, se ven de diferente color que los demás. Se dice que Spielberg pagó la reparación y además donó 300 000 pesetas para el viaje de estudios de la escuela.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'IES Celia Viñas',
            'latitude' => '36.83801157287049',
            'length' => '-2.461368970896174',
            'name' => 'celiaViñasFachada',
            'information' => 'Originalmente, el edificio destinado a la Escuela Superior de Artes Industriales iba a ser construido en un solar delimitado en 1908 junto a la Rambla de Belén de la capital almeriense, según planos de Trinidad Cuartara. No obstante, el edificio actual es resultado del concurso del Estado ganado por el arquitecto Joaquín Rojí y López-Calvo, quien actualizó el proyecto en 1919, no poniéndolo en marcha hasta 1923. Las obras no concluyeron del todo hasta comenzados los años 30.
            En 1951 pasó a realizar funciones de Instituto de Educación Secundaria, intercambiando funciones con la Escuela de Artes Aplicadas y Oficios Artísticos. Durante más de una década fue mixto hasta que en 1966 se inaugurara el Instituto de Enseñanza Secundaria Nicolás Salmerón, en el barrio del Zapillo.
            Fue un polo cultural de la capital, pues albergó además una importante biblioteca y dos salas expositivas que fueron germen del futuro Museo de Almería.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Salon de Actos IES Celia Viñas',
            'latitude' => '36.837984250313205',
            'length' => '-2.461137584716642',
            'name' => 'celiaViñasSalonActos',
            'information' => 'Destacar las vidrieras del Salón de Actos, posiblemente las más bellas que
            podamos encontrar en la ciudad. Estas vidrieras quedan situadas en la fachada oeste del edifico
            encima de la puerta monumental de entrada, es decir, en la planta segunda. Las medidas totales son,
            aproximadamente, de 7,43 metros de largo por 3,46 de alto. Las vidrieras están configuradas en cinco cuerpos en sentido vertical y con una decoración
            geométrica de cuadrados y rombos emplomados. En el cuerpo central aparece el escudo de la
            ciudad de Almería, que se repite en el exterior (pero más simplificado) cuatro veces bajo cada una
            de las columnas del segundo cuerpo en la puerta principal. En los cuerpos laterales, a un lado y a otro del escudo de Almería, está representada la
            alegoría de las Artes y de los Oficios -el cartabón, el yunque y el compás-. En los cuerpos extremos
            se encuentran unas guirnaldas de frutas y elementos florales. Los colores predominantes en estos
            motivos son el amarillo, el rojo, el blanco y el ocre.
            ',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Cable Ingles',
            'latitude' => '36.83200',
            'length' => '-2.46349',
            'name' => 'cableIngles',
            'information' => 'El Cable Inglés, también conocido como muelle El Alquife, es un antiguo cargadero de mineral situado en Almería, España, de la sociedad The Alquife Mines and Railway Company Limited, ejemplo de la arquitectura del hierro. Su construcción concluyó en 1904, y unía la estación con el puerto. De estilo ecléctico caracterizado por el uso de los nuevos materiales, siguió las directrices de la escuela de Gustave Eiffel. En 1998 fue declarado Bien de Interés Cultural de Andalucía debido a su naturaleza, ya que esta tipología constructiva no fue frecuente y, por la imposibilidad de recuperar su uso original, ha adquirido una singularidad indiscutible digna de ser conservada.
             Actualmente, la parte saliente de la infraestructura pertenece a la Autoridad Portuaria de Almería, la cual delega las competencias a la Junta de Andalucía. No obstante, la parte sobrante del inmueble pertenece al Ayuntamiento de Almería. Está en proyecto su restauración',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Ciudad Jardin',
            'latitude' => '36.83202562331118',
            'length' => '-2.4536694109363073',
            'name' => 'ciudadJardin',
            'information' => 'El barrio comenzó a erigirse hacia 1941, aunque el proyecto para hacerlo existía desde la dictadura de Miguel Primo de Rivera. Corrió a cargo del arquitecto local Guillermo Langle Rubio y fue terminado en 1947, construyéndose 245 viviendas unifamiliares de una o dos plantas con jardín, además de una iglesia.
             En 1945 se consolidó una normativa para la compra-venta: Tendrían preferencia las solicitudes que pudieran ser pagadas al contado; y para una venta a plazos, se debía pagar la décima parte como entrada. La única manera de poder deshacerse de la vivienda era mediante herencia.
             Durante décadas, las viviendas del barrio estaban cubiertas de un polvo rojizo, proveniente del movimiento del mineral traído por ferrocarril desde las minas de Alquife.',
            'type' => '1',
            //'start_point' => null,
            'radio' => '250',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza de Toros',
            'latitude' => '36.84683',
            'length' => '-2.46167',
            'name' => 'plazaToros',
            'information' => 'En el paraje de Jaruga del barrio del Quemadero (solar destinado en principio a la estación del ferrocarril Bacares-Almería), bajo el proyecto y dirección de obra de los arquitectos Trinidad Cuartara Cassinello y Enrique López Rull, la plaza de toros de Vílches se levantó en el tiempo récord de un año. Los cuantiosos gastos fueron sufragados por un limitado número de ricos propietarios, aunque al poco tiempo la sociedad, presidida por Felipe Vilches, rico propietario, presidente de la Diputación Provincial y gobernador civil, se deshizo y su titularidad quedó en manos de José González Canet.
             De gran armonía y belleza de líneas, es uno de los máximos ejemplos capitalinos de la arquitectura civil del hierro. Disponía de un aforo capaz para 9.500 espectadores (hoy reducido a 8.500), e incorporó todos los adelantos técnicos y servicios auxiliares que se podían exigir a los espacios arquitectónicos dedicados a la “Fiesta Nacional”: corrales y chiqueros, pilones y comederos, cuadras, agua corriente, casa del conserje, almacén de arneses, enfermería, desolladero. Posee 8 gradas y tendidos. En el segundo piso hay 60 palcos (50 de ellos a la sombra), y las andanadas son todas de sol. En la actualidad sólo dispone de tres puertas, monumentales, de acceso del total de quince que diseñaran Cuartara y López Rull, cegadas el resto, salvo la abertura de un ventanal superior.
             Curiosidades
             Abrió sus puertas el 26 de agosto de 1888 con un “mano a mano” entre Rafael Molina “Lagartijo” y Luis Mazantini, ante reses del duque de Veragua.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Catedral',
            'latitude' => '36.83817',
            'length' => '-2.46739',
            'name' => 'catedral',
            'information' => 'La Catedral de la Encarnación, en la ciudad española de Almería, es la sede episcopal de la diócesis de Almería. El edificio, con estructura de fortaleza, presenta una arquitectura de transición entre el Gótico tardío y el Renacimiento, así como rasgos posteriores barrocos y neoclásicos. Constituye una de las manifestaciones artísticas de carácter arquitectónico y cultural más importantes y valiosas de Andalucía y, por ende, de España, al ser la única Catedral con naturaleza de fortaleza erigida en el siglo XVI.
             Es la empresa artística más importante de la Edad Moderna en Almería, cuya construcción abarca los siglos XVI, XVII y XVIII, contrastando con la penuria y crisis económica general de la provincia durante esos siglos. El templo presenta planta de salón formada por tres naves de altura poco elevada, cubierta plana, escasez y poca amplitud de los vanos, elementos defensivos típicos de una fortaleza (adarves, troneras, aspilleras, atalayas...) y una subordinación general de los aspectos estéticos a los defensivos. Tres capillas, situadas en la cabecera y girola, conforman una planta de forma rectangular. En el transepto, sobre el crucero, se sitúa la linterna renacentista, obra de Juan de Orea, autor también de la sacristía y del patio de armas, convertido en claustro en el siglo XVIII. El templo cuenta con una torre del homenaje del siglo XVII en el noroeste.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Torre de la Vela',
            'latitude' => '36.84111981987807',
            'length' => '-2.471620183850794',
            'name' => 'torreVela',
            'information' => 'El Muro de la Vela separa el primer recinto del segundo, aunque se accede desde este último. Se llama así porque allí se levantaba la Campana de la Vela, que anunciaba varios eventos cuando tenían lugar: barcos que entraban en la bahía, peligro, fuego, etc. Fue mandado construir por el rey Carlos III. La campana reunía con su toque a los defensores de la fortaleza. En otras épocas sirvió para marcar la hora del agua a los regantes, como toque de queda y como cierre de las puertas de las murallas y salida de las patrullas. También se la oía en las noches de tormenta.19​ Está cobijada por una cruz y tiene un nombre: Santa María la Mayor.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Cerro San Cristobal',
            'latitude' => '36.84243221553866',
            'length' => '-2.4686099340586845',
            'name' => 'cerroSanCristobal',
            'information' => 'Cota mas alta al rededor de la ciudad, punto de observacion de la bahia y golfo de almeria, hubo un fuerte que abastecia la parte norte de la muralla.',
            'type' => '1',
            //'start_point' => null,
            'radio' => '35',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Ermita Sagrado Corazon de Jesus',
            'latitude' => '36.84250102543934',
            'length' => '-2.468613775143747',
            'name' => 'ermitaCerroSanCristobal',
            'information' => 'Dicho monumento que preside el Cerro de San Cristóbal, llamado así por la antigua ermita (de San Cristóbal) que se encontraba en dicho lugar, constituye un fantástico mirador de la ciudad, con vistas a la ciudad y a la Alcazaba.
            Los almerienses que amamos esta ciudad, estamos esperanzados en la remodelación que está en proyecto por parte del Ayuntamiento capitalino, que por otra parte es muy necesaria. Desde él las vistas de la ciudad con la Alcazaba y el mar son formidables, y por ello necesita una digna restauración. Una vez realizada, sin duda, será una visita obligada de todos los almerienses y personas de otras provincias andaluzas y comunidades autónomas que se acerquen a conocer nuestra querida y entrañable ciudad.
            En esta sección del Patrimonio Perdido en la Guerra, vamos a dedicar un artículo a lo realmente sucedió en la Guerra con la monumental imagen de mármol del Sagrado Corazón de Jesús, para que no se especule más, porque está documentado.
            En uno de los Boletines Eclesiásticos del Obispado, en 1944, se hace referencia a la reconstrucción del Monumento al Sagrado Corazón de Jesús, relatando lo que realmente sucedió con él: El 25 de julio de 1936, el monumento al Sagrado Corazón de Jesús caía a las dos de la tarde a fuerza de dinamita. Los bloques del monumento cayeron sobre la ermita de San Cristóbal tapiando la puerta. La cabeza y el busto cayeron en la sacristía. En este derribo, sin embargo, la cabeza del monumento quedó intacta sin ningún deterioro.
            Los brazos desaparecieron y el corazón presentó un pequeño desconchado en la parte superior de la cruz. El busto de la imagen se conservó al igual que el pedestal del monumento, aunque éste muy deteriorado. La imagen derribada en la Guerra, no desapareció, restaurándose con posterioridad.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Murallas de Jayrán',
            'latitude' => '36.84216649887228',
            'length' => '-2.47045566212104',
            'name' => 'cerroMuralla',
            'information' => 'La muralla del Cerro de San Cristóbal, más conocida como murallas de Jayrán, es lo que hoy permanece en pie de la antigua muralla que rodeaba toda la ciudad y fueron construidas por el primer rey de la Taifa de Almería, Jayrán. A pesar de que se han encontrado más secciones de dicha muralla en otras zonas de Almería, como en los cercanos refugios subterráneos de Almería,29​ esta es la única parte que siempre se ha encontrado al aire libre y no ha sido descubierto posteriormente en estado de ruinas. Originalmente, su nombre era monte Laham,30​ que en árabe significa carne. Su nombre católico procede del corto periodo en el que Almería estuvo bajo el dominio de Alfonso VII, en el que se erigió un castillo dedicado a San Cristóbal, hoy en estado de ruina progresiva. Fue erigida para proteger el antiguo barrio de La Musalla, en tiempos de Abderramán III, entre los años 1012 y 1028.31​ La muralla, con una sección de tres metros de grosor y cinco metros de altura,32​ cuenta con un total de siete torreones: tres de planta cuadrada de origen árabe, y cuatro de planta circular de origen cristiano, erigidas por orden de Alfonso VII en el año 1147.33​ También permanece en pie una puerta, conocida como Puerta de la Almudaina,34​ y que da acceso a la EEZA. Para la restauración de los torreones derruidos tras la contienda del siglo XII, se reutilizadon bolaños que se encontraban por el suelo y se han encontrado cruces de posible origen templario grabadas en la argamasa utilizada.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza Circular',
            'latitude' => '36.83521602003171',
            'length' => '-2.462788207078575',
            'name' => 'plazaCircular',
            'information' => 'La Plaza Circular, punto de encuentro entre el Paseo de Almería y la Rambla Federico García Lorca en su parte sur y que fue todo un símbolo de la burguesía almeriense que no dudó en darle su particular orientación a esta zona, aumentando de altura las viviendas y haciendo bloques fácilmente reconocibles, todos plurifamiliares con tres o cuatro plantas y con mucho protagonismo para la ornamentación, entendida un como símbolo de ostentación.
             La Plaza Circular se diseña según el modelo barcelonés de ensanche, con edificios en chaflán, o lo que es lo mismo, esquinas seccionadas en ángulo.',
            'type' => '1',
            //'start_point' => null,
            'radio' => '20',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Museo de Doña Pakyta',
            'latitude' => '36.83527',
            'length' => '-2.46344',
            'name' => 'museoDoñaPakyta',
            'information' => 'Casa de Doña Pakyta, una espectacular vivienda que, a lo largo de los años, ha sido un punto de obligada parada para almerienses y visitantes por sus características tan peculiares y que respondían a la personalidad de su propietaria. Esa veneración fue devuelta a la ciudad con su cesión para el uso y disfrute de todos los ciudadanos a través de un museo permanente para la capital almeriense. Fue en mayo de 2014 cuando el chalet pasó a formar parte del patrimonio municipal y se iniciaban las labores de adaptación de las plantas baja y primera al nuevo fin del inmueble.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);
            //36.83451289249774, -2.4633868548686366
        DB::table('markers')->insert([
            'title' => 'Calle Reina Regente',
            'latitude' => '36.83451289249774',
            'length' => '-2.4633868548686366',
            'name' => 'calleReinaRegenteInicio',
            'information' => 'Conecta la plaza circular con el puerto, nombre en honor a la rina de la eopca por la ayuda tras las inundaciones.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza San Sebastian',
            'latitude' => '36.84209',
            'length' => '-2.46296',
            'name' => 'plazaSanSebastian',
            'information' => 'La actual plaza de San Sebastián fue, ya en el siglo XI, uno de los lugares más frecuentados de la Almería musulmana, un anchurón a las puertas de la ciudad en el que se bifurcaban los caminos que salían en dirección nordeste y levante. En el emplazamiento actual de la iglesia se levantó originalmente una mezquita que, el 25 de diciembre de 1489, se convirtió en el lugar en el que se hizo la entrega de llaves de la ciudad durante los últimos momentos de la conquista cristiana,1​ tras lo cual es convertida en la antigua ermita de San Sebastián.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Plaza Vieja',
            'latitude' => '36.840299167182714',
            'length' => '-2.4673508531189756',
            'name' => 'plazaVieja',
            'information' => 'La plaza de la Constitución, también conocida como plaza Vieja, es una plaza situada en el centro histórico de la ciudad española de Almería. Durante la época musulmana se encontraba en este lugar el zoco, consolidándose su carácter de plaza en el siglo XIX. Alberga la sede del Ayuntamiento de la ciudad, construido a finales de dicho siglo, proyecto del arquitecto almeriense Trinidad Cuartara,1​ así como el Monumento a los Mártires de la Libertad.',
            'type' => '1',
            //'start_point' => null,
            'radio' => '50',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

        DB::table('markers')->insert([
            'title' => 'Pingunrucho',
            'latitude' => '36.840364166645024',
            'length' => '-2.467280681008681',
            'name' => 'pingurucho',
            'information' => 'Este monumento conocido también como "Monumento de los Coloraos" o "Pingurucho", conmemora el "Pronunciamiento de Almería o de los Coloraos" en agosto de 1824. Homenajea a los liberales que llegaron a las costas de Almería y se pronunciaron contra el absolutismo de Fernando VII y a favor de la Constitución de 1812, que finalmente serían fusilados por el rey el 24 de agosto de ese mismo año.3​
             El monumento original se construyó entre 1868 y 1870 y estaba situado en la Puerta de Purchena. En 1900 se traslada a la plaza de la Constitución hasta que fue derribado por orden del ayuntamiento franquista en 1943. El actual fue reconstruido en 1988 por petición popular.4​ Se trata de una gran columna de mármol blanco de Macael rematada con un capitel corintio y una esfera que simboliza el sol.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Ayuntamiento de Almeria',
            'latitude' => '36.84013870879265',
            'length' => '-2.4676391905932356',
            'name' => 'ayuntamientoAlmeria',
            'information' => 'El Ayuntamiento de Almería es la institución que se encarga del gobierno de la ciudad y del gobierno del municipio de Almería, España.
             Es una de las cuatro administraciones públicas con responsabilidad en la ciudad de Almería, junto a la Administración General del Estado de España, la Junta de Andalucía y la Diputación de Almería. El consistorio está presidido por el Alcalde de Almería, que desde 1979 es elegido democráticamente por sufragio universal. Actualmente ocupa dicho cargo Ramón Fernández-Pacheco Monterreal, del Partido Popular, desde noviembre de 2015 tras la renuncia del anterior alcalde.
             El edificio se encuentra en la Plaza de la Constitución, y es una obra de Trinidad Cuartara Cassinello. Actualmente se encuentra cerrado por estar en obras, durante las que se encontró el acceso a los Refugios subterráneos de Almería, aunque la conexión con el ramal principal de estos está cortada a unos 20 metros de la entrada.2​ Temporalmente, el Ayuntamiento se ha trasladado al sanatorio, frente a la Estación de Almería.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Estacion de Tren',
            'latitude' => '36.83468',
            'length' => '-2.45615',
            'name' => 'estacionTren',
            'information' => 'Los terrenos fueron adquiridos en 1880 y la antigua estación de ferrocarril comienza a construirse para la Compañía de los Caminos de Hierro del Sur de España en 1890 y es finalizada en 1893. Aunque su inauguración se produce dos años más tarde, el 23 de julio de 1895, con la línea Guadix-Almería. Es una muestra perfecta de la arquitectura del hierro y del cristal. Su interior lo preside un reloj manufacturado por Paul Garnier.​ El objetivo de la línea era trasladar los minerales desde Sierra Morena al puerto de Almería, aunque también se usó para otras mercancías e incluso transporte de viajeros.
             Durante la Guerra Civil, en un bombardeo de los nazis en 1937 en apoyo a Franco, la vidriera frontal, el reloj anteriormente mencionado y la balaustrada de hierro que coronaba la construcción fueron destruidos, no por golpes directos, sino por proyectiles que cayeron sobre las vías adyacentes. Esta balaustrada se sustituyó en los años 1970 por otra de ladrillo que fue retirada durante los trabajos de rehabilitación de la estación en 2017 y que será sustituida por otra más similar a la original.​ Hacia el 30 de mayo de 1984 se construyó un puente peatonal sobre la playa de vías que permitiera acortar el trayecto entre la estación y los barrios de costa, que fue popularmente conocido como el puente rojo.​ Entre 1988 y 1991, durante la ejecución del Primer Plan de Modernización de Estaciones, las instalaciones de Almería fueron restauradas. En el transcurso de dicha reforma se descubrió la entrada de dos refugios antiaéreos construidos durante la contienda,​ y un espacio subterráneo con tres estancias, pero no es segura la relación entre ambos hallazgos.
             Su fachada principal es de dos cuerpos, siendo el central de hierro y cristal, materiales característicos de la arquitectura del hierro. La más fiable información sobre el autor sostiene que fue diseñada por Laurent Farge, quien se encargó del proyecto de cálculo y montaje. El cuerpo central y algunas vidrieras fueron diseñados por la compañía francesa Fives-Lille. Se incoó expediente para su declaración como Bien de Interés cultural en 1985. Aún no se ha culminado esta declaración.
             En enero de 2018 comenzaron unos trabajos de restauración que permitirán dar a la ciudad un espacio para eventos culturales, musicales y hostelería.11​ El popular puente rojo se pintó en blanco aprovechando la ocasión.​ Las obras se suspendieron en diciembre de 2019 debido a que necesitaban un nuevo proyecto por deficiencias graves en la estructura y se retomaron en septiembre de 2020, esperando ser concluidas ese mismo año.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);
            //36.85429567665765, -2.456892272954218
        DB::table('markers')->insert([
            'title' => 'Camino Cruz Caravaca',
            'latitude' => '36.85429567665765',
            'length' => '-2.456892272954218',
            'name' => 'caminoCruzCaravacaInicio',
            'information' => 'El Barrio Araceli comenzó a edificarse en la década de 1940 por obras del Obispado de Almería. Por ello, en los años cincuenta era conocido como el Barrio del Obispo.Debido a su situación sobre una zona de cerros, sus calles son estrechas y con pendientes, siendo en la década de 1970, el barrio con más casas-cueva de Almería​. A partir de esa época, con el desarrollismo se construyeron numerosos bloques de edificios, y a finales del siglo XX, dúplex en la parte norte2​. A partir del año 2009, con el desdoblamiento y construcción del bulevar de la N-340, el barrio ha sufrido un positivo cambio de imagen​. En el 2019 comienzan a construirse unos huertos urbanos en el barrio de 1.014 m², cuya gestión sea correspondiente a las asociaicones vecinales, con la intención de darle un uso social, terapiacional y medio ambiental.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);


        DB::table('markers')->insert([
            'title' => 'Molineta',
            'latitude' => '36.85048840935207',
            'length' => '-2.463165876625142',
            'name' => 'molineta',
            'information' => 'Junto al viejo cortijo llamado de Góngora, a un lado de la Rambla de Belén, se abre un sendero que lleva hasta el corazón de la Molineta. Nada más empezar el camino aparece un pino seco, como un anuncio del abandono que ha sufrido este lugar en los últimos cuarenta años.  El árbol está cerca de un palomar de piedra derruido, cuyo majestuoso arco descansa entre las rocas y la vegetación que con las últimas lluvias ha poblado el paisaje.
            Subiendo, antes de perder de vista el palacio, se puede ver lo que queda de la antigua casa de los aparceros, frente a los restos de un aljibe y un bosque de eucaliptos que llena de sombras la hacienda. A medida que se empieza a subir el cerro uno descubre el alma de aquel lugar: los restos del canal de San Indalecio que con su entramado de acequias y balsas le dieron vida a la Molineta en las primeras décadas del siglo pasado, haciendo que el milagro del agua llegara desde los montes de Benahadux. Ahí están los restos del cauce contando su historia y los árboles que aguantaban el avance de la erosión para que el cerro no se tragara la acequia.
            Lugar mágico
            Aquel camino de cuestas lleva hasta un lugar mágico que desde lejos parece la base de una pirámide. Son las piedras de la balsa conocida con el nombre de ‘los cien escalones’, un escenario mítico para varias generaciones de adolescentes que conocieron la balsa cuando todavía tenía agua y cuando aún corría la leyenda de que un guarda despiadado con escopeta y cartuchos de sal rondaba por la zona para que ningún niño osara a darse un baño en aquellas aguas sagradas.  En realidad, la balsa tiene cincuenta y dos escalones, pero si uno los baja y luego los sube entiende por qué el nombre de los cien escalones.
            Frente a la gigantesca balsa estaba la casa del relojero, el encargado de abrir y cerrar las llaves de paso del agua cuando había que repartir las horas de riego entre los agricultores. De la vivienda quedan las piedras y un trozo de pared que ha sobrevivido al paso del tiempo.
            La balsa de los cien escalones esconde una inmensa cueva en su interior, que linda con la zona donde  estuvieron instalados los polvorines. Es la zona conocida también como las cuevas de Conan porque allí se  estuvieron rodando escenas de la famosa película que en 1982 trajo a Almería al actor americano Arnold Schwarzenegger.  En su origen, este paraje era una gran cantera de donde se extrajo la piedra con la que se construyó el dique de levante del puerto. Hasta la reforma de la Rambla de Belén, todavía era posible encontrarse con los restos de la vía estrecha por la que bajaba el tren cargado de  piedras camino del muelle. Cuando se abandonaron las canteras la zona se transformó en un almacén de pólvora.
            La columna
            Una mina de las que atraviesan y rodean el cerro se abre paso entre las rocas, perforando la montaña hasta el lado de poniente. Allí se encuentra otra gruta  que los niños del lugar bautizaron con el nombre de la cueva de la Columna, en honor a la piedra gigantesca que cuelga del techo. Se trata de una antigua balsa que se quedó sin agua como poco a poco se fue quedando sin vida aquel inmenso parque al norte de la ciudad.
            La Molineta es un mundo perdido y una oportunidad desperdiciada. No existe  otro parque con mayores  posibilidades que aquellos cerros surcados por acequias, donde todavía huele a tomillo y donde se han hecho fuertes los okupas que han convertido las cuevas en espacios habitables. La Molineta es también un mundo de contrastes. En su interior encierra el corazón de otra época, mientras que en sus aledaños ya se siente el avance del progreso que está construyendo en una de sus laderas un grupo de viviendas que será el primero de nuevas urbanizaciones que iran convirtiendo en ciudad aquel espacio lleno de naturaleza. ',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Cueva de la Campsa',
            'latitude' => '36.84109',
            'length' => '-2.48207',
            'name' => 'cuevaCampsa',
            'information' => 'La cueva de la Campsa1​ es una cueva artificial sita en el barrio almeriense de La Chanca. Fue usada inicialmente como un escondite para la ocultación de combustibles y, posteriormente, sirvió como refugio durante la Guerra Civil Española tanto para personas como para mercancías. En los últimos tiempos ha servido también como lugar para el cultivo de champiñones. Se encuentra en las inmediaciones del barranco de Greppi.
             En la actualidad se encuentra abandonada, con su entrada casi taponada excepto por una oquedad de unos 60 cm de altura, y con una entrada cubierta de escombros y basuras. Tras un descenso de unos 50 metros, da paso a una larga serie de galerías, algunas de gran tamaño. Hay referencias que aseguran que alguna de sus galerías se extiende hasta Aguadulce, aunque se encuentran impracticables debido a un derribo provocado por un seísmo.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Torre de los Perdigones',
            'latitude' => '36.84294027083929',
            'length' => '-2.461729549095982',
            'name' => 'torrePerdigones',
            'information' => 'La calle del Relámpago está formada por cinco callejones que desde la calle de Granada se van entrelazando hasta desembocar en la calle de Murcia. Cinco pequeños pasadizos, estrechos y escondidos, que por la forma que van tomando desde su origen hasta su desenlace componen la figura con la que solemos dibujar un rayo sobre un papel. Tal vez por esa apariencia la calle se llamó del Relámpago. Es un lugar que a pesar de formar parte del centro de la ciudad, de esa gran manzana que se extiende desde la iglesia de San Sebastián hacia las calles de Granada y Murcia, suele pasar desapercibido. Tanto que hay cientos de almerienses que transitan a diario por las dos esquinas de la calle y nunca se han internado en su peculiar laberinto.
            Por dentro, la calle del Relámpago nos va llevando a una Almería ya en retirada, a esa ciudad de los años cincuenta que todavía se puede descubrir en algunos de sus viejos edificios, hoy abandonados. Allí se encuentran los restos de la trastienda de la vieja bodega "La Oficina", auténtico templo de un tiempo donde sus taburetes y sus mesas eran patrimonio de los hombres que se reunían a diario en su salón a compartir sus sueños alrededor de una botella de vino de la tierra.
            En el corazón de ese entramado de recodos que van componiendo la calle sobresale, como escapada de un cuento antiguo, una extraña torre cuadrangular que destaca como un anacronismo en medio de un corralón de casas y grandes edificios. La altura de los pisos que la rodean sólo permite ver la parte alta del torreón, que aún se levanta firme para mostrar las arrugas de los años. Es la torre de los Perdigones, una reliquia de otro siglo que en su tiempo sirvió de fábrica de municiones. Allí, en el horno que culminaba la estancia superior, se fundía el plomo  que después se iba cribando para conseguir los perdigones de distinto calibre. Su origen nos lleva a las primeras décadas del siglo diecinueve, cuando aquella zona de la ciudad se quedaba a extramuros y estaba rodeada de huertas.
            La torre debió de quedar abandonada en las últimas décadas del siglo, cuando Almería fue creciendo  y las ordenanzas prohibieron que se pudiera construir o mantener dentro del recinto de la ciudad este tipo de fundiciones. La vieja torre de los Perdigones se quedó sin actividad y fue cayendo en el olvido, rodeada de un manojo de casas que la fue ocultando. En septiembre de 1922, los vecinos de las viviendas colindantes, denunciaron el peligro que suponía el estado ruinoso en el que se encontraba la torre. “Abandonada, constituye un foco de infección y en el caso de un posible derrumbamiento, los escombros irían a caer sobre las casas”, decían los vecinos.
            En esa época, los vecinos de la zona intentaron modernizar aquel entramado de callejones que rodeaban la torre, y solicitaron a las autoridades que se prolongara la calle del Relámpago para que pudiera tener una salida en línea recta a la calle de Murcia. La iniciativa fue aprobada en 1925 y un año después se echó marcha atrás por los costes que para las arcas municipales supondrían las obras y las expropiaciones para poder hacer realidad el nuevo trazado.
            La calle siguió manteniendo su apariencia antigua, tal y como está en la actualidad, y la torre de los Perdigones fue resistiendo el paso del tiempo, arropada en su escondite, ajena a una ciudad que seguía creciendo sin ningún plan. La construcción de grandes edificios modernos a su alrededor, a comienzos de los años setenta, la aislaron un poco más hasta hacerla casi imperceptible.
            Antiguos vecinos de la calle del Relámpago, como el periodista almeriense Diego García Morell, o el que fuera niño del Hogar del Canario José Terol Ruiz, que pasaron una parte de su infancia en la calle del Relámpago, recuerdan que en la posguerra la vieja torre era un lugar abandonado, al que sólo se podía acceder a través de la azoteas de las casas que la rodeaban. Cuando a finales de los años sesenta la moda de la televisión fue llegando a todos los hogares, los vecinos que habitaban el corralón de la torre aprovecharon la altura de la misma para colgar allí sus antenas y coger la señal con más claridad.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Barrio Alto',
            'latitude' => '36.844426825572754',
            'length' => '-2.454965830677139',
            'name' => 'barrioAlto',
            'information' => 'Sus orígenes fueron cortijadas y pequeñas viviendas que estaban situadas entre pequeñas huertas. Comenzó a desarrollarse a finales de los años 60 en su parte norte, cuando comenzó a constuirse bloques de edificios, actividad que continuó en los años 70. En la década de los 80 muchas familias comenzaron a ocupar el nuevo barrio, que con la ampliación de la Avenida del Mediterráneo tuvo una radical transformación. Se construyeron hoteles, el Centro Comercial Mediterráneo y numerosas zonas verdes y juegos infantiles, atrayendo a familias jóvenes. Además, en 2007 se trasladó el mercadillo de la Avenida del Mediterráneo junto a la Bola Azul los lunes, aumentando la actividad hostelera al sur del barrio. 1​ Actualmente es un barrio con numersoso servicios y establecimientos de todo tipo.',
            'type' => '1',
            //'start_point' => null,
            'radio' => '150',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);
            //36.84797361975952, -2.45446604411782
        DB::table('markers')->insert([
            'title' => 'Avenida Santa Isabel',
            'latitude' => '36.84797361975952',
            'length' => '-2.45446604411782',
            'name' => 'avenidaSantaIsabelInicio',
            'information' => 'Comienza en Calle Sor Policarpa y finaliza en una entrada a Carretera de Ronda ',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);


        DB::table('markers')->insert([
            'title' => 'Barrio de la Caridad',
            'latitude' => '36.84858919011009',
            'length' => '-2.4648717906966375',
            'name' => 'barrioCaridad',
            'information' => 'Amanecía en Almería el 11 de septiembre de 1891. El cielo barruntaba lluvia y vaya que si llovió. La capital soportó una gran tormenta que dejó más de 158 litros de agua y provocó importantes pérdidas humanas y materiales. Pero no solo Almería sufrió aquel día. Adra perdió prácticamente su vega y y la ciudad de Albox quedó totalmente destrozada.
            En la capital varias personas fallecieron por culpa de la riada, otras desparecieron y muchas sufrieron heridas al ser arrastrada por el agua. El periodista Eduardo del Pino lo cuenta en su blog: “La gran tormenta del once de septiembre dejó malheridos a los barrios más humildes, donde las aguas anegaron las calles y el interior de las viviendas”.
            De aquellas riadas que destrozaron edificios y vidas hoy solo queda el recuerdo. Bueno…y algo más. Al margen de los artículos en la prensa local que recuerdan la tragedia, si paseamos por Almería encontramos algunos “homenajes” a lo ocurrido aquel año. Uno de ellos es la pastelería ‘El 11 de Septiembre’, establecimiento que iba a ser inaugurado ese día pero el desastre lo impidió. Sus propietarios decidieron ponerle este nombre para recordar siempre aquella terrible fecha.
            La Caridad Universal
            Otro de los homenajes que quedan en el paisaje de la ciudad es la estatua que saluda a los almerienses en la Avenida Federico García Lorca, en la Plaza de las Velas. Es la ‘Estatua de la Caridad’, una mujer que abraza a un niño, sostiene en brazos a otro y en su mano muestra un pergamino con le fecha ‘1891’. Simboliza a la Caridad Universal.
            Fue la Reina María Cristina la que pidió que se construyera esta estatua y el escultor almeriense Luis Fernández el encargado de elaborarla y cobrar poco más de cinco mil pesetas de la época por ello.
            Al parecer, a sus pies, y oculto entre los sillares, se introdujo un tubo de plomo a modo de ‘cápsula del tiempo’, tal y como cuenta Manuel Artero en La Voz de Almería. En este tubo, además de “un ejemplar de la “Gaceta de Madrid”, del 16 de septiembre de 1891 y unas monedas de plata con el busto de Don Alfonso XIII” también se introdujo un texto que narraba el suceso y explicaba las obras de encauzamiento de la rambla.
            A día de hoy, todavía hay quien deja flores a los pies del monumento cuando llega el mes de septiembre.',
            'type' => '0',
            //'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'title' => 'Alcazaba',
            'latitude' => '36.84004520769246',
            'length' => '-2.4693843764004306',
            'name' => 'alcazaba',
            'information' => 'Mas que un castillo es una ciudadela, una pequeña ciudad amurallada en un espacio alto desde el que domina militarmente la ciudad que se extiende ante ella; es por tanto una acrópolis (ciudad alta en griego) organizada como medina independiente en la que existen incluso arrabales separados entre sí con sus autoridades y normas propias.
             Conforme la investigación documental y arqueológica avanza, se confirma que ya desde época romana el lugar estuvo habitado y poseía estructuras defensivas desde mucho antes que los Omeyas cordobeses (posiblemente Abd al Rahmán III o Al Hakám II) construyeran una fortaleza con guarnición y sede del gobernador (fata) generándose una población de militares y funcionarios, artesanos, obreros, siervos que junto a sus familias van poblando el cerro que se amuralla conforme crece.
             Los almerienses la conocían como Castillo de Jayram (al Qalat Jayram) ya que fue este quien le dio la estructura que básicamente perduró toda la Edad Media hasta que las guerras, la dependencia al reino de Granada y sobre todo los terremotos de los siglos XV y XVI solo nos ha dejado su carcasa de murallas y aún así sin el aspecto original que tuvieron.',
            'type' => '2',
            //'start_point' => null,
            'radio' => '120',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.10',
        ]);
    }
}
