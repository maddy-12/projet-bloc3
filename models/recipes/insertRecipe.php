<?php
// SET HEADER
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
include("../../api-rest/config/database_connect.php");

//Include le model 
// Create one recipe
function CreateNewRecipe($name, $cooking_time, $preparing_time, $ingredients, $instructions, $categoryId, $image)
{
    global $connexion;

    $response = $connexion->prepare("INSERT INTO recipe(name, cooking_time, preparing_time,ingredients, instructions, id_category, image ) values (:name, :cooking_time, :preparing_time,:ingredients, :instructions, :categoryId, :image)");

    var_dump($response);
    $response->execute(
        array(
            "name" => $name,
            "cooking_time" => $cooking_time,
            "preparing_time" => $preparing_time,
            "ingredients" => $ingredients,
            "instructions" => $instructions,
            "categoryId" => $categoryId,
            "image" => $image,
        )
    );
}
//on recup' les données du json dans le body qui a été passé dans la requête et  on transforme le tableau json en tableau php 
$data = json_decode(file_get_contents("php://input"));
//On passe les donnée à la fonction pour créer la recette
//var_dump($data);
$res = CreateNewRecipe($data->nom, $data->cooking_time, $data->preparing_time, $data->ingredients, $data->instructions, $data->categoryId, $data->image);
echo json_encode($res);
