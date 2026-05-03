<?php

// $destination  = __DIR__ . "\\dossier_Fichier\\Quizz.json" ;
$destination  = __DIR__ . "/dossier_Fichier/Quizz.json" ;
// var_dump($_FILES);
if (!empty($_FILES['Fichier']["name"])) {
    if (verifier_Type_fichier()) {
        $nomFichier = $_FILES['Fichier']['name'];
        try {
            move_uploaded_file($_FILES['Fichier']['tmp_name'], $destination);
            header("Location: ./Game_Interface.php");
            exit;
        } catch (Exception $th) {
            echo $th;
        }
    } else {
        die("Type de fichier inccorect, .json  seul est accepte !!");
    }
} else {
    header("Location: /quizz/index.php");
    exit;
    // echo "veuillez uploader un fichier";
}

function verifier_Type_fichier()
{

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $type = $finfo->file($_FILES['Fichier']['tmp_name']);


    $types_autorises = ['application/json'];
    if (in_array($type, $types_autorises)) {
        return true;
    } else {
        return false;
    }
}
