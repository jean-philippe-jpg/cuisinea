
 
<?php
require_once './template/header.php';
require_once './lib/bddrecipe.php';

?>
<div class="row">

  
<?php
   $recipes = getRecipesAll($bdd);

foreach($recipes as $key => $recipe) {
  include 'template/recipe_partial.php';

 } ?>
  </div>

 <?php require_once './template/footer.php';
 
 

 
 ?>
