<?php
session_start();
require "Model/function.php";
//On récupère nos produits via la fonction, plus tard celle-ci effectuera une requête en base de données
if (isset($_GET["id"])){
   $id = $_GET["id"];
} elseif (isset($_GET["delId"])){
   $delId = $_GET["delId"];
}

function addProduct($id){
$products = getProducts();
$product = $products[$id];

 if (empty($product) || $product["stock"] == false) {
   header("Location: products.php");
 }
 else {
   array_push($_SESSION["basket"], $product);
   $_SESSION["total"] += $product["price"];
   header("Location: basket.php");
 }
}

function deleteProduct($delId) {
  $_SESSION["total"] -= $_SESSION["basket"][$delId]["price"];
  unset($_SESSION["basket"][$delId]);
  header("Location: basket.php");
}

// $total = 0;
// function calculPrice($id) {
//
// }
if (isset($id)){
   addProduct($id);
} elseif (isset($delId)){
   deleteProduct($delId);
}

?>
