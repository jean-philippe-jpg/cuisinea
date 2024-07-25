<div class="col-md-4">
 <div class="card" >
 <img src="<?= getRecipeImage($recipe['image'])  ?>" class="card-img-top" >
 <div class="card-body">
   <h1 class="card-title"><?php echo $recipe['tiltle'] ?></h1>
   <p class="card-text"><?php echo $recipe['description'] ?></p>
   <a href="recette.php?id=<?=$recipe['id']?>" class="btn btn-primary">Voir</a>
 </div>
</div>
 </div> 