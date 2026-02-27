<?php
$host = 'localhost';
$user = 'root';
$password = ''; // ou ton mot de passe MySQL
$dbname = 'bidouille_info';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
} catch (PDOException $e) {
    die("Erreur connexion : " . $e->getMessage());
}
?>;