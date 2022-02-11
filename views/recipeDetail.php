<?php
include('header.php');
?>

<div class="container mg-top">
    <section>
        <h1 class="h1-title"><?= $recipe['name'] ?></h1>
        <div class="row">
            <div class="col-12  shadow p-3 my-5 mb-5 bg-white rounded">
                <img src="<?= $recipe['image'] ?>" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-8">
                <a href="index.php?action=shoppingList&amp;id=<?= $recipe['id'] ?>" class="btn btn-card ">Voir la liste de course </a>
                <?php

                if (isset($_SESSION['userId'])) {
                ?>

                    <a href="index.php?action=addFavourites&amp;id=<?= $recipe['id'] ?>" class="btn btn-card">Ajouter aux favoris </a>
                <?php
                }
                // var_dump($message);
                if (isset($message)) {

                    echo "<div class='alert alert-warning' role='alert'>$message</div>";
                }
                ?>

                <span>Créée le : <?= $recipe['created'] ?></span>
                <span>Catégorie:
                    <?php foreach ($categories as $category) { ?>
                        <?= $category['name']; ?>
                    <?php } ?>
                </span>

            </div>
        </div>
    </section>
    <hr>
    <div class="row align-items-start">
        <div class="col border-end ">
            <h4 class="text-success">Ingrédients </h4>
            <ul>
                <?php
                foreach ($ingredients as $ingredient) {
                ?>
                    <li class="list-item">
                        <?= $ingredient['quantity']; ?>
                        <?= $ingredient['text']; ?>
                        <?= $ingredient['name']; ?>
                    </li>
                <?php
                }

                ?>
            </ul>

        </div>
        <div class="col">
            <h4 class="text-success">Temps de préparation </h4> <br> <span><?= $recipe['preparing_time'] ?></span>
        </div>
        <div class="col border-start">
            <h4 class="text-success">Temps de cuisson </h4> <br> <span><?= $recipe['cooking_time'] ?></span>
        </div>
    </div>
    <hr>
    <div class="row align-items-start">
        <div class="col">
            <h4 class="text-success">Instructions </h4>
            <p><?= $recipe['instructions'] ?></p>

        </div>
    </div>
</div>
</div>

</body>
<?php
include('footer.php');
?>