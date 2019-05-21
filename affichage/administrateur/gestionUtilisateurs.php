<?php
  session_start();
  include("../navbar.php");
  include("../../methodes/methodes.php");
  include("../../methodes/request.php");
  include("../../traitement/Administrateur/gestionUtilisateurs.php");
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
    <title>Gestion Utilisateurs</title>
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
                    <li><label for="exampleInputEmail1">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" > </li>
                    <li><button type="button" class="btn btn-lg btn-block btn-outline-primary small-margtop">Badge</button></li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Créer</button>
              </div>
            </div>
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Modifier</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><label for="exampleInputEmail1">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" > </li>
                    <li><button type="button" class="btn btn-lg btn-block btn-outline-primary small-margtop">Nouveau badge</button></li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Modifier</button>
              </div>
            </div>
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Supprimer</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><button type="button" style="margin-top:50%" class="btn btn-lg btn-block btn-outline-primary">Badge</button></li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Supprimer</button>
              </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </body>
</html>

