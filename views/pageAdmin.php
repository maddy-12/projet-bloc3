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
      <form>
        <div class="form-group row py-2">
          <label for="staticEmail" class="col-sm-2 col-form-label">Titre de la recette</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputtext" placeholder="Boeuf bourgignon">
          </div>
        </div>
        <div class="form-group row py-2">
          <label for="inputtext" class="col-sm-2 col-form-label">Temps de cuisson</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputtext" placeholder="40 h">
          </div>
        </div>
        <div class="form-group row py-2">
          <label for="inputtext" class="col-sm-2 col-form-label">Temps de préparation</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputtext" placeholder="40 h">
          </div>
        </div>
        <div class="form-group row py-2">
          <label for="inputtext" class="col-sm-2 col-form-label">Instructions</label>
          <div class="col-sm-10">
            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Ajouter le sel etc"></textarea>
          </div>
        </div>
        <div class="form-group row py-2">
          <label for="inputtext" class="col-sm-2 col-form-label">Image de la recette</label>
          <div class="custom-file col-sm-10">
            <input type="file" class="custom-file-input" id="customFile">
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