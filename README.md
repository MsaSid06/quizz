# Quizz App

## Description

Quiz est une application web simple développée en PHP, JavaScript, HTML et CSS.
Elle est inspirée d’un système de quiz utilisé en classe.

Le principe est basé sur une progression par niveaux :

* Chaque bonne réponse permet de passer au niveau suivant
* Une mauvaise réponse ramène au premier niveau
* Le score est conservé même après une erreur

---

## Fonctionnalités

* Système de quiz dynamique basé sur un fichier JSON
* Progression par niveaux
* Réinitialisation en cas de mauvaise réponse
* Conservation du score
* Interface simple et rapide

---

## Structure du projet

```
quiz/
├── Les fichier .php dont index.php
├── js/
├── css/
├── dossier_fichier/   (stockage du fichiers uploadés)
```

---

## Utilisation

### 1. Upload du fichier JSON

L'application fonctionne uniquement avec un fichier JSON.

### 2. Format du fichier JSON (IMPORTANT)

Les clés doivent obligatoirement respecter ce format :

```
Q1
Q2
Q3
...
```

* "Q" en majuscule
* suivi d’un numéro

### Exemple :

```json
{ 
    "Q1": "Quelle est la capitale du Sénégal ?",
   "Q2": "Quelle est la capitale du Sénégal ?", 
   "Q3": "Quelle est la capitale du Sénégal ?",
    .
    .
    .
    "Q100" : "Question",
}
```

⚠️ Si ce format n’est pas respecté, le fichier ne sera pas pris en compte.

---

## Technologies utilisées

* PHP
* JavaScript
* HTML
* CSS

---

## Installation

1. Héberger le projet sur un serveur PHP (ex: InfinityFree)
2. Placer les fichiers dans le dossier `htdocs`
3. Accéder au projet via le navigateur

---

## Auteur

Moussa SIDIME, Etudiant en 2 eme année GLSI 
Email : [moussasidime10@gmail.com](mailto:moussa_sidjimi@digmail.com)

---

## Remarques

Ce projet a été réalisé dans un cadre d’apprentissage et peut être amélioré (sécurité, UX, gestion des erreurs, etc.).
