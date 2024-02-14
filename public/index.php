<?php

// Chargement des dépendances

// Connexion à la base de donnée

// Si le formulaire a été envoyé
require_once "../config.php";


// On insert dans la table `informations` si valide

// on récupère toutes les entrées de la table
// `informations`
require_once "../controller/routerController.php";

// on charge le template qui affiche la vue
include_once "../view/$route";

// on ferme la connexion 

