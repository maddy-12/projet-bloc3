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
    <div class="container">
        <div class="name-slogan">
          <h1>Mes recettes</h1>
        </div>
      
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <!-- Cartes de recettes -->
                <div class="card">
                  <img src="https://www.atelierdeschefs.com/media/recette-d13804-bibimbap.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success btn-card ">Voir</a>
                    <a href="#" class="btn btn-success btn-card ">Modifier</a>
                    <a href="#" class="btn btn-success btn-card ">Supprimer</a>
                  </div>
                </div>
              </div>
         <!-- à supprimer  lorsqu'on fait la boucle-->
          <div class="col-4">
            <!-- Cartes de recettes -->
            <div class="card">
              <img src="https://www.atelierdeschefs.com/media/recette-d13804-bibimbap.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success btn-card ">Voir</a>
                <a href="#" class="btn btn-success btn-card ">Modifier</a>
                <a href="#" class="btn btn-success btn-card ">Supprimer</a>
              </div>
            </div>
          </div>
      
          <div class="col-4">
            <!-- Cartes de recettes -->
            <div class="card">
              <img src="https://www.atelierdeschefs.com/media/recette-d13804-bibimbap.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success btn-card ">Voir</a>
                <a href="#" class="btn btn-success btn-card ">Modifier</a>
                <a href="#" class="btn btn-success btn-card ">Supprimer</a>
              </div>
            </div>
          </div>
        </div>
    </div> 
</body>
<?php
include('footer.php');
?>