<?php
include "view/templates/navbar.php";

?>
 <style type="text/css">
    * {
      margin: 0;
    }

    #jumbotronCover {
      background-attachment: static;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
    }
  </style>
  <div class="row">
    <div class="" style="height: 60px; background-color: black;"></div>
    <div class="col-12" style="background-color: black;">
      <h2></h2>
      <div id="jumbotronCover" class="jumbotron bg-cover">
        <div class="container text-white">
          <h1 class="display-4">ERROR de connexion</h1>
          <p class="lead">Il faut un email et un message valides pour soumettre le formulaire.</p>
          <hr class="my-4">
          <p>Vous pouvez retourner sur la page d'accueil</p>
          <a class="btn btn-primary btn-lg" href="index.php" role="button">Accueil</a>
        </div>
        <-- /.container -->
      </div>
    </div>

    <?php
    include "view/templates/footer.php";
    ?>