<?php
// SET HEADER
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: PATCH");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
include("../../api-rest/config/database_connect.php");


//Fonction update 
function UpdateRecipe($id, $name, $cooking_time, $preparing_time, $instructions, $categoryId, $image)
{
    global $connexion;

    $response = $connexion->prepare("Update recipe set name = :name, cooking_time = :cooking_time, preparing_time = :preparing_time, instructions = :instructions, id_category = :categoryId, image = :image where id = :id");
    $response->execute(
        array(
            "id" => $id,
            "name" => $name,
            "cooking_time" => $cooking_time,
            "preparing_time" => $preparing_time,
            "instructions" => $instructions,
            "categoryId" => $categoryId,
            "image" => $image
        )
    );
}

//Récuperer les donnée en json
$data = json_decode(file_get_contents("php://input"));

var_dump($data);
//On passe les données dans la fonction pour modifier
$res = UpdateRecipe($data->id, $data->name, $data->cooking_time, $data->preparing_time, $data->instructions, $data->id_category, $data->image);
echo json_encode($res);
