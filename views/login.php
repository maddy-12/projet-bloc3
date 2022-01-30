<?php
include('header.php');
?>

  <div class="container container-form">
    <div class="h1-title">
      <h1>Se connecter</h1>
    </div>
    <form class="form-signin" method="POST" action="?action=login">
      <!-- Message d'erreur -->
      <?php
      if (isset($errorMsg)) {

        echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
      }
      ?>
      <div class="mb-3">
        <label for="identifiant" class="form-label">Identifiant</label>
        <input name="text" type="text" class="form-control input-form" id="identifiant">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input name="password" type="password" class="form-control input-form" id="exampleInputPassword1">
      </div>
      <div class="d-flex justify-content-center my-2">
        <button type="submit" class="btn btn-form btn-login">Se connecter</button>
      </div>

    </form>

  </div>



<?php
include('footer.php');
?>