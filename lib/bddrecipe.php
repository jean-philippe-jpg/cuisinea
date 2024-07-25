

<?php
        function getRecipe(PDO $bdd, int $id) {

          $query = $bdd->prepare('SELECT * FROM recipe WHERE id = :id');
          $query->bindParam(':id', $id);
              $query->execute();
              return $query->fetch();

        };

        function getRecipeImage(string|null $image ) {

            if($image === null){
            
              return IMAGE_ASSET.'logo-cuisinea.jpg';
          
            } else {
          
              return  IMAGE.$image ;
            }  
      };


          function getRecipesAll(PDO $bdd, int $limit = null) {

            $sql = 'SELECT * FROM recipe ORDER by RAND() DESC';

            if($limit) {
              $sql .= ' LIMIT :limit';
            }
            $query = $bdd->prepare($sql);

            if($limit) {
              $query->bindParam(':limit', $limit, PDO::PARAM_INT);
            }
            $query->execute();
            return $query->fetchAll();
          
          };

          function saveRecipes(PDO $bdd, int $category, string $title, string $description, string $ingredients,string $instruction, string|null $image) {

            $sql = "INSERT INTO `recipe` (`id`, `categoty_id`, `tiltle`, `description`, `ingediants`, `instruction`, `image`) VALUES ( NULL, :categoty_id, :tiltle, :description, :ingediants, :instruction, :image)";
            $query = $bdd->prepare($sql);
            $query->bindParam(':categoty_id', $category, PDO::PARAM_INT);
            $query->bindParam(':tiltle', $title, PDO::PARAM_STR);
            $query->bindParam(':description', $description, PDO::PARAM_STR);
            $query->bindParam(':ingediants', $ingredients, PDO::PARAM_STR);
            $query->bindParam(':instruction', $instruction, PDO::PARAM_STR);
            $query->bindParam(':image', $image, PDO::PARAM_STR);
            return $query->execute();
            
          }