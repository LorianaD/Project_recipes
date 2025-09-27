<?php


//boucle foreach pour afficher toutes les recettes à la view
 
foreach ($recipes as $r) {
 
?>

{# rappel de toutes les colonnes pour afficher toutes les infos #}
 <h2> <?= htmlspecialchars($r['title'])  ?></h2> 
 <p> <?= htmlspecialchars($r['category'])  ?></p>
 <p> <?= (int) $r['prep_minutes'] ?></p>
 <p> <?= htmlspecialchars($r['difficulty'])  ?></p>
 <p> <?= htmlspecialchars($r['steps'])  ?></p>
 <img src="<?= htmlspecialchars($r['image'], ENT_QUOTES) ?>" alt="Recette">

<?php


}