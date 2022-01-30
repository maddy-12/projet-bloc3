<?php
include('header.php');
 ?>

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
    </div>

<?php
include('footer.php');
?>