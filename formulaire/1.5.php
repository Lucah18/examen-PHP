<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $sexe = $_GET["sexe"];
    $vins = $_GET["vins"];

    echo "Nom : " . $nom . "<br>";
    echo "Prénom : " . $prenom . "<br>";
    echo "Sexe : " . ($sexe === "M" ? "Masculin" : "Féminin") . "<br>";
    echo "Villes sélectionnées : " . implode(", ", $vins);
}

