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
