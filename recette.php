<?php
require_once './template/header.php';
require './lib/bddrecipe.php';
require './lib/config.php';
require_once './lib/tools.php';

?>

<?php

$id = (int)$_GET['id'];

        $recipe = getRecipe($bdd, $id);
   ?>
    <?php 
    if($recipe) {
      $ingredients = lineToArray($recipe['ingediants']);
      
    ?>
<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis"><?=$recipe['tiltle'];?></h1>
        <p class="lead"><?=$recipe['description'];?></p>

        <h3>Ingredients</h3>
        
        <ul class="list-group">
          <?php foreach($ingredients as $key=>$ingredient) { ?>
            
          <li class="list-group-item"><?=$ingredient ?></li>

          <?php } ?>
        </ul>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="<?=getRecipeImage($recipe['image']);
           ?>"  width="720">
      </div>
    </div>
         <?php } else { ?>
          <h1 style="text-align: center;">Recette introuvable</h1>
        
        <?php } ?>
 <?php require_once './template/footer.php' ?>
