
    <?php
    include('header.php');
    ?>
    <main class="container mt-">
        <div class="row mg-top">
            <div class="col-12 text-center">
                <h2 class="text-uppercase">Mes recettes favorites</h2>
            </div>
        </div>

        <div class="row d-flex justify-content-center my-4">
        <?php
                   foreach ($recipesFavourites as $recipe) {
        ?>
            <div class="col-5">
                <!-- Recette favorite -->
                <div class="card">
                    <img src="<?= ($recipe['image']); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($recipe['name']); ?></h5>
                        <a href="recipeDetail.php" class="btn btn-card ">Voir la recette </a>
                        <a href="shoppingList.php" class="btn btn-card ">Liste de courses</a>
                        <a href="index.php?action=deleteFavoriteRecipe&amp;id=<?= $recipe['id']?>"  class="btn btn-card ">Supprimer</a>
                    </div>
                </div>
            </div>
        <?php 
        }
        ?>
        </div>


    </main>
    <?php
    include('footer.php');
    ?>
