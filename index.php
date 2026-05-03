<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/acceuil.css" />
    <title>Acceuil</title>
  </head>
  <body>
    <form
      action="./Reception_Fichier.php"
      method="post"
      enctype="multipart/form-data"
    >
      <label class="label" for="fichier">Ajouter un fichier Json avec cette synthaxe( ex. {"Q1": "...."})</label>

      <input
        type="file"
        name="Fichier"
        id="fichier"
        accept=".json,.csv"
      /><br />
      <button type="submit" id="submit" style="color: white;">START</button>
    </form>
    <p></p>
  </body>
  <script src="./Js/Acceuil.js"></script>
</html>

<!-- http://localhost/quizz/index.php -->
