<?php

include ("api-rest/config/database_connect.php");

function GetOneRecipeFromId($id_recipe)
{
  global $connexion;
  $response = $connexion->query("SELECT * FROM recipe WHERE id = $id_recipe");
  return $response->fetch();
}

function GetAllRecipes()
{
  global $connexion;
  $response = $connexion->query("SELECT * FROM recipe");
  return $response;
}

function CreateFavoriteRecipe($id_recipe, $id_user){
  global $connexion;
  $response = $connexion->prepare("INSERT INTO favourites (id_user, id_recipe) values (:id_user, :id_recipe )");
  $response->execute(
      array(
          "id_user" => $id_user,
          "id_recipe" => $id_recipe
      )
  );

  return $connexion->lastInsertId();
}

function GetAllFavouritesRecipes($id_user)
{
     global $connexion;
     $response = $connexion->query("SELECT recipe.name, recipe.image, recipe.id FROM recipe INNER JOIN favourites on recipe.id = favourites.id_recipe 
     INNER JOIN user on favourites.id_user = user.id where favourites.id_user = '$id_user'");
     return $response->fetchAll();
}

function DeleteFavoriteRecipe($id_recipe, $id_user){
  global $connexion;
  $response = $connexion->query("DELETE FROM favourites where favourites.id_recipe = '$id_recipe' AND favourites.id_user = '$id_user'");
  return $response->fetchAll();
}

function IsNotFavoriteRecipe($id_user, $id_recipe)
{
    global $connexion;
    $response = $connexion->prepare("SELECT * FROM favourites WHERE id_user = :id_user  AND id_recipe = :id_recipe");
    $response->execute(
        array(
          "id_user" => $id_user,
          "id_recipe" => $id_recipe
        )
    );
    return $response->rowCount() == 0;
}