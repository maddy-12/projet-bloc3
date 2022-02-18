<?php
// SET HEADER
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
include("../../api-rest/config/database_connect.php");

//Include le model
function GetOneCategoryFromId($id_category)
{
    global $connexion;
    $response = $connexion->query("SELECT * FROM category WHERE id = $id_category");
    return $response->fetch();
}
function GetAllCategories()
{
    global $connexion;
    $response = $connexion->query("SELECT * FROM category");
    return $response->fetchAll();
}
//si on met un id dans l'url ça affiche la recette correspondante 
if (isset($_GET['id'])) {
    $res = GetOneCategoryFromId($_GET['id']);
} else {
    //sinon On affiche toutes les recettes
    $res = GetAllCategories();
}
//retourner un json
echo json_encode($res);
