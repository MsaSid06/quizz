<?php


function ajouter_visite()
{
    $fichier = __DIR__.DIRECTORY_SEPARATOR.'data'. DIRECTORY_SEPARATOR.'visite.txt';
    $compteur = 1 ;
    if (file_exists($fichier)) {
        $compteur = (int) file_get_contents($fichier);
        $compteur++;
    }
    file_put_contents($fichier, $compteur);
}


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
