<?php
// SET HEADER
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: PATCH");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
include("../../api-rest/config/database_connect.php");


//Fonction update 
function UpdateCategory($id, $name)
{
    global $connexion;

    $response = $connexion->prepare("Update category set name = :name where id = :id");
    $response->execute(
        array(
            "id" => $id,
            "name" => $name,
        )
    );
}

//Récuperer les donnée en json
$data = json_decode(file_get_contents("php://input"));

var_dump($data);
//On passe les données dans la fonction pour modifier
$res = UpdateCategory($data->id, $data->name);
echo json_encode($res);
