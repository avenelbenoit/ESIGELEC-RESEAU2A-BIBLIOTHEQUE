<?php
  session_start();
  include("../navbar.php");
  include("../../methodes/methodes.php");
  include("../../methodes/request.php");
  include("../../traitement/Administrateur/gestionDocuments.php");
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
    <title>Gestion Documents</title>
    <link rel="icon" type="img/png" href="../../img/favicon.png" />
  </head>
  <body>
    <div class="container margtop">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Créer</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><label for="ISBN">ISBN</label>
                    <input type="text" class="form-control" id="ISBN"> </li>
                    <li><label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre"> </li>
                    <li><label for="auteur">Auteur</label>
                    <input type="text" class="form-control" id="auteur"> </li>
                    <li><label for="nbExemplaire">Nombre d'exemplaire</label>
                    <input type="text" class="form-control" id="nbExemplaire"> </li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Créer</button>
              </div>
            </div>
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Supprimer</h4>
              </div>
              <div class="card-body" style="margin-top:60%">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><label for="ISBN">ISBN</label>
                    <input type="text" class="form-control" id="ISBN"> </li>
                  </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Supprimer</button>
              </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </body>
</html>

