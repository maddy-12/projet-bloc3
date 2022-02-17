<?php
// SET HEADER
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
include("../api-rest/config/database_connect.php");

//Include le model 
// Create recipe
function CreateCategory($name)
{
    global $connexion;

    $response = $connexion->prepare("INSERT INTO category(name) values (:name)");
    $response->execute(
        array(
            "name" => $name,
        )
    );
}
//on recup' les données du json dans le body qui a été passé dans la requête et  on transforme le tableau json en tableau php 
$data = json_decode(file_get_contents("php://input"));
//On passe les donnée à la fonction pour créer la recette
//var_dump($data);
$res = CreateCategory($data->name, $data->cooking_time, $data->preparing_time, $data->instructions, $data->categoryId, $data->image);
echo json_encode($res);
