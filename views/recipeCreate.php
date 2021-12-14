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
        <section>
            <h1>Title of recipe</h1>
            <form>
                <div class="form-group row py-2">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Titre de la recette</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword"  placeholder="Boeuf bourgignon">
                  </div>
                </div>
                <div class="form-group row py-2">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Temps de cuisson</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword"  placeholder="40 h">
                  </div>
                </div>
                <div class="form-group row py-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Temps de préparation</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword"  placeholder="40 h">
                    </div>
                </div>
                <div class="form-group row py-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Instructions</label>
                    <div class="col-sm-10">
                        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Ajouter le sel etc" ></textarea>
                    </div>
                </div>
                <div class="form-group row py-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Image de la recette</label>
                    <div class="custom-file col-sm-10">
                        <input type="file" class="custom-file-input" id="customFile">
                    </div>
                </div>
                 <button type="submit" class="btn btn-outline-success ">Créer</button>
              </form>
        </section>
    </div>
</body>

<?php
include('footer.php');
?>