<?php
session_start ();
 ?>
<?php
include "Template/header.php";
require "Model/function.php";
include "Template/aside.php";
$products = getProducts();
$id = $_GET["id"];
foreach ($products as $key => $product) {
  if ($product["id"] == $id) {
    ?>
    <article class="col-lg-6 my-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product["name"] ?></h5>
          <p class="card-text"><?php echo $product["description"] ?></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix : <?php echo $product["price"] ?></li>
          <li class="list-group-item">Lieu de production : <?php echo $product["made_in"] ?></li>
          <li class="list-group-item">Catégorie : <?php echo $product["category"] ?></li>
          <li class="list-group-item">Stock :<?php if ($product["stock"] == 0) {echo " indisponible";} else {echo " disponible";} ?></li>
          <li class="list-group-item d-flex justify-content-center"> <?php
          if ($product["stock"] == 1) {
            echo " <a class=' d-flex btn btn-success justify-content-center' href='treatmentBasket.php?id=" . $product['id'] . "'>Ajouter au pannier</a>";
          } else {
            echo "pas de stock";
          }
           ?> </li>
        </ul>
      </article>
      <?php
  }
}
include "Template/footer.php";
?>
