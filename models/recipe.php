<?php

include ("../api-rest/config/database_connect.php");

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
  return $response->fetchAll();
}
