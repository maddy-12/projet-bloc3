<?php 
include ('views/header.php');
?>

<div class="container text-center">
<h2>Nous Contacter</h2>

<form class="row g-3 needs-validation" novalidate>
<div class="col-12 form-floating mb-3">
  <input type="text" class="form-control" id="floatingInputName">
  <label for="floatingInputMessage">Email</label>
</div>
<div class="col-12 form-floating mb-3">
  <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
  <label for="floatingInputEmail">Email</label>
</div>
<div class="col-12 form-floating mb-3">
  <label for="floatingInputMessagee">Message</label>
  <textarea class="form-control" id="floatingInputMessage" rows="3"></textarea>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">Envoyer</button>
  </div>
</div>
</form>
<?php
include ('views/footer.php');
?>