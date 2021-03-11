//Seleccion de los elementos necesarios del html
const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");

// comprobacion del boton Empezar
start_btn.onclick = ()=>{
    info_box.classList.add("activeInfo"); 
}

// Comprobacion del boton Salir
exit_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); 
}

// Comprobacion del boton de continuar
continue_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //Esconder el div de Info
    quiz_box.classList.add("activeQuiz"); //Mostramos la caja de la pregunta
    showQuetions(0); //Lammada a la funcion showQuestions, para mostrar las preguntas
    queCounter(1); //Indice de la pregunta, para saber en cual estamos
    startTimer(30); //Llammamos al contador con los 30 seg
    startTimerLine(0); //Llamada a la linea visual que se enconge con el tiempo
}

let timeValue =  30;//cuenta regresiva
let que_count = 0; // contador preguntas
let que_numb = 1; //contador para el indice de las reguntas
let userScore = 0; // puntuacion del usuario
let counter;
let counterLine;
let widthValue = 0;

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

// Comprobacion del boton, Volver a Empezar
restart_quiz.onclick = ()=>{
    quiz_box.classList.add("activeQuiz"); //show quiz box
    result_box.classList.remove("activeResult"); //hide result box
    timeValue = 30; 
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuetions(que_count); //llamada showQestions function
    queCounter(que_numb); //Pasamos el indice de la pregunta con que_numb 
    clearInterval(counter); //Limpiamos el contador
    clearInterval(counterLine); //Limpiamos la Linea Regresiva
    startTimer(timeValue); //llamada startTimer function
    startTimerLine(widthValue); //llamada startTimerLine function
    timeText.textContent = "Tiempo Restante"; //Cambio del texto de Tiempo Restante
    next_btn.classList.remove("show"); 
}

// Comprobacion del boton de
quit_quiz.onclick = ()=>{
    window.location.reload(); //reload the current window
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

// if Next Que button clicked
next_btn.onclick = ()=>{
    if(que_count < questions.length - 1){ 
        que_count++; //Incrementacion del contador de preguntas
        que_numb++; 
        showQuetions(que_count); //llamada showQestions function
        queCounter(que_numb); 
        clearInterval(counter); //Limpiamos contador 
        clearInterval(counterLine); //Limpiamos linea regresiva 
        startTimer(timeValue); 
        startTimerLine(widthValue); 
        timeText.textContent = "Tiempo Restante"; 
        next_btn.classList.remove("show");
    }else{
        clearInterval(counter); //Limpiamos ocntador
        clearInterval(counterLine); //Limpiamos linea Regresiva
        showResult(); //llamada showResult function
    }
}

// Extraccion de las preguntas y respuestas del array
function showQuetions(index){
    const que_text = document.querySelector(".que_text");

    //Creamos un nevi span, donde colocaremos la pregunta extraida y sus respuestas
    let que_tag = '<span>'+ questions[index].numb + ". " + questions[index].question +'</span>';
    let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[2] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[3] +'</span></div>';
    que_text.innerHTML = que_tag; 
    option_list.innerHTML = option_tag; 
    
    const option = option_list.querySelectorAll(".option");

    // set onclick attribute to all available options
    for(i=0; i < option.length; i++){
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}
// creacion div para los iconos
let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

//if user clicked on option
function optionSelected(answer){
    clearInterval(counter); 
    clearInterval(counterLine); 
    let userAns = answer.textContent; //Obtenemos la opsion seleccionada por el usuario
    let correcAns = questions[que_count].answer; //Obtenemos la recpuesta correcta del aray
    const allOptions = option_list.children.length; //Obetenmos todos las opciones
    
    if(userAns == correcAns){ 
        userScore += 1; 
        answer.classList.add("correct"); 
        answer.insertAdjacentHTML("beforeend", tickIconTag);
        console.log("Respuesta Correcta ");
        console.log("Tu respeusta correcta = " + userScore);
    }else{
        answer.classList.add("incorrect"); 
        answer.insertAdjacentHTML("beforeend", crossIconTag); 
        console.log("Respuesta Erronea");

        for(i=0; i < allOptions; i++){
            if(option_list.children[i].textContent == correcAns){ //if there is an option which is matched to an array answer 
                option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
                console.log("Autoseleccion de la respueta correcta ");
            }
        }
    }
    for(i=0; i < allOptions; i++){
        option_list.children[i].classList.add("disabled"); //unavez selecionada una de las opciones, desactivamos el resto
    }
    next_btn.classList.add("show"); //mostrar boton para pasar de pregunta, una vez selecionada alguna de las opciones
}

function showResult(){
    info_box.classList.remove("activeInfo"); 
    quiz_box.classList.remove("activeQuiz"); 
    result_box.classList.add("activeResult"); 
    const scoreText = result_box.querySelector(".score_text");
    if (userScore > 8){ 
        let scoreTag = '<span>Has acertado <p>'+ userScore +'</p> de <p>'+ questions.length +', enhorabuena 🎉🥳</p></span>';
        scoreText.innerHTML = scoreTag;  //añadimos span en la ventana final con el texto y el resultado
    }
    else if(userScore > 4 && userScore < 8){ 
        let scoreTag = '<span>Has acertado <p>'+ userScore +'</p> de <p>'+ questions.length +', bien hecho 😎</p></span>';
        scoreText.innerHTML = scoreTag;
    }
    else{ // if user scored less than 1
        let scoreTag = '<span>Lo siento, has acertado<p>'+ userScore +'</p> de <p>'+ questions.length +' 😐</p></span>';
        scoreText.innerHTML = scoreTag;
    }
}

function startTimer(time){
    counter = setInterval(timer, 1000);
    function timer(){
        timeCount.textContent = time; 
        time--; 
        if(time < 9){ 
            let addZero = timeCount.textContent; 
            timeCount.textContent = "0" + addZero; 
        }
        if(time < 0){ //if timer is less than 0
            clearInterval(counter); 
            timeText.textContent = "Tiempo Restante";
            const allOptions = option_list.children.length; 
            let correcAns = questions[que_count].answer; 
            for(i=0; i < allOptions; i++){
                if(option_list.children[i].textContent == correcAns){ 
                    option_list.children[i].setAttribute("class", "option correct"); 
                    option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); 
                    console.log("Fin de tiempo, no hay respuesta seleccionada ");
                }
            }
            for(i=0; i < allOptions; i++){
                option_list.children[i].classList.add("disabled"); //unavez selecionada una de las opciones, desactivamos el resto
            }
            next_btn.classList.add("show"); //mostrar boton para pasar de pregunta, una vez selecionada alguna de las opciones
        }
    }
}

function startTimerLine(time){
    counterLine = setInterval(timer, 56);
    function timer(){
        time += 1; 
        time_line.style.width = time + "px"; 
        if(time > 549){ 
            clearInterval(counterLine); 
        }
    }
}

function queCounter(index){
    
    let totalQueCounTag = '<span><p> Pregunta '+ index +'</p> de <p>'+ questions.length +'</p></span>';
    bottom_ques_counter.innerHTML = totalQueCounTag;  
}
