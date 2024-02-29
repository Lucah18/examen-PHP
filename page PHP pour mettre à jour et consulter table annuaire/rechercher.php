<?php
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "examen_base_de_donnee";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);


if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}


function rechercher($nom, $prenom) {
    global $connexion;
    $requete = "SELECT * FROM annuaire WHERE nom LIKE '$nom%' OR prenom LIKE '$prenom%'";
    $resultat = $connexion->query($requete);
    return $resultat->fetch_all(MYSQLI_ASSOC);
}




