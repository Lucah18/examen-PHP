<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $sexe = $_POST["sexe"];
        $vins = $_POST["vins"];

        
        echo "Nom : " . $nom . "<br>";
        echo "Prénom : " . $prenom . "<br>";
        echo "Sexe : " . ($sexe === "M" ? "Masculin" : "Féminin") . "<br>";
        echo "Villes sélectionnées : " . implode(", ", $vins);
    } else {
        echo '<h1>Formulaire d\'inscription</h1>
        <form action="1.6.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br><br>

            <label for="sexe">Sexe :</label>
            <select id="sexe" name="sexe">
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select><br>

            <label for="vins">Ville :</label><br>
            <select id="vins" name="vins[]" multiple>
                <option value="Tana">Antananarivo</option>
                <option value="Antsirabe">Antsirabe</option>
                <option value="Tamatave">Toamasina</option>
            </select><br>

            <input type="hidden" name="submitted" value="true">
            <input type="submit" value="Envoyer">
        </form>';
    }
    ?>
</body>
</html>
