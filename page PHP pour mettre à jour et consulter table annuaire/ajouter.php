<?php
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "examen_base_de_donnee";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);
function ajouter($nom, $prenom, $numeroPoste) {
    global $connexion;
    $requete = "INSERT INTO annuaire (nom, prenom, numero_poste) VALUES ('$nom', '$prenom', '$numeroPoste')";
    return $connexion->query($requete);
}

?>
