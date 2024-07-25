<?php


$name = 'root';
$pass = 'root';
$host = 'localhost';
$dbname = 'cuisinea';





try {

    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $name, $pass);

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
