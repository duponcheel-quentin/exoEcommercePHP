<?php
session_start ();
 ?>

<?php
include "Template/header.php";
require "Model/function.php";
include "Template/aside.php";

  //On boucle pour afficher tous les produits contenus dans basket
  foreach ($_SESSION["basket"] as $key => $product) {
?>
<article class="col-lg-6 my-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $product["name"] ?></h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Prix : <?php echo $product["price"] ?></li>
    </ul>
    <div class="m-auto card-body">
      <?php
        echo "<a href='single.php?id=" . $product['id'] . "'>Voir le produit</a>";
       ?>
    </div>
    <a class="btn btn-danger" href="treatmentBasket.php?delId=<?php echo $key; ?>">Delete article</a>
</article>
<?php
}
 ?>

<?php
include "Template/footer.php";
 ?>
