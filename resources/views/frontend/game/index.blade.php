<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ url('game/game.css') }}">
        <script src="{{ url('game/game.js') }}" ></script>
    <title>Juego de los Por Qué</title>
</head>
<body>
    <div id="quizWrap">
        <!-- QUESTION -->
        <div id="quizQn">QUESTION HERE</div>
       
        <!-- ANSWER -->
        <div id="quizAns">
          <input type="radio" name="quiz" id="quizo0">
          <label for="quizo0" data-idx="0">OPTION 1</label>
      
          <input type="radio" name="quiz" id="quizo1">
          <label for="quizo1" data-idx="1">OPTION 2</label>
        </div>
      </div>
</body>
</html>