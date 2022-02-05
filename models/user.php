<?php
include("api-rest/config/database_connect.php");

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

    //Check if the inputs are properly filled
    //Request to get the user ID and the PWD
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
