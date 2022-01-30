<?php

$action = $_GET["action"] ?? "display";


switch ($action) {
        //REGISTER

    case 'displayRegister':
        include "views/register.php";
    break;

    case 'register':
        include "models/user.php";

        //Si user remplis correctement
        if (isset($_POST['username']) &&  isset($_POST['password']) && isset($_POST['confirm_password'])) {
            $errorMsg = NULL;

            //si username existe
            if (!IsUsernameFree($_POST['username'])) {
                $errorMsg = "Ce pseudonyme est déjà utilisé";

                //If the retyped password is diffrent from the pwd filled previously
            } else if ($_POST['password'] != $_POST['confirm_password']) {

                //Show error message
                $errorMsg = "Les mot de passes ne sont pas identiques ";

                //If the password is too short (less than 8 characters)
            } else if (strlen(trim($_POST['password'])) < 8) {

                //Show error message
                $errorMsg = "Le mot passe doit contenir au moin 8 caractères.";

                //if the username is too short ( less than 4 characters)
            } else if (strlen(trim($_POST['username'])) < 4) {

                //Show error message
                $errorMsg = "Votre Pseudonyme doit contenir au moin 4 caractères";
            }

            if ($errorMsg) {
                include "views/register.php";
            } else {
                $userId = CreateNewUser($_POST['username'], $_POST['password']);
                $_SESSION['userId'] = $userId;

                // header('Location: ?action=display');
            }
        } else {
            include "views/register.php";
        }
    break;

        // Login
       
    case 'displayLogin' : 
        include "views/login.php";
    break;

    case 'login' :   
        include "models/user.php";
        if (isset($_POST['username']) &&  isset($_POST['password'])) {
            $userId = GetUserIdFromUserAndPassword($_POST['username'], $_POST['password']);
            if ($userId > 0) {
                $_SESSION['userId'] = $userId;
                //header('Location: ?action=display');
            } else {
                $errorMsg = "Identifiant ou mot de passe incorrecte";
                include "views/login.php";
            }
        } else {
            include "views/login.php";
        }
    break;

        // display one recipe
    case 'recipeDetail':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            include "models/recipe.php";
            $recipe =  GetOneRecipeFromId($_GET['id']);
            require('views/recipeDetail.php');
        }
    break;

        //display ingredient

    case 'shoppingList' : 

        include "models/recipe.php";
        $recipes =  GetAllRecipes();


        include "models/ingredient.php";
        $ingredients = array();

        foreach ($recipes as $oneRecipe) {
            $ingredients[$oneRecipe['id']] = GetAllIngredientsFromRecipe($oneRecipe['id']);
        };

        include "views/shoppingList.php";

    break;

    default : 
    require('models/recipe.php');
    $recipes = GetAllRecipes();
    require('views/home.php');
    
}
