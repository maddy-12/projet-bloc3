<?php
include('header.php');
?>

<div class="container mg-top">
  <!-- Formulaire de création de recette -->
  <section>
    <form method="POST" action="?action=createRecipe">
      <div class="form-group row py-2">
        <label for="name" class="col-sm-2 col-form-label">Titre de la recette</label>
        <div class="col-sm-10">
          <input name="name" type="text" class="form-control" id="name" placeholder="Boeuf bourgignon">
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="cooking_time" class="col-sm-2 col-form-label">Temps de cuisson</label>
        <div class="col-sm-10">
          <input name="cooking_time" type="text" class="form-control" id="cooking_time" placeholder="40 h">
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="preparing_time" class="col-sm-2 col-form-label">Temps de préparation(en min)</label>
        <div class="col-sm-10">
          <input name="preparing_time" type="int" class="form-control" id="preparing_time" placeholder="40 min">
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="instructions" class="col-sm-2 col-form-label">Instructions</label>
        <div class="col-sm-10">
          <textarea name="instructions" class="form-control" id="instructions" placeholder="Ajouter le sel etc"></textarea>
        </div>
      </div>
      <div class="form-group row py-2">
        <div class="col-7 d-flex justify-content-between">
          <label for="image" class="col-sm-2 col-form-label mr-5">Image</label>
          <input name="image" type="text" class="custom-file-input" id="width-input-form">
        </div>
        <div class="col-5">
          <label for="id_category" class="col-sm-2 col-form-label">Catégorie</label>
          <select class="p-2" name="id_category" id="id_category">
            <?php foreach ($categories as $category) { ?>
              <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-success ">Créer</button>
    </form>
  </section>

  <!-- Liste des recettes créées -->
  <section>
    <div class="row d-flex justify-content-center">
      <?php
      if (!empty($recipes)) {
        while ($recipe = $recipes->fetch()) {

      ?>
          <div class="col-3 mx-4">
            <!-- Cartes de recettes -->
            <div class="card" style="width: 18rem;">
              <img src="<?= $recipe['image'] ?>" class="card-img-top" alt="...">
              <div class="text-center">
                <h5 class="card-title"> <?= $recipe['name']; ?></h5>
                <a href="index.php?action=recipeDetail&amp;id=<?= $recipe['id'] ?>" class="btn btn-primary btn-card ">Voir</a>
                <a href="index.php?action=adminUpdateRecipe&amp;id=<?= $recipe['id'] ?>" class="btn btn-primary btn-card ">Modifier</a>
                <a href="index.php?action=deleteRecipe&amp;id=<?= $recipe['id'] ?>" class="btn btn-primary btn-card ">Supprimer</a>
              </div>
            </div>
          </div>
        <?php
        }
        $recipes->closeCursor();
      } else {
        ?>
        <p>Vous n'avez pas de recettes</p>
      <?php
      }

      ?>
    </div>
  </section>
</div>

<?php
include('footer.php');
?>