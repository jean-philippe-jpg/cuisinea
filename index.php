
    <?php require_once 'template/header.php';
           require 'lib./bddrecipe.php';

    $recipes = getRecipesAll($bdd);
    ?>


      
     
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="./assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400"  loading="lazy">
    </div>

    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea- recettes de cuisine</h1>
      <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="recettes.php" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</a>
       
      </div>
    </div>
  </div>

  <div class="row">
  <?php  

    $recipes = getRecipesAll($bdd, HOME_RECIPE_LIMIT);
  foreach($recipes as $key => $recipe) {

    include 'template/recipe_partial.php';
  }
  ?>
   </div>
  <?php
          require './lib/bddrecipe.php';
          require 'recettes.php';   
           require_once './template/footer.php' ?>

   

    

 
    
   
    
