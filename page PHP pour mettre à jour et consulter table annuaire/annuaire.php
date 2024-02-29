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


function ajouter($nom, $prenom, $numeroPoste) {
    global $connexion;
    $requete = "INSERT INTO annuaire (nom, prenom, numero_poste) VALUES ('$nom', '$prenom', '$numeroPoste')";
    return $connexion->query($requete);
}


function modifierNumeroPoste($id, $nouveauNumeroPoste) {
    global $connexion;
    $requete = "UPDATE annuaire SET numero_poste = '$nouveauNumeroPoste' WHERE id = $id";
    return $connexion->query($requete);
}


function supprimer($id) {
    global $connexion;
    $requete = "DELETE FROM annuaire WHERE id = $id";
    return $connexion->query($requete);
}


