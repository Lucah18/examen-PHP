<?php
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "examen_base_de_donnee";

function supprimer($id) {
    global $connexion;
    $requete = "DELETE FROM annuaire WHERE id = $id";
    return $connexion->query($requete);
}





