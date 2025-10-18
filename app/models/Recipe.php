<?php
require_once __DIR__ . '/../config/db.php';

//Requête sql pour rappeler les elements de la base de données pour les afficher.
function getAllRecipes() {
   $recipes= "SELECT * FROM recipes";
   return db()->query($recipes)->fetchAll();
   //avec fetchAll() on recupere toutes les lignes d'un coup
}

function setRecipe(array $data) {
   $recipes= "INSERT into recipes(title,category,prep_minutes,difficulty,steps) 
   VALUE (:title,:category,:prep_minutes,:difficulty,:steps)";
   $recipe=db()->prepare($recipes);

   $recipe->execute([
      ':title'=>$data['title'],
      ':category'=>$data['category'],
      ':prep_minutes'=>$data['prep_minutes'],
      ':difficulty'=>$data['difficulty'],
      ':steps'=>$data['steps'],
   ]);

   return (int)db()->lastInsertId();

}