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
include ('header.php');
?>
<div class="container">
    <div class="col-12 text-center mg-top">
        <h2 class="text-uppercase">Ma liste de courses</h2>
    </div>
    <div class="row my-4">
        <div class="col-6">
            <h3>Viande</h3>
            <HR class="hr-shoppingList"></HR>
            <ul class="list-group">
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    First checkbox
                </li>
            </ul>
        </div>
        <div class="col-6">
            <h3>Légumes</h3>
            <HR class="hr-shoppingList"></HR>
            <ul class="list-group">
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    First checkbox
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    Second checkbox
                </li>
            </ul>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-6">
            <h3>Epices</h3>
            <HR class="hr-shoppingList"></HR>
            <ul class="list-group">
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    First checkbox
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    Second checkbox
                </li>
            </ul>
        </div>
        <div class="col-6">
            <h3>Aide à la cuisine</h3>
            <HR class="hr-shoppingList"></HR>
            <ul class="list-group">
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    First checkbox
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    Second checkbox
                </li>
            </ul>
        </div>
    </div>
</div>
<?php 
include ('footer.php');
?>
</body>
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>


