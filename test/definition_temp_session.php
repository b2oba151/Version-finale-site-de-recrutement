<?php
// Définir la durée de vie du cookie de session à 30 minutes
$cookie_lifetime = 1800; // 30 minutes en secondes
session_set_cookie_params($cookie_lifetime);

// Démarrer la session
session_start();
?>
