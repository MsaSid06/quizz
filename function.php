<?php


// file_exists()
/**
 * extraire puis decoder le contenu d'un json
 */
function extraire()
{
    $fichier = file_get_contents("./dossier_Fichier/Quizz.json", true);
    $reponse = json_decode($fichier, true);
    return $reponse;
}

// $Questions = extraire();

/**
 * Generer un index aleatoire ex Q1,Q2...
 */
function index_aleatoire(int $taille)
{
    $id = 'Q';
    $rand = random_int(1, $taille);
    $id .= $rand;

    return $id;
}

function question(array $tab, string $index)
{
    return $tab[$index];
}


// http://localhost/quizz/Traitement.php
