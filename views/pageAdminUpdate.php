<?php
include('header.php');
?>

<div class="container mg-top">
  <!-- Formulaire de création de recette -->
  <section>
    <form method="POST" action="?action=updateRecipe&id=<?= $_GET['id'] ?>">
      <div class="form-group row py-2">
        <label for="name" class="col-sm-2 col-form-label">Titre de la recette</label>
        <div class="col-sm-10">
          <input name="name" type="text" class="form-control" id="name" value="<?= utf8_encode($recipe['name']) ?>" placeholder=" Boeuf bourgignon">
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="cooking_time" class="col-sm-2 col-form-label">Temps de cuisson</label>
        <div class="col-sm-10">
          <input name="cooking_time" type="text" class="form-control" id="cooking_time" placeholder="40 h" value="<?= $recipe['cooking_time'] ?>">
        </div>
      </div>
      <div class=" form-group row py-2">
        <label for="preparing_time" class="col-sm-2 col-form-label">Temps de préparation(en min)</label>
        <div class="col-sm-10">
          <input name="preparing_time" type="int" class="form-control" id="preparing_time" placeholder="40 min" value="<?= $recipe['preparing_time'] ?>">
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="instructions" class="col-sm-2 col-form-label">Instructions</label>
        <div class="col-sm-10">
          <textarea name="instructions" class="form-control" id="instructions"><?= utf8_encode($recipe['instructions']) ?></textarea>
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="ingredients" class="col-sm-2 col-form-label">Ingrédients</label>
        <div class="col-sm-10">
          <textarea name="ingredients" class="form-control" id="ingredients"><?= utf8_encode($recipe['ingredients']) ?></textarea>
        </div>
      </div>
      <div class="form-group row py-2">
        <div class="col-7 d-flex justify-content-between">
          <label for="image" class="col-sm-2 col-form-label mr-5">Image</label>
          <input name="image" type="text" class="custom-file-input" id="width-input-form" value="<?= $recipe['image'] ?>">
        </div>

        <div class="col-5">
          <label for="id_category" class="col-sm-2 col-form-label">Catégorie</label>
          <select class="p-2" name="id_category" id="id_category">
            <?php foreach ($categories as $category) {
              $isSelected = "";
              if ($category['id'] == $recipe['id_category']) {
                $isSelected = "selected";
              }
            ?>
              <option <?php echo $isSelected; ?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php } ?>
          </select>
        </div>

      </div>
      <button type="submit" class="btn btn-outline-success ">Valider</button>
    </form>
  </section>
</div>

<?php
include('footer.php');
?>