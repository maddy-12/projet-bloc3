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

  <?php
  include('header.php');
  ?>
  <main class="container text-center">
    <h2 class="mg-top">Nous Contacter</h2>

    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-12 form-floating mb-3">
            <label for="floatingInputName">Nom</label>
            <input type="text" class="form-control" id="floatingInputName">
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
            <button class="btn btn-card" type="submit">Envoyer</button>
          </div>
        </form>
      </div>
    </div>

  </main>
  <?php
  include('footer.php');
  ?>
</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>