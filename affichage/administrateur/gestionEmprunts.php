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
    <div class="container margtop">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            Liste des livres en cours d'emprunt
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Titre</th>
                  <th scope="col">Auteur</th>
                  <th scope="col">Date d'emprunt</th>
                  <th scope="col">Date de retour limite</th>
                  <th scope="col">Mail de l'emprunteur</th>
                  <th scope="col">Rendre</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th >Test</th>
                  <td>Mark</td>
                  <td>21/05/2019</td>
                  <td>31/05/2019</td>
                  <td>t.moc@gmail.com</td>
                  <td><label for="ISBN">ISBN</label>
                <input type="text" class="form-control" id="ISBN"> 
                    <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Ok</button>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
  </body>
</html>

