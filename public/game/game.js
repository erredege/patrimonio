var quiz = {
    // (A) PROPERTIES 
     // (A1) QUESTIONS & ANSWERS
     // Q = QUESTION, O = OPTIONS, A = CORRECT ANSWER
     data: [
     {
       q : "¿Por qué se denomina Camino Cruz de Caravaca?",
       o : [
         "A)Rememora la Reconquista de los Reyes Católicos en 1479 y la rendición de El Zagal",
         "B)Rememora la Reconquista de los Reyes Católicos en 1489 y la rendición de El Zagal",
         "C)Rememora la Conquista del Califa",
         "D)La rendición de El Zagal"
       ],
       a : 1 //Answer
     },
     {
       q : "¿Por qué se construyeron las tres minas que hay en la Molineta?",
       o : [
         "A)",
         "B)",
         "C)",
         "D)Se utilizaban como galerías para conducir y comunicar el agua entre las balsas principales y auxiliares que regulaban el agua"
       ],
       a : 3
     },
     {
       q : "¿Por qué se conoce con el nombre de “Las Casitas de Papel” a las casas de planta baja de las calles con nombres de planetas situadas en la Avenida Santa Isabel?",
       o : [
         "A)",
         "B)",
         "C)Fueron construidas en 1948 para solucionar la escasez de viviendas,reduciendo la calidad de los materiales",
         "D)"
       ],
       a : 2
     },
     {
       q : "¿Por qué se conoce al Barrio de la Caridad con ese nombre?",
       o : [
         "A)Porque fue construido gracias a la humanidad de la Reina Regente María Cristina tras la inundación de 1891",
         "B)Porque fue construido gracias a la humanidad de la Reina Regente María Cristina tras la inundación de 1871",
         "C)Porque fue construido gracias a la humanidad de la Reina Regente María Cristina tras la inundación de 1881",
         "D)Porque fue construido gracias a la humanidad de la Reina Regente María Cristina tras la inundación de 1892"
       ],
       a : 0
     },
     {
       q : "¿Por qué se construyó la Plaza de Toros actual?",
       o : [
         "A)Almería no tenía plaza de toros y las corridas se celebraban en la Plaza de la Constitución",
         "B)La plaza de toros en aquél entonces no tenia suficiente espacio para los espectadores de la epoca",
         "C)",
         "D)"
       ],
       a : 0
     },
     {
      q : "¿Por qué se promovió la construcción de las casas puerta-ventana en la zona del Barrio Alto?",
      o : [
        "A)Se construyeron a mediados del siglo XIX",
        "B)eran las construcciones típicas de los barrios de la clase trabajadora",
        "C)Destacaban porque todas tenían en sus fachadas una puerta y una ventana de grandes proporciones",
        "D)Todas son correctas"
      ],
      a : 3
    },
    {
      q : "¿ Por qué se construye la Torre de los Perdigones?",
      o : [
        "A)Era una antigua fábrica de municiones",
        "B)Fue llamada asi por los daños que recibio en la Guerra Civil",
        "C)En la parte superior se encontraba el horno en el que se fundía el plomo, que después se cribaba hasta conseguir los perdigones de distinto calibre.",
        "D)A y C son correctas"
      ],
      a : 3
    },
    {
      q : "¿Por qué y qué rememora la Purísima situada en el pedestal en la Plaza de San Sebastian?",
      o : [
        "A)",
        "B)Hay un sencillo monumento a la Inmaculada Concepción, en honor a la Patrona de España, levantado en 1800",
        "C)",
        "D)"
      ],
      a :1 
    },
    {
      q : "¿Cual es el otro nombre de la Casa de las Mariposas?",
      o : [
        "A)Edificio Puerta Puchena ",
        "B)Edificio Góngora",
        "C)La Casa Rapallo",
        "D)La Casa del Alcalde"
      ],
      a :2 
    },
    {
      q : "¿Por qué la gente bebe del Cañillo situado en la Puerta Purchena?",
      o : [
        "A)La gente bebía del cañillo porque era lugar de paso para cualquier persona que pasease por el centro de la ciudad.",
        "B)Su agua era muy fresca durante todo el año, porque la tomaba de las tuberías que provenían  de las Fuentes de Alhadra",
        "C)Ambas son correctas",
        "D)Ninguna de las anteriores son correctas"
      ],
      a :2 
    }
     ],
   
     // (A2) HTML ELEMENTS
     hWrap: null, // HTML quiz container
     hQn: null, // HTML question wrapper
     hAns: null, // HTML answers wrapper
    
     // (A3) GAME FLAGS
     now: 0, // current question
     score: 0, // current score
    
     // (B) INIT QUIZ HTML
     init: function(){
       // (B1) WRAPPER
       quiz.hwrap = document.getElementById("quizWrap");
       
       // (B2) QUESTIONS SECTION
       quiz.hqn = document.createElement("div");
       quiz.hqn.id = "quizQn";
       quiz.hwrap.appendChild(quiz.hqn);
       
       // (B3) ANSWERS SECTION
       quiz.hans = document.createElement("div");
       quiz.hans.id = "quizAns";
       quiz.hwrap.appendChild(quiz.hans);
       
       // (B4) GO!
       quiz.draw();
     },
   
     // (C) DRAW QUESTION
     draw: function(){
       // (C1) QUESTION
       quiz.hqn.innerHTML = quiz.data[quiz.now].q;
       
       // (C2) OPTIONS
       quiz.hans.innerHTML = "";
       for (let i in quiz.data[quiz.now].o) {
         let radio = document.createElement("input");
         radio.type = "radio";
         radio.name = "quiz";
         radio.id = "quizo" + i;
         quiz.hans.appendChild(radio);
         let label = document.createElement("label");
         label.innerHTML = quiz.data[quiz.now].o[i];
         label.setAttribute("for", "quizo" + i);
         label.dataset.idx = i;
         label.addEventListener("click", quiz.select);
         quiz.hans.appendChild(label);
       }
     },
     
     // (D) OPTION SELECTED
     select: function(){
       // (D1) DETACH ALL ONCLICK
       let all = quiz.hAns.getElementsByTagName("label");
       for (let label of all) {
         label.removeEventListener("click", quiz.select);
       }
    
       // (D2) CHECK IF CORRECT
       let correct = this.dataset.idx == quiz.data[quiz.now].a;
       if (correct) { 
         quiz.score++; 
         this.classList.add("Correcto");
       } else {
         this.classList.add("Erroneo");
       }
       // (D3) NEXT QUESTION OR END GAME
       quiz.now++;
       setTimeout(function(){
         if (quiz.now < quiz.data.length) { quiz.draw(); } 
         else {
           quiz.hQn.innerHTML = `Has contestado ${quiz.score} de ${quiz.data.length} correctamente.`;
           quiz.hAns.innerHTML = "";
         }
       }, 1000);
     }
   };
   window.addEventListener("load", quiz.init);