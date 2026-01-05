<?php 
// config/config.php
//configuration simple pour le projet php
// Mode de l'application
define('APP_ENV', 'development');
define('APP_DEBUG', true);

// Paramétres de connection à la base de données
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'projet_php');
define('DB_USER', 'root');
define('DB_PASS', 'secret');

// URL de base
define('BASE_URL', 'http://localhost/projet-php/');
 // FONCTION DE DEBUG SIMPLE
 function debug($message){
    if(APP_DEBUG){
        echo "<pre>[DEBUG] " . print($message) . "</pre>";
    }
 }
?>