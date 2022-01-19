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
  <div class="container container-form">
    <div class="h1-title">
      <h1>Se connecter</h1>
    </div>
    <form method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Adresse email</label>
        <input name="email" type="email" class="form-control input-form" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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

</body>

<?php
include('footer.php');
?>