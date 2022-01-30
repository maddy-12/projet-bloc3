<!doctype html>
<html lang="fr">

<!-- Navbar -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/c8bdca93db.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/style.css">

  <!-- script -->
  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>BIOCOOK</title>
</head>
<body>
<nav id="navbar-white" class="navbar fixed-top navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="../index.php"><img src="assets/img/logo.png" alt="Logo BIOCOOK"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="../index.php">Home</a>
        </li>
        <!-- Si connecté on affiche -->
        <?php
        if (isset($_SESSION['userId'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="recipeCreate.php">Créer une recette</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="recipeCreatedUser.php">Recettes créée</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shoppingList.php">Shopping list</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="favorites.php">Favoris</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?action=logout" role="button">Logout</a>
          </li>
        <?php
          //Si non connecté 
        } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=displayLogin">Se connecter</a>
          </li>
          <li>
            <a class="nav-link" href="index.php?action=displayRegister"> S'inscrire</a>
          </li>
          </li>
        <?php
        }
        ?>



      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" placeholder="Rechercher...">Rechercher</button>
      </form>
    </div>
  </div>
</nav>