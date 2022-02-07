<?php
include('header.php');

?>

<div class="container">
    <div class="col-12 text-center mg-top">
        <h2 class="text-uppercase">Ma liste de courses</h2>
    </div>
    <div class="row my-4 justify-content-center">
        <div class="col-6">
            <h3>Ingérdients</h3>
            <HR class="hr-shoppingList"></HR>
            <ul class="list-group">
            <?php
                   foreach ($ingredients as $ingredient) {
            ?>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    <?= htmlspecialchars($ingredient['quantity']); ?>
                    <?= htmlspecialchars($ingredient['text']); ?>
                    <?= htmlspecialchars($ingredient['name']); ?>
                </li>
            <?php
                 }
                    
            ?>
            </ul>
        </div>
    </div>
</div>
<?php 
include ('footer.php');
?>


