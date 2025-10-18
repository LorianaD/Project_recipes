<?php
// index.php?action=list|create|edit|delete&id=...
$action = $_GET['action'] ?? 'list';
require_once __DIR__ . '/../app/controllers/RecipeController.php';

session_start();

switch ($action) {
    case 'add':    add_action();                  break;
    case 'edit':   recipe_edit_action();   break;
    case 'delete': recipe_delete_action(); break;
    default:       recipe_list_action();   break;
}
