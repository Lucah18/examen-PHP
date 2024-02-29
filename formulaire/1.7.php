<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texte = $_POST["texte"];

    $texte_formate = nl2br($texte);

    echo "Texte saisi (avec balises <br>):<br>";
    echo $texte_formate;
}
?>
