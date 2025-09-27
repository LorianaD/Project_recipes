<?php
require_once __DIR__ . '/../config/db.php';

//Requête sql pour rappeler les elements de la base de données pour les afficher.
function getAllRecipes() {
   $recipes= "SELECT * FROM recipes";
   return db()->query($recipes)->fetchAll();
   //avec fetchAll() on recupere toutes les lignes d'un coup
}