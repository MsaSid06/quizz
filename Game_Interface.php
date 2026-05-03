<?php
// require_once "./Traitement.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Game_interface.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Quizz</title>
</head>

<body>
    <div class="principal">

        <div class="time">
            <p class="timer">60</p>
        </div>

        <div class="container">

            <div class="niveau">
                <div class="first level">1</div>
                <div class="2 level">2</div>
                <div class="3 level">3</div>
                <div class="4 level">4</div>
            </div>

            <div class="Interface">
                <p class="Question visible">

                </p>
                <div class="reponse">
                    <button type="button" class="vrai">Vrai</button>
                    <button type="button" class="start">start</button>
                    <button type="button" class="faux">Faux</button>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="./Js/Game_Interface.js"></script>

</html>

<!-- http://localhost/quizz/Game_Interface.php -->