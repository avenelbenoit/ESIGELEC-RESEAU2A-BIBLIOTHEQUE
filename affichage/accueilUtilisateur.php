<?php
    include("../traitement/accueilUtilisateur");
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nav-bar responsive">
    <meta name="author" content="Avenel B. / Magne M.A.">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/homestyle.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <title>Accuei</title>
    <link rel="icon" type="img/png" href="../img/favicon.png" />
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/reseau/index.php">bibliotheque</a>
      </div>
	<a href="traitement/deconnexion.php"><button type="button" class="btn btn-primary">Se dÃ©connecter</button></a>
    </nav>
    <div class="container margtop">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            Liste des livres en cours d'emprunt
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Titre</th>
                  <th scope="col">Auteur</th>
                  <th scope="col">Date d'emprunt</th>
                  <th scope="col">Date de retour limite</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Test</th>
                  <td>Mark</td>
                  <td>21/05/2019</td>
                  <td>31/05/2019</td>
                </tr>
              </tbody>
            </table>
            Historique des lives empruntés
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Titre</th>
                  <th scope="col">Auteur</th>
                  <th scope="col">Date d'emprunt</th>
                  <th scope="col">Date de retour</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
  </body>
</html>

