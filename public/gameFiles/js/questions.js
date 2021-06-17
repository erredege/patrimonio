// creating an array and passing the number, questions, options, and answers
let questions = [{
        numb: 1,
        question: "¿Por qué se denomina Camino Cruz de Caravaca?",
        answer: "C)Lugar donde los Reyes Católicos en 1489 El Zagal aceptaron la capitulacion del reino de Almeria",
        options: [
            "A)Rememora la Reconquista de los Reyes Católicos en 1489 y la rendición de El Zagal",
            "B)Rememora la Reconquista de los Reyes Católicos en 1479 y la rendición de El Zagal",
            "C)Lugar donde los Reyes Católicos en 1489 El Zagal aceptaron la capitulacion del reino de Almeria",
            "D)La rendición de El Zagal"
        ]
    },
    {
        numb: 2,
        question: "¿Por qué se construyeron las tres minas que hay en la Molineta?",
        answer: "A)Se utilizaban como galerías para conducir y comunicar el agua entre las balsas principales y auxiliares que regulaban el agua procedente del canal de San Indalecio",
        options: [
            "A)Se utilizaban como galerías para conducir y comunicar el agua entre las balsas principales y auxiliares que regulaban el agua procedente del canal de San Indalecio",
            "B)Como canal para evacuar al mar el execente de agua en epoca de lluvia",
            "C)Como abrevadero para los ganaderos",
            "D)Ninguna de las anteriores"
        ]
    },
    {
        numb: 3,
        question: "¿Por qué se conoce con el nombre de “Las Casitas de Papel” a las casas de planta baja de las calles con nombres de planetas situadas en la Avenida Santa Isabel?",
        answer: "A)Fueron construidas en 1948 para solucionar la escasez de viviendas,reduciendo la calidad de los materiales, para el abaratamiento de las mismas",
        options: [
            "A)Fueron construidas en 1948 para solucionar la escasez de viviendas,reduciendo la calidad de los materiales, para el abaratamiento de las mismas",
            "B)Fueron construidas en 1948 para solucionar la escasez de viviendas,en donde el material primo era el papel para las paredes internas",
            "C)Ambas son ciertas",
            "D)Ninguna de las anterirores"
        ]
    },
    {
        numb: 4,
        question: "¿Por qué se conoce al Barrio de la Caridad con ese nombre?",
        answer: "C)Porque fue construido gracias a la cuestacion caritativa llevada a cabop por de la Reina Regente María Cristina de Hasburgo y Lorena tras la inundación de 1891",
        options: [
            "A)Porque fue construido gracias a la humanidad de la Reina Regente María Cristina tras la inundación de 1892",
            "B)Porque fue construido gracias a la humanidad de la Reina Regente María Cristina tras la inundación de 1871",
            "C)Porque fue construido gracias a la cuestacion caritativa llevada a cabop por de la Reina Regente María Cristina de Hasburgo y Lorena tras la inundación de 1891",
            "D)Porque fue construido gracias a la humanidad de la Reina Regente María Cristina tras la inundación de 1881"
        ]
    },
    {
        numb: 5,
        question: "¿Por qué se promovió la construcción de las casas puerta-ventana en la zona del Barrio Alto?",
        answer: "D)Todas son correctas",
        options: [
            "A)Se construyeron a mediados del siglo XIX",
            "B)Eran las construcciones típicas de los barrios de la clase trabajadora",
            "C)Destacaban porque todas tenían en sus fachadas una puerta y una ventana y una distribucion similar en el interior",
            "D)Todas son correctas"
        ]
    },
    {
        numb: 6,
        question: "¿Por qué se construye la Torre de los Perdigones?",
        answer: "D)A y C son correctas",
        options: [
            "A)Era una antigua fábrica de municiones",
            "B)Fue llamada así por los daños que recibio en la Guerra Civil",
            "C)En la parte superior se encontraba el horno en el que se fundía el plomo, que después se cribaba hasta conseguir los perdigones de distinto calibre",
            "D)A y C son correctas"
        ]
    },
    {
        numb: 7,
        question: "¿Cual es el otro nombre de la Casa de las Mariposas?",
        answer: "C)La Casa Rapallo",
        options: [
            "A)Edificio Puerta Puchena",
            "B)Edificio Góngora",
            "C)La Casa Rapallo",
            "D)La Casa del Alcalde"
        ]
    },
    {
        numb: 8,
        question: "¿Por qué la gente bebe del Cañillo situado en la Puerta Purchena?",
        answer: "C)Ambas son correctas",
        options: [
            "A)La gente bebía del cañillo porque era lugar de paso para cualquier persona que pasease por el centro de la ciudad",
            "B)Su agua era muy fresca durante todo el año, porque la tomaba de las tuberías que provenían  de las Fuentes de Alhadra",
            "C)Ambas son correctas",
            "D)Ninguna de las anteriores son correctas"
        ]
    },
    {
        numb: 9,
        question: "¿Por qué el edificio del Instituto del Celia Viñas tiene esa forma tan peculiar?",
        answer: "A)Fue construido sobre unos solares expropiados que tenian una formacion irregular debido a la canalización de la rambla",
        options: [
            "A)Fue construido sobre unos solares expropiados que tenian una formacion irregular debido a la canalización de la rambla",
            "B)Fue construido sobre un solar dedicado al almacenamiento de munición en la guerra civil",
            "C)Fue contruido sobre un campo de entrenamiento",
            "D)Fue construido sobre el espacio rotulado adrede para un proyecto que ya se tenia diseñado"
        ]
    },
    {
        numb: 10,
        question: "¿Qué había en la Plaza Juan Casinello antes de ser la Plaza del Educador?",
        answer: "B)El llamado Quiosco de la Musica",
        options: [
            "A)Parada de coches",
            "B)El llamado Quiosco de la Musica",
            "C)Parada para los transeuntes del paseo",
            "D)Un solar sin construccion alguna"
        ]
    },
    {
        numb: 11,
        question: "¿Qué había en la Plaza Juan Casinello antes de ser la Plaza del Educador?",
        answer: "C) Era la parada oficial de carruajes de tracción animal destinados a transporte publico",
        options: [
            "A) Lugar destinado a la compra-venta de ganado equino",
            "B) En ella habia un gran establo publico",
            "C) Era la parada oficial de carruajes de tracción animal destinados a transporte publico",
            "D) La gente que queria desprenderse de caballos, mulos, burros, etc., los llevaba allí."
        ]
    },
    {
        numb: 12,
        question: "¿Por qué y para qué se construye el Cable Inglés?",
        answer: "D) Para permitir que el la extracciones de las cuencas mineras de la provincia, fuesen cargadas con faciliadad en barcos para su transporte.",
        options: [
            "A) Para que los bañistas de la playa de la Almadrabillas practicaran salto de trampolin.",
            "B) Para facilitar la salida de los pasajeros de los buques de gran calado.",
            "C) Para embellecer la ciudad y facilitar la carga de uvas de Ohanes.",
            "D) Para permitir que el la extracciones de las cuencas mineras de la provincia, fuesen cargadas con faciliadad en barcos para su transporte."
        ]
    },
    {
        numb: 13,
        question: "¿Por qué las casas del barrio de Ciudad Jardín tenían un color rojizo?",
        answer: "B) Cuando azotaba el viento de poniente y se realizaban trabajos en el cargadero de mineral, el polvo rojizo se adheria a las fachadas de las casas.",
        options: [
            "A) Era el color de moda de la epoca",
            "B) Cuando azotaba el viento de poniente y se realizaban trabajos en el cargadero de mineral, el polvo rojizo se adheria a las fachadas de las casas.",
            "C) Un bando municipal obligó a los propietarios de la casas de la zona, a darle esa tonalidad a las fachadas",
            "D) Son ciertas la A y C"
        ]
    },
    {
        numb: 14,
        question: "¿Por qué se llamaba a la Plaza Vieja de las Cañas?",
        answer: "B) En ella se realizaban juegos similares a justas medievales pero se ultilizaban cañas en vez de lanzas",
        options: [
            "A) Debe su nombre al gran cañaveral que habia en el lugar alimentado por el arroyo que venia del valle de la Hoya.",
            "B) En ella se realizaban juegos similares a justas medievales pero se ultilizaban cañas en vez de lanzas",
            "C) La plaza en sus origenes estaba sodeada de una empalizada realizada con cañas ante la escasez de madera.",
            "D) Son todas incorrectas."
        ]
    },
    {
        numb: 15,
        question: "¿Qué simbolizan las estatuas que presiden la entrada del Mercado de Abastos?",
        answer: "A) Simboliza a la diosa romana 'Abundia' diosa de la abundancia y la fertilidad. ",
        options: [
            "A) Simboliza a la diosa romana 'Abundia' diosa de la abundancia y la fertilidad. ",
            "B) Es un adorno sin un significado definido.",
            "C) Es la estatua de la mujer mas bella de la Almeria de la epoca.",
            "D) es la estatua de la esposa de Trinidad Cuartara, arquitecto que diseño el mercado de abastos."
        ]
    },
    {
        numb: 16,
        question: "¿Por qué la Escuela de Artes tiene forma de Claustro?",
        answer: "B) El edificio era la sede del claustro del antiguo convento de los Dominicos.",
        options: [
            "A) Facilita que el claustro de profesores se pueda reunir.",
            "B) El edificio era la sede del claustro del antiguo convento de los Dominicos.",
            "C) El edificio no tiene forma de claustro propiamente dicho.",
            "D) Son correctas la A y la B"
        ]
    },
    {
        numb: 17,
        question: "¿Por qué se traslada de la Puerta Purchena a la Plaza Vieja el ¨Pingurucho?",
        answer: "A) Razones urbanísticas y la modificación del hoy paseo de Almeria, hizo que Trinidad Cuartara dirigiera en 1900 el traslado del monumento.",
        options: [
            "A) Razones urbanísticas y la modificación del hoy paseo de Almeria, hizo que Trinidad Cuartara dirigiera en 1900 el traslado del monumento.",
            "B) El traslado fue realizado por razones estéticas exclusivamente",
            "C) Razones urbanísticas, hicieron que Enrique Lopez Rull dirigiera en 1890 el traslado del monumento.",
            "D) Razones urbanísticas, hicieron que Enrique Lopez Rull y Trinidad Cuartara dirigieran en 1890 el traslado del monumento."
        ]
    },
    {
        numb: 18,
        question: "¿Por qué se destruye el 'Pingurucho' original de la Plaza Vieja?",
        answer: "D) Ante la visita en 1943 de Franco el ayuntamiento decide derribarlo. ",
        options: [
            "A) Ante la imposibilidad de mantener su mantenimiento.",
            "B) Por razones estéticas ya que por el paso del tiempo se puso muy feo.",
            "C) Un rayo lo derribó.",
            "D) Ante la visita en 1943 de Franco el ayuntamiento decide derribarlo. "
        ]
    },
    {
        numb: 19,
        question: "¿Por qué se construyó la Plaza de Toros actual?",
        answer: "C) Porque la anterior sita en la zona de la calle Gordito actual se había quedado pequeña por el aumento de la población.",
        options: [
            "A) Porque la anterior sita en la zona de la calle Gordito actual era muy fea.",
            "B) Porque la anterior sita en la zona de la calle Gordito actual fue derribada por un terremoto.",
            "C) Porque la anterior sita en la zona de la calle Gordito actual se había quedado pequeña por el aumento de la población.",
            "D) Porque la anterior sita en la zona de la calle Gordito actual sufría aluminosis."
        ]
    },
    {
        numb: 20,
        question: "¿Por qué las mujeres iban a lavar cerca de la Plaza del Quemadero?",
        answer: "D) La respuesta A y B son correctas.",
        options: [
            "A) Hasta principios del siglo XX no todas las casas disponían de agua corriente.",
            "B) En el Camino de Marin había un lavadero llamado los pilones de Rosica.",
            "C) Porque en esa zona la ropa se secaba rápidamente.",
            "D) La respuesta A y B son correctas."
        ]
    },
    {
        numb: 21,
        question: "¿Por qué se llama La Escalera de Isabel II a la escalera situada al final del Puerto de Almería?",
        answer: "C) Debido a estado del puerto y el barco en el que viajaba la reina Isabel, se consideró oportuno construir un apeadero apropiado que se conoce como escalera de Isabel II.",
        options: [
            "A) Como homenaje a Isabel II.",
            "B) Debido a estado del puerto y el barco en el que viajaba la reina Isabel, se consideró oportuno construir un apeadero apropiado que se conoce como escalera de Isabel I.",
            "C) Debido a estado del puerto y el barco en el que viajaba la reina Isabel, se consideró oportuno construir un apeadero apropiado que se conoce como escalera de Isabel II.",
            "D) Porque si no, la reina, tendría que haber sido bajada del barco en bote."
        ]
    },
    {
        numb: 22,
        question: "¿Quién habitaba el Museo Doña Paquita?",
        answer: "A) En principio Don José González Montoya y, su mujer,  Doña Francisca Díaz Torres hasta 1975 que muere Don José, posteriormente Doña Francisca hasta su muerte en 2014.",
        options: [
            "A) En principio Don José González Montoya y, su mujer,  Doña Francisca Díaz Torres hasta 1975 que muere Don José, posteriormente Doña Francisca hasta su muerte en 2014.",
            "B) Don José Montoya González, de ahí lo de la casa Montoya, y su mujer Doña Francisca Díaz Torres.",
            "C) Ahí vivió hasta su muerte Guillermo Langle Rubio y su colega Antonio González Egea.",
            "D) Don José Montoya González y, su mujer,  Doña Francisca Díaz Torres hasta 1975 que muere Don José."
        ]
    },
    {
        numb: 23,
        question: "¿Por qué en la muralla divisoria del primer recinto con el segundo recinto de la Alcazaba se instaló una campana llamada la Campana de la Torre de la Vela?",
        answer: "A) La C y la D son correctas.",
        options: [
            "A) La C y la D son correctas.",
            "B) Para avisar del inicio de misa en la ermita de San Juan de la Alcazaba. ",
            "C) El campanario fue construido por Carlos III para el anunciar a toda la población de eventos peligrosos.",
            "D) Para avisar a la población de las horas de riego, toques de queda, llegada de tormentas, etc."
        ]
    },
    {
        numb: 24,
        question: "¿Por qué se construyó la Cueva de la Campsa?",
        answer: "C) Tras la destrucción de los depósitos sitos en el puerto por los bombardeos en 1937, se decidió su construcción para almacenar el combustible en bidones.",
        options: [
            "A) Por los continuos robos que sufrían los depósitos de combustible en su anterior ubicación.",
            "B) Para que el combustible no se evaporase.",
            "C) Tras la destrucción de los depósitos sitos en el puerto por los bombardeos en 1937, se decidió su construcción para almacenar el combustible en bidones.",
            "D) Porque el microclima que se crea en la cueva es ideal para la conservación del combustible."
        ]
    },
    {
        numb: 25,
        question: "¿Por qué se construyeron las Torres de Piedra situadas detrás de la Casa del Mar?",
        answer: "D) Todas las respuestas anteriores son correctas.",
        options: [
            "A) Se trata de las chimeneas de la función de Heredia.",
            "B) Se trata de las chimeneas de la fundición de plomo Santo Tomas.",
            "C) Son chimeneas que palian la toxicidad de las emanaciones pumblicas de la fundición",
            "D) Todas las respuestas anteriores son correctas."
        ]
    },
    {
        numb: 26,
        question: "¿Por qué los lucernarios de las casas antiguas de Almería están construidas con esa forma?",
        answer: "B) Contribuyen a mejorar la luminosidad y la temperatura de la casa.",
        options: [
            "A) Realzan la estética del perfil de la casa.",
            "B) Contribuyen a mejorar la luminosidad y la temperatura de la casa.",
            "C) Permiten la entrada de Luz en los sótanos de las casas.",
            "D) Se pusieron de moda y los arquitectos las incluían en sus diseños."
        ]
    },
    {
        numb: 27,
        question: "Antes de haber una ermita en el Cerro San Cristóbal existía otra edificación ¿cuál era su porqué?",
        answer: "D) El llamado Fuerte de San Cristóbal.",
        options: [
            "A) No había nada.",
            "B) Una estatua de San Cristóbal muy venerada por el pueblo de Almería.",
            "C) Una Ermita que fue destruida por el terremoto de 1522.",
            "D) El llamado Fuerte de San Cristóbal."
        ]
    },
    {
        numb: 28,
        question: "¿Por qué la lápida aparecida en el dintel de la puerta del Ayuntamiento tiene el lateral izquierdo cincelado?",
        answer: "A) Probablemente habría algún símbolo que un régimen posterior decidío eliminar.",
        options: [
            "A) Probablemente habría algún símbolo que un régimen posterior decidío eliminar.",
            "B) Fue eliminado accidentalmente.",
            "C) No está cincelado, al levantarse el recubrimiento fue destruido.",
            "D) No le gustaba a un alcalde que hubo y mandó cincelarlo."
        ]
    },
    {
        numb: 29,
        question: "¿Por qué el escudo del Salón de Actos del IES Celia Viñas tiene unos de los blasones cincelados?",
        answer: "C) Las alusiones monárquicas del blasón en cuestión, hizo que fuese cincelado a la par de la sustitución de la corona monárquica por la republicana.",
        options: [
            "A) No hay ningún blasón cincelado, solo fue sustituida la corona inicial.",
            "B) Estéticamente ese blasón no quedaba bien.",
            "C) Las alusiones monárquicas del blasón en cuestión, hizo que fuese cincelado a la par de la sustitución de la corona monárquica por la republicana.",
            "D) Heráldicamente constituía un error en la composición del escudo."
        ]
    },
    {
        numb: 30,
        question: "¿Por qué en los Refugios de la Guerra Civil de Almería en los distintos corredores que hay se aprecian muros trasversales a izquierda y derecha regularmente distribuidos?",
        answer: "B) Con el fin de evitar avalanchas y minimizar una posible deflagración interna que pudiese producirse.",
        options: [
            "A) Para que los niños durante los bombardeos pudiesen jugar al escondite.",
            "B) Con el fin de evitar avalanchas y minimizar una posible deflagración interna que pudiese producirse.",
            "C) Son elementos de sostén de la galería.",
            "D) Para que los refugiados pudiesen apoyarse."
        ]
    },
];