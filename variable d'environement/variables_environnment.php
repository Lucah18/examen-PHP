<?php

$server_addr = $_SERVER['SERVER_ADDR'] ?? '';
$http_host = $_SERVER['HTTP_HOST'] ?? '';
$remote_addr = $_SERVER['REMOTE_ADDR'] ?? '';
$http_user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';


$host_by_addr = gethostbyaddr($remote_addr);


$variables_env = [
    'SERVER_ADDR' => ['Signification' => 'Adresse IP du serveur', 'Valeur' => $server_addr],
    'HTTP_HOST' => ['Signification' => "Nom de domaine de l'hôte", 'Valeur' => $http_host],
    'REMOTE_ADDR' => ['Signification' => 'Adresse IP du client', 'Valeur' => $remote_addr],
    'HTTP_USER_AGENT' => ['Signification' => 'User Agent du client', 'Valeur' => $http_user_agent],
    'HOST_BY_ADDR' => ['Signification' => 'Nom d\'hôte correspondant à l\'adresse IP', 'Valeur' => $host_by_addr],
];

// Affichage du tableau
echo "<table border='1'>";
echo "<tr><th>Variable</th><th>Signification</th><th>Valeur</th></tr>";
foreach ($variables_env as $variable => $info) {
    echo "<tr><td>$variable</td><td>{$info['Signification']}</td><td>{$info['Valeur']}</td></tr>";
}
echo "</table>";

phpinfo(INFO_ENVIRONMENT);

