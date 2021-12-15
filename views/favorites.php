<?php
include('header.php');
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/c8bdca93db.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style.css">

    <title>BIOCOOK</title>
</head>

<body>

    <?php
    include('header.php');
    ?>
    <main class="container">
        <div class="row mg-top">
            <div class="col-12 text-center">
                <h2 class="text-uppercase">Mes recettes favorites</h2>
            </div>
        </div>

        <div class="row d-flex justify-content-center my-4">
            <div class="col-5">
                <!-- Recette favorite -->
                <div class="card">
                    <img src="https://www.atelierdeschefs.com/media/recette-d13804-bibimbap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="recipeDetail.php" class="btn btn-card ">Voir la recette </a>
                        <a href="shoppingList.php" class="btn btn-card ">Liste de courses</a>
                        <button type="button" class="btn btn-card">Supprimer</button>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <!-- Recette favorite -->
                <div class="card">
                    <img src="https://www.atelierdeschefs.com/media/recette-d13804-bibimbap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="recipeDetail.php" class="btn btn-card ">Voir la recette </a>
                        <a href="shoppingList.php" class="btn btn-card ">Liste de courses</a>
                        <button type="button" class="btn btn-card">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center my-4">
            <div class="col-5">
                <!-- Recette favorite -->
                <div class="card">
                    <img src="https://www.atelierdeschefs.com/media/recette-d13804-bibimbap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="recipeDetail.php" class="btn btn-card ">Voir la recette </a>
                        <a href="shoppingList.php" class="btn btn-card ">Liste de courses</a>
                        <button type="button" class="btn btn-card">Supprimer</button>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <!-- Recette favorite -->
                <div class="card">
                    <img src="https://www.atelierdeschefs.com/media/recette-d13804-bibimbap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="recipeDetail.php" class="btn btn-card ">Voir la recette </a>
                        <a href="shoppingList.php" class="btn btn-card ">Liste de courses</a>
                        <button type="button" class="btn btn-card">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php
    include('footer.php');
    ?>
</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>