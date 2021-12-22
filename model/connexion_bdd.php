<?php

$host = 'localhost';
$dbname = 'Romain_banque';
$user = 'BanquePHP';
$password = 'banque76';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (Exception $e) {
    echo 'Erreur lors de la connexion'.$e->getMessage();
    die();
}
