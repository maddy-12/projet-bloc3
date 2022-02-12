<?php
// SET HEADER
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
include("../api-rest/config/database_connect.php");

//Include le model
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
//si on met un id dans l'url ça affiche la recette correspondante 
if (isset($_GET['id'])) {
    $res = GetOneRecipeFromId($_GET['id']);
} else {
    //sinon On affiche toutes les recettes
    $res = GetAllRecipes();
}
//retourner un json
echo json_encode($res);
