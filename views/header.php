<!-- Navbar -->

<nav id="navbar-white"class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="../index.php">BIOCOOK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recipeCreate.php">Créer une recette</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recipeDetail.php">Detail recette
          </a>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Compte
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="views/login.php">Se connecter</a></li>
            <li><a class="dropdown-item" href="views/register.php"> S'inscrire</a></li>
            <li><hr class="dropdown-divider"></li>
      
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" placeholder= "Rechercher...">Rechercher</button>
      </form>
    </div>
  </div>
</nav>