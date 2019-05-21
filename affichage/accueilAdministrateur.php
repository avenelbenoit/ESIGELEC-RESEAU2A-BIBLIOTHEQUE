<?php
    include("../traitement/accueilAdministrateur");
include("navbar.php");
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
    <div class="container margtop">
      <div class="row">
      </div>
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
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            Gestion d'utilisateur
          <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Créer</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><label for="exampleInputEmail1">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" > </li>
                    <li><button type="button" class="btn btn-lg btn-block btn-outline-primary">Badge</button></li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Créer</button>
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
                    <li><button type="button" class="btn btn-lg btn-block btn-outline-primary">Nouveau badge</button></li>
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
                    <li><button type="button" class="btn btn-lg btn-block btn-outline-primary">Badge</button></li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Supprimer</button>
              </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            Gestion de documents
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
                <h4 class="my-0 font-weight-normal">Modifier</h4>
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
                    <button type="button" class="btn btn-lg btn-block btn-primary">Modifier</button>
              </div>
            </div>
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Supprimer</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><label for="ISBN">ISBN</label>
                    <input type="text" class="form-control" id="ISBN"> </li>
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

