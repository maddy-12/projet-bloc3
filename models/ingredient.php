<?php

include ("../api-rest/config/database_connect.php");

 function GetAllIngredientsFromRecipe($id_recipe) {
    global $connexion;
    $response = $connexion->query("SELECT ingredient.name, ingredient_recipe.quantity, unit.text FROM ingredient INNER JOIN ingredient_recipe on ingredient.id = ingredient_recipe.id_ingredient
    INNER JOIN unit on ingredient_recipe.id_unit = unit.id where ingredient_recipe.id_recipe = '$id_recipe'");
    return $response->fetchAll();
}

