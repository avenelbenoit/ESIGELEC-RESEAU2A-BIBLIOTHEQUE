<?php
  if(isset($_SESSION['numero'])){$numero=$_SESSION['numero'];}else{$numero="";}
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/reseau/index.php">bibliotheque</a>
    <ul class="nav nav-center">
      <li><?php echo $Name?></li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      
        <li class="nav-item">
          <a class="nav-link" href="">Page1</a><!-- Modifier ici le nom de la page et son lien -->
          </li>
        <li class="nav-item">
          <a class="nav-link" href="">Page2</a><!-- Modifier ici le nom de la page et son lien -->
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/reseau/index.php?deconnexion">Deconnexion</a>
        </li>
      </ul>
    </div>

    
  </div>
</nav>