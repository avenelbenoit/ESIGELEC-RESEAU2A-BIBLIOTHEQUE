<?php
  session_start();
  include("../navbar.php");
  include("../../methodes/methodes.php");
  include("../../methodes/request.php");
  include("../../traitement/administrateur/gestionEmprunts.php");
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nav-bar responsive">
    <meta name="author" content="Avenel B. / Magne M.A.">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/homestyle.css" rel="stylesheet">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <title>Gestion Emprunts</title>
    <link rel="icon" type="img/png" href="../../img/favicon.png" />
  </head>
  <body>
    <div class="container-fluid  margtop">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <table class="table table-striped tableContainer" style="text-align:center">
              <thead class="thead-dark">
                <tr>
                  <th>Titre</th>
                  <th>Auteur</th>
                  <th>Date d'emprunt</th>
                  <th>Date de retour limite</th>
                  <th>Mail de l'emprunteur</th>
                  <th>ISBN</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php
                displayDatas();
              ?>
              </tbody>
            </table>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
  </body>
</html>

