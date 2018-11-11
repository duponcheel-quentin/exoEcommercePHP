<aside class="col-lg-3">
  <i class="fas fa-user-ninja fa-4x mb-3"></i>
  <ul class="list-group">
    <?php
    //On boucle sur l'utilisateur stocké en session pour afficher toutes ses informations
    foreach ($_SESSION["user"] as $key => $value) {
      echo "<li class='list-group-item'>$key : $value</li>";
    }
    echo $_SESSION["total"];
    ?>
    <div class="d-flex justify-content-center">
      <a href="basket.php"><button class="btn btn-success mt-3" type="button" name="button">Panier</button></a>
    </div>
    <div class="d-flex justify-content-center">
      <a href="logOut.php"><button type="button" class="btn btn-warning mt-3">Déconnexion</button></a>
    </div>
  </ul>
</aside>
