<?php
include('header.php');
//Si l'utilisateur n'est pas un admin mais réussi à acceder à cette page, il sera rediriger vers la page d'accueil
// if (($_SESSION['permission']) != 2) {
//   header('Location: ?action=home');
// }
?>

<div class="container mg-top">
  <!-- Formulaire de création de recette -->
  <section>
    <H1 class="h2 text-center"> Bienvenue sur votre espace administrateur</H1>
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
        <label for="ingredients" class="col-sm-2 col-form-label">Ingrédients</label>
        <div class="col-sm-10">
          <textarea name="ingredients" class="form-control" id="ingredients" placeholder="Liste des ingrédients"></textarea>
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
              <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?> </option>
            <?php } ?>
          </select>

        </div>
      </div>
      <button type="submit" class="btn btn-outline-success ">Créer</button>
    </form>
  </section>

  <!-- Ajouter une categorie -->
  <div class="row my-4">
    <h2 class="h4 text-center">Gestion des categories</h2>
    <div class="col-4">
      <form method="POST" action="?action=createCategory">
        <label for="nom" class="my-2">Créer une catégorie</label>
        <input class="form-control" type="text" name="name">
        <button type=" submit" class="btn btn-outline-success my-2 ">Créer</button>
      </form>
    </div>

    <div class="col-8">
      <div class="row">
        <div class="col-6">
          <label for="id_cat" class="my-2">Supprimer une catégorie</label></br>
          <select class="p-2" name="id_cat">
            <?php foreach ($categories as $cat) { ?>
              <option value="<?php $cat['id']; ?>"><?php echo $cat['name']; ?></option>
            <?php } ?>
          </select> </br>
          <a href="index.php?action=deleteCategory&amp;id=<?= $cat['id'] ?>" class="btn btn-card my-2"> Supprimer</a>
        </div>

        <div class="col-6">
          <form method="POST" action="?action=updateCategory">
            <label for="nom" class="my-2">Modifier une catégorie</label>
            <select class="p-2" name="id_cat">
              <?php foreach ($categories as $cat) { ?>
                <option value="<?php $cat['id']; ?>"> <?php echo $cat['name']; ?></option>
              <?php } ?>
            </select>
            <input class="form-control" type="text" name="<?= $cat['id']; ?>" value="<?= $cat['name']; ?>">

            <button type=" submit" class="btn btn-outline-success my-2 ">Modifier</button>
          </form>
        </div>
      </div>

    </div>

  </div>

  <!-- Liste des recettes créées -->
  <section>
    <h3 class="text-center"> Liste des recettes</h3>
    <div class="row d-flex justify-content-center">
      <?php
      if (!empty($recipes)) {
        while ($recipe = $recipes->fetch()) {

      ?>
          <div class="col-3 mx-4 my-4">
            <!-- Cartes de recettes -->
            <div class="card" style="width: 18rem;">
              <img src="<?= $recipe['image'] ?>" class="card-img-top" alt="...">
              <div class="text-center">
                <h5 class="card-title"> <?= utf8_encode($recipe['name']) ?></h5>
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
        <div class="alert alert-light" role="alert">
          <p>Vous n'avez pas encore créer une recette</p>
        </div>
      <?php
      }

      ?>
    </div>
  </section>
</div>

<?php
include('footer.php');
?>