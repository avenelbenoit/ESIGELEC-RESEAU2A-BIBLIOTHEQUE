<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/reseau/index.php">Deconnexion</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php
          if($_SESSION['role'] == "Administrateur")
          {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="gestionDocuments.php">Documents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gestionEmprunts.php">Emprunts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gestionUtilisateurs.php">Utilisateurs</a>
            </li>
            <?php
          }else{
            ?>
              <li class="nav-item">
                <a class="nav-link" href="empruntsActuels.php">Emprunts encours</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="empruntsHistorique.php">Historique emprunts</a>
              </li>
            <?php
          }
        ?>
      </ul>
    </div>

    
  </div>
</nav>