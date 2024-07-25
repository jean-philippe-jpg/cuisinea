<?php
require_once ('template/header.php');
require_once ('lib/bddrecipe.php');
require_once ('lib/tools.php');
//require_once ('lib/config.php');

     if(isset($_POST['saveRecipe'])) {
        $res =  saveRecipes($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instruction'],NULL);
        var_dump($res);
} 

?>
    <h1 style="text-align: center;">Ajouter une recette</h1>

    <form style="text-align: center; width:30vw; margin-left:40vw; " method="POST" enctype="multipart/form-data">
        <div  class="mb-3">
            <label for="title" class="form-label">titre</label>
            <input style="border:2px solid purple;" type="text" name="title"  id="title" class="form-control">
        </div>
         <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea style="border:2px solid purple;" name="description" id="description" cols="15" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label">ingredients</label>
            <textarea style="border:2px solid purple;" name="ingredients" id="ingredients" cols="15" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="instruction" class="form-label">insctruction</label>
            <textarea style="border:2px solid purple;" name="instruction" id="instruction" cols="15" rows="5" class="form-control"></textarea>
        </div>
        <div   class="mb-3">
            <label for="category" class="form-label">titre</label>
            <select style="border:2px solid purple;" name="category" id="category" class="form-control">
                <option value="1">entree</option>
                <option value="2">plat</option>
                <option value="3">dessert</option>
        </div>
         <div class="mb-3">
            <label for="file" class="form-label">image</label>
             <input type="file" name="file" id="file">
        </div>
       <input type="submit" value="enregistrer" name="saveRecipe" class="btn btn-primary">
      

    </form>


<?php

require_once 'template/footer.php';
?>