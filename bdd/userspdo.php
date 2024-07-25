<?php

require_once 'pdo.php';



$id = $_GET['id'];

$query = $bdd->prepare('SELECT * FROM category WHERE id = :id');
$query->execute();
$recipe = $query->fetch();

var_dump($recipe);

