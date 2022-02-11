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

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>BIOCOOK</title>
</head>

<body>
  <div class="container">
    <!-- Formulaire de création de recette -->
    <section>
      <h1 class="h1-title">Title of recipe</h1>
      <form class="input-group" method="POST" action="?action=createRecipe">
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
            <textarea name="instructions" class="form-control is-invalid" id="instructions" placeholder="Ajouter le sel etc"></textarea>
          </div>
        </div>
        <div class="form-group row py-2">
          <label for="image" class="col-sm-2 col-form-label">Image</label>
          <div class="custom-file col-sm-10">
            <input name="image" type="text" class="custom-file-input" id="image">
          </div>
        </div>
        <div class="form-group row py-2">
          <label for="id_category" class="col-sm-2 col-form-label">Catégorie</label>
          <select name="id_category" id="id_category">
            <?php foreach ($categories as $category) { ?>
              <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php } ?>

          </select>
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
            <div class="col-3">
              <!-- Cartes de recettes -->
              <div class="card" style="width: 18rem;">
                <img src="<?= $recipe['image'] ?>" class="card-img-top" alt="...">
                <div class="text-center">
                  <h5 class="card-title"> <?= $recipe['name']; ?></h5>
                  <a href="index.php?action=recipeDetail&amp;id=<?= $recipe['id'] ?>" class="btn btn-primary btn-card ">Voir</a>
                  <a href="index.php?action=updateRecipe&amp;id=<?= $recipe['id'] ?>" class="btn btn-primary btn-card ">Modifier</a>
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


</body>

<?php
include('footer.php');
?>