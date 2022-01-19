<?php
include_once "../api-rest/config/database_connect.php";

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
