<?php
// SET HEADER
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
include("../api-rest/config/database_connect.php");


function DeleteRecipe($id_recipe)
{
    global $connexion;
    $connexion->query("DELETE FROM recipe where id = $id_recipe");
}

//ransformer les données Json qu'on récup en données php pour pouvoir les manipuler
$data = json_decode(file_get_contents("php://input"));
$res = DeleteRecipe($data->id);
//retourner un json
echo json_encode($res);
