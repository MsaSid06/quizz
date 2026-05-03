<?php

// require_once "./function.php";
// file_exists()
/**
 * extraire puis decoder le contenu d'un json
 */
function extraire()
{
    $fichier = file_get_contents("./dossier_Fichier/Quizz.json", true);
    $reponse = json_decode($fichier, true);

    $id = 'Q';
    $rand = random_int(1, count($reponse));
    $id .= $rand;

    return $reponse[$id];
}



// echo $Questions[$fil];


// http://localhost/quizz/Traitement.php

// if (isset($_POST["fonction"])) {
//     switch ($_POST["fonction"]) {
//         case 'extraire':
header('Content-Type: application/json');
echo json_encode(extraire());
//             break;

//         default:
//             # code...
//             break;
//     }
// }
