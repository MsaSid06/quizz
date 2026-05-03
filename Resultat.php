<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
    <link rel="stylesheet" href="./CSS/Resultat.css">
</head>
<body>
    <div class="card">
        <div class="trophy">🏆</div>
        <h2>Résultat du Quizz</h2>
        <p class="subtitle">Voici votre performance</p>

        <div class="timer-pill">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <polyline points="12 6 12 12 16 14"/>
            </svg>
            Temps restant : <strong class="reste"></strong>
        </div>

        <div class="etoile">
            <span id="1">★</span>
            <span id="2">★</span>
            <span id="3">★</span>
            <span id="4">★</span>
        </div>

        <div class="score-row">
            <div class="score-box">
                <div class="val nb_etoile"></div>
                <div class="lbl">Étoiles</div>
            </div>
            <div class="score-box">
                <div class="val prc"></div>
                <div class="lbl">Score</div>
            </div>
        </div>

        <div class="action">
            <button type="button" class="btn-primary">▶ Continuer ce Quizz</button>
            <button type="button" class="btn-secondary">⇄ Charger un autre Quizz</button>
            <button type="button" class="btn-secondary">by Msa_Sid :  <a href="https://github.com/MsaSid06/quizz">Github</a></button>
             
        </div>
    </div>

</body>
<script src="./Js/Resultat.js"></script>
</html>
<!-- // http://localhost/quizz/Resultat.php -->