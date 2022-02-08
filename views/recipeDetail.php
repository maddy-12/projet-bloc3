<?php
include('header.php');
?>

    <div class="container mg-top">
        <section>
            <h1 class="h1-title"><?= $recipe['name']?></h1>
            <div class="row my-3">
                <div class="col-lg-5 col-md-12  shadow p-3 my-5 mb-5 bg-white rounded">
                    <img src="<?= $recipe['image']?>" class="card-img-top" alt="...">
                </div>
                <div class="col-lg-7 col-md-12 my-5">
                    <h3 class="text-right">Description</h3>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta quaerat voluptas illo quas, voluptatem praesentium ratione voluptate error soluta corporis, sunt iste, eum est. Consequuntur est incidunt fuga labore dicta! </p>
                    
        
              
                    <a href="index.php?action=shoppingList&amp;id=<?= $recipe['id']?>"  class="btn btn-card ">Voir la liste de course </a>
                    <?php

                        if (isset($_SESSION['userId'])) {
                    ?>    

                    <a href="index.php?action=addFavourites&amp;id=<?= $recipe['id']?>" class="btn btn-card">Ajouter aux favoris </a>
                    <?php
                        }   
                ?>
                   
              
                </div>
            </div>
        </section>
        <hr>
        <div class="row align-items-start">
            <div class="col border-end "> <h4 class="text-success">Ingrédients </h4>
                <ul>
                    <?php
                    foreach ($ingredients as $ingredient) {
                    ?>
                        <li class="list-item">
                            <?= htmlspecialchars($ingredient['quantity']); ?>
                            <?= htmlspecialchars($ingredient['text']); ?>
                            <?= htmlspecialchars($ingredient['name']); ?>
                        </li>
                    <?php
                        }
                            
                    ?>
                </ul>
                  
            </div>
            <div class="col"> <h4 class="text-success">Temps de préparation </h4> <br> <span>15 min</span> </div>
            <div class="col border-start"> <h4 class="text-success">Temps de cuisson </h4> <br> <span>15 min</span> </div>
          </div>
          <hr>
          <div class="row align-items-start">
              <div class="col"> <h4 class="text-success">Instructions </h4>
                 <p><?= $recipe['description']?></p>
                    
              </div>
            </div>
        </div>
      </div>


</body>
<?php
include('footer.php');
?>