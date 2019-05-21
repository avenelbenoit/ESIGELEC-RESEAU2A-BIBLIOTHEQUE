<?php
  session_start();
  session_destroy();
  include("methodes/methodes.php");
  include("methodes/db_connection.php");
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
    </nav>
    <div class="container margtop">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="login-form" style='text-align:center;'>     
            <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
              <a class="btn btn-success btn-lg" href="traitement/getKey.php">Connexion par badge</a>
            </div>
	          <?php getURL(); ?>
          </div>
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
  </body>
</html>
