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
            <HR class="hr-shoppingList">
            </HR>
            <?= utf8_encode($recipe['ingredients']) ?>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>