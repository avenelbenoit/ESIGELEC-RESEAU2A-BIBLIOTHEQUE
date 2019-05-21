<?php
session_start();
if(isset($_SESSION['connect'])){
  include("../methodes/methodes.php");
}else { header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nav-bar responsive">
    <meta name="author" content="Avenel B. / Magne M.A.">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/homestyle.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Index</title>
    <link rel="icon" type="img/png" href="img/favicon.png" />
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/reseau/index.php">bibliotheque</a>
      </div>
	<a href="traitement/deconnexion.php"><button type="button" class="btn btn-primary">Se déconnecter</button></a>
    </nav>
    <div class="container margtop">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="avatar"><i class="material-icons">library_books</i></div>
              <a class="btn btn-primary btn-sm" href="traitement/newLivre.php">Emprunter un livre</a>
            </div>
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
  </body>
</html>

