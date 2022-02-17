<?php
session_start();
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

                header('Location: ?action=home');
            }
        } else {
            include "views/register.php";
        }
        break;

        //Logout
    case 'logout':

        if (isset($_SESSION['userId'])) {
            unset($_SESSION['userId']);
            session_destroy();
        }
        header('Location: ?action=displayLogin');

        break;

        // Login       
    case 'displayLogin':
        include "views/login.php";
        break;

    case 'login':

        include "models/user.php";
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $userId = GetUserIdFromUserAndPassword($_POST['username'], $_POST['password']);
            $permission = GetUserPermission($userId);
            if ($userId > 0) {
                $_SESSION['userId'] = $userId;
                $_SESSION['permission'] = $permission;
                header('Location: ?action=pageAdmin.php');
            } else {
                $errorMsg = "Identifiant ou mot de passe incorrectes";
                header('Location: ?action=displayLogin');
            }
        } else {
            header('Location: ?action=displayLogin');
            $errorMsg = "Identifiant ou mot de passe incorrectes";
        }
        break;

        // display one recipe
    case 'recipeDetail':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            include "models/recipes/recipe.php";
            $recipe =  GetOneRecipeFromId($_GET['id']);
            $categories =  GetOneCategoryFromIdRecipe($recipe['id']);
            include "models/ingredient.php";
            // $ingredients =  GetAllIngredientsFromRecipe($recipe['id']);

            require('views/recipeDetail.php');
        }
        break;

        //Add favourite
    case 'addFavourites':
        if (isset($_SESSION['userId']) && $_GET['id'] > 0) {
            include "models/recipes/recipe.php";

            if (IsNotFavoriteRecipe($_SESSION['userId'], $_GET['id'])) {
                $favoriteRecipe = CreateFavoriteRecipe($_GET['id'], $_SESSION['userId']);
                header('Location: ?action=favourites');
            } else {
                $message = "Recette déjà ajoutée";
                header('Location: ?action=recipeDetail&id=' . $_GET['id']);
            }
        }

        break;

    case 'favourites':
        if (isset($_SESSION['userId'])) {
            include "models/recipes/recipe.php";
            $recipesFavourites = GetAllFavouritesRecipes($_SESSION['userId']);
            include "views/favorites.php";
        }

        break;

    case 'deleteFavoriteRecipe':
        if (isset($_SESSION['userId'])) {
            include "models/recipes/recipe.php";
            $recipesFavourites = GetAllFavouritesRecipes($_SESSION['userId']);
            DeleteFavoriteRecipe($_GET['id'], $_SESSION['userId']);
            header('Location: ?action=favourites');
        }
        break;

        //display ingredient
    case 'shoppingList':
        include "models/recipes/recipe.php";
        $recipe =  GetOneRecipeFromId($_GET['id']);

        include "views/shoppingList.php";

        break;

        // Space Admin
    case 'admin':
        require('models/recipes/recipe.php');
        $recipes = GetAllRecipes();
        $categories = AllCategory();
        include "views/pageAdmin.php";
        break;

    case 'adminUpdateRecipe':
        require('models/recipes/recipe.php');
        $categories = AllCategory();
        $recipe = GetOneRecipeFromId($_GET['id']);
        include "views/pageAdminUpdate.php";
        break;

        //Delete recipe
    case 'deleteRecipe':
        require('models/recipes/recipe.php');
        DeleteRecipe($_GET['id']);
        header('Location: ?action=admin');
        break;

        //update recipe
    case 'updateRecipe':
        require('models/recipes/recipe.php');
        if (isset($_POST['name'])) {
            UpdateRecipe($_GET['id'], $_POST['name'], $_POST['cooking_time'], $_POST['preparing_time'], $_POST['instructions'], $_POST['id_category'], $_POST['image'], $_POST['ingredients']);
        }
        header('Location: ?action=admin');
        break;

        //Create recipe
    case 'createRecipe':
        include "models/recipes/recipe.php";
        if (isset($_SESSION['userId'])) {
            CreateNewRecipe($_POST['name'], $_POST['cooking_time'], $_POST['preparing_time'], $_POST['instructions'],  $_POST['ingredients'], $_POST['id_category'], $_POST['image']);
        }
        header('Location: ?action=admin');
        break;

        //Create category
    case 'createCategory':
        include "models/categories/category.php";
        if (isset($_SESSION['userId'])) {
            CreateCategory($_POST['name']);
        }
        header('Location: ?action=admin');
        break;

        //update category
    case 'updateCategory':
        require('models/categories/category.php');
        if (isset($_POST['name'])) {
            UpdateRecipe($_GET['id'], $_POST['name']);
        }
        header('Location: ?action=admin');
        break;

        //Delete category
    case 'deleteCategory':
        require('models/categories/category.php');
        DeleteCategory($_GET['id']);
        header('Location: ?action=admin');
        break;

    case 'home':
    default:
        require('models/recipes/recipe.php');
        $recipes = GetAllRecipes();
        require('views/home.php');
}
