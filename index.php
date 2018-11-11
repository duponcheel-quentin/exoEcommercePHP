<?php
//On charge le header
include "Template/header.php";

//Si un message nous a été transmis par l'url on le récupère et on l'affiche
if(isset($_GET["message"])) {
  $message = htmlspecialchars($_GET["message"]);
  echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
 ?>

<div class="container d-flex justify-content-around">
  <form class="w-45 my-5" action="login.php" method="post">
    <div class="form-group">
      <label for="userName">Votre nom</label>
      <input type="text" class="form-control" id="userName" name="user_name" required>
    </div>
    <div class="form-group">
      <label for="userPassword">Votre mot de passe</label>
      <input type="password" class="form-control" id="userPassword" name="user_password" required>
    </div>
    <button type="submit" class="btn lightBg">Se connecter</button>
  </form>

  <form class="w-45 my-5">
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom" required>
      <small id="emailHelp" class="form-text text-muted">Veuillez entrer un nom avec au moins 3 caractères.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Vérification du mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="mot de passe" required>
    </div>
    <div class="form-group">
     <label for="sexeChoice">Choisir sexe</label>
     <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
       <option value="1">Homme</option>
       <option value="2">Femme</option>
     </select>
   </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</form>

 <?php
 //On charge le footer
 include "Template/footer.php"
  ?>
