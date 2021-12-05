<?php
include('views/header.php');
?>
<!-- email -->
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<!-- mot de passe -->
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
</div>
<!-- Confirmation de mot de passe -->
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirmez votre mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
</div>
<!-- checkbox -->

<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
</div>
<!-- Bouton -->
<button type="submit" class="btn btn-form">Se connecter</button>
</form>

<?php
include('views/footer.php');
?>