<?php




function getCategories(PDO $bdd, ) {

    $sql = 'SELECT * FROM category ';
    $query = $bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  
  };