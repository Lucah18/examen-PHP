<?php
$heure_actuelle = new DateTime();
$heure = $heure_actuelle->format('G');
        if ($heure >= 0 && $heure < 12) {
            $message = "Bon matin";
}       elseif ($heure >= 12 && $heure < 18) {
            $message = "Bonne après-midi";
}       else {
            $message = "Bonsoir";
}

echo "Aujourd'hui, le " . $heure_actuelle->format('d/m/Y') . ", $message !";

