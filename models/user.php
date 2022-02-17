<?php
include("api-rest/config/database_connect.php");
//Créer un nouvel utilisateur
function CreateNewUser($username, $password)
{
    global $connexion;
    //encrypt password
    $response = $connexion->prepare("INSERT INTO user (username, password) values (:username, MD5(:password) )");
    $response->execute(
        array(
            "username" => $username,
            "password" => $password
        )
    );
    return $connexion->lastInsertId();
}
//Vérifier si l'identifiant est disponible
function IsUsernameFree($username)
{
    global $connexion;
    $response = $connexion->prepare("SELECT * FROM user WHERE username = :username ");
    $response->execute(
        array(
            "username" => $username
        )
    );
    return $response->rowCount() == 0;
}

//Get the username & pwd in order to login
function GetUserIdFromUserAndPassword($username, $password)
{
    global $connexion;
    //Requete qui récupère l'identifiant et le mot de passe
    $response = $connexion->prepare("SELECT id FROM user WHERE username = :username AND password = MD5(:password) ");
    $response->execute(
        array(
            "username" => $username,
            "password" => $password
        )
    );
    if ($response->rowCount() == 1) {
        $row = $response->fetch();
        return $row['id'];
    } else {
        return -1;
    }
}

//Get the username & pwd in order to login
function GetUserPermission($userId)
{
    global $connexion;
    //récupérer le parametre "permission" du user par son id
    $response = $connexion->prepare("SELECT permission FROM user WHERE id = :userId");
    $response->execute(
        array(
            "userId" => $userId
        )
    );
    if ($response->rowCount() == 1) {
        $row = $response->fetch();
        return $row['permission'];
    } else {
        return -1;
    }
}
