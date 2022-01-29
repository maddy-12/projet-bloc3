<?php
include('header.php');

include_once('../controllers/generalController.php');
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

    <div class="container container-form">
        <h1 class="mt-5">Inscription</h1>

        <div class="container container-form mg-top">
            <h1>Inscription</h1>

            <!-- email -->
            <form class="login-form" method="POST" action="?action=register">
                <!-- Message d'erreur -->
                <?php
                if (isset($errorMsg)) {

                    echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
                }
                ?>
                <!-- firstname -->
                <div class="mb-3">
                    <label for="username" class="form-label">Pseudonyme</label>
                    <input name="username" type="text" class="form-control input-form" required="">
                </div>
                <!-- mot de passe -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input name="password" type="password" class="form-control  input-form" required="">
                </div>
                <!-- Confirmation de mot de passe -->
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirmez votre mot de passe</label>
                    <input name="confirm_password" type="password" class="form-control input-form
                " required="">
                </div>
                <div class="btn-container d-flex justify-content-center">

                    <!-- Bouton -->
                    <button type="submit" class="btn btn-form btn-form">Se connecter</button>
                </div>

            </form>

        </div>
</body>

<?php
include('footer.php');
?>