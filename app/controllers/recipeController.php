<?php

require_once __DIR__ . '/../models/Recipe.php';

function view(string $path, array $data = []) {
    extract($data);
    require __DIR__ . '/../views/layout/header.php';
    require __DIR__ . '/../views/' . $path . '.php';
    require __DIR__ . '/../views/layout/footer.php';
}

function flash(string $type, string $msg) {
    $_SESSION['flash'][$type][] = $msg;
}
function flashes(): array {
    $f = $_SESSION['flash'] ?? [];
    unset($_SESSION['flash']);
    return $f;
}

function sanitize(array $src): array {
    return [
        'title' => trim($src['title'] ?? ''),
        'category' => trim($src['category'] ?? ''),
        'prep_minutes' => trim($src['prep_minutes'] ?? ''),
        'difficulty' => trim($src['difficulty'] ?? 'facile'),
        'steps' => trim($src['steps'] ?? ''),
        'image' => trim($src['image'] ?? ''),
    ];
}

/* READ (liste) */
function recipe_list_action() {
//On a rappelé la fonction de la requête pour afficher les données
    $recipes=  getAllRecipes();

    view('recipes/list', ['title' => 'toutes les recettes', 'recipes' => $recipes, 'flashes' => flashes()]);
}

/* CREATE */
function add_action() {
 if ($_SERVER[ 'REQUEST_METHOD'] === 'POST') {
    $data = sanitize($_POST);
    $errors = [];

    if ($data['title'] === '') $errors[] = "Le titre est obligatoire";
    if ($data['steps'] === '') $errors[] = "Les étapes sont obligatoires";

    if ($errors) {
        foreach ($errors as $e) flash ('error',$e);
        
    } else {
          $id = setRecipe($data);           
            flash('success', "Recette #$id ajoutée !");
            header('Location: index.php?action=list'); 
            exit;
    }
 }

    view('recipes/add', ['title'=>'Nouvelle recette','data'=> $_POST ?? [],'mode'=>'add',
    'flashes'=>flashes()]);
}

/* UPDATE */
function recipe_edit_action() {

    view('recipes/form', ['title'=>'Modifier la recette', 'mode'=>'edit', 'data'=>$row, 'id'=>$id, 'flashes'=>flashes()]);
}

/* DELETE */
function recipe_delete_action() {

    header('Location: index.php?action=list');
}
