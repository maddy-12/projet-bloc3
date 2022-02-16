<?php require('header.php'); ?>

<div class="container mt-5 pt-5">
  <div class="name-slogan my-3">
    <h1>BIOCOOK</h1>
    <span>Votre santé et votre appétit sont notre priorité</span>
  </div>

  <div class="row d-flex justify-content-center">
    <?php
    while ($recipe = $recipes->fetch()) {

    ?>
      <div class="col-3 mx-4">
        <!-- Cartes de recettes -->
        <div class=" card" style="width: 18rem;">
          <img src="<?= $recipe['image'] ?>" class="card-img-top" alt="...">
          <div class="text-center">
            <h5 class="card-title"> <?= utf8_encode($recipe['name']); ?></h5>
            <a href="index.php?action=recipeDetail&amp;id=<?= $recipe['id'] ?>" class="btn btn-primary btn-card ">Voir la recette</a>
          </div>
        </div>
      </div>
    <?php
    }
    $recipes->closeCursor();
    ?>
  </div>

</div>

<?php require('footer.php'); ?>