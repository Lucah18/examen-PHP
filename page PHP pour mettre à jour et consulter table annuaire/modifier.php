<?php
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "examen_base_de_donnee";

function modifierNumeroPoste($id, $nouveauNumeroPoste) {
    global $connexion;
    $requete = "UPDATE annuaire SET numero_poste = '$nouveauNumeroPoste' WHERE id = $id";
    return $connexion->query($requete);
}






