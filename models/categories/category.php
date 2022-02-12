<?php

include("api-rest/config/database_connect.php");

// Create category
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

//update category
function UpdateRecipe($id, $name)
{
    global $connexion;

    $response = $connexion->prepare("Update recipe set name = :name, where id = :id");
    $response->execute(
        array(
            "id" => $id,
            "name" => $name,
        )
    );
}

//Get all categories
function AllCategory()
{
    global $connexion;

    $response = $connexion->query("SELECT * FROM category");
    return $response->fetchAll();
}
//Get one category
function GetOneCategoryById()
{
    global $connexion;
    $response = $connexion->query("SELECT id FROM category");
    return $response->fetchAll();
}
//Delete category
function DeleteCategory($id_category)
{
    global $connexion;
    $connexion->query("DELETE FROM category where id = $id_category");
}
