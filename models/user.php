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
    global $PDO;

    //Check if the inputs are properly filled
    if (!empty($username) && !empty($password)) {

        //Request to get the user ID and the PWD
        $response = $PDO->prepare("SELECT id FROM user WHERE username = :username and password = MD5(:password) ");
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
        $users = $response->fetchAll();
        //If user exists
        if (count($users) == 1) {
            return $users[0]['id'];
            //If it doesn't exist
        } else {
            return -1;
        }
    }
}
