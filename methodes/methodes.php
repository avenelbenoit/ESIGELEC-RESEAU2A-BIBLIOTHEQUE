<script>


</script>

<?php

    function checkidentification(){ // Permet de s'assurer que l'utilisateur est bien connecté lorsqu'il cherche à accéder au site
        if(!isset($_SESSION['connecte']) || $_SESSION['connecte'] != true)
        {
            ?>
            <script>
                window.location.href="/reseau/index.php?pbIdentification";   
            </script>
            <?php
            exit;
        }
    }
    function checkAdministrateur(){ // Permet de s'assurer que l'utilisateur est bien connecté lorsqu'il cherche à accéder au site
      if(!isset($_SESSION['Administrateur']) || $_SESSION['Administrateur'] != true)
      {
          ?>
          <script>
              window.location.href="/reseau/accueilUser?pbDroits";   
          </script>
          <?php
          exit;
        }
      }

    function getURL(){ // Permet d'afficher les alertes bootstrap si elles sont présentes dans l'URL
        if(isset($_GET['deconnexion']))
        {
          echo"
            <div class='col-lg-3'></div>
            <div class='col-lg-6'>
              <div class='alert alert-success' style='text-align:center;'>
                Vous êtes maintenant déconnecté.
              </div>
            </div>
            <div class='col-lg-3'></div>";
        }
        if(isset($_GET['pbIdentification']))
        {
          echo"
            <div class='col-lg-3'></div>
            <div class='col-lg-6'>
              <div class='alert alert-danger' style='text-align:center;'>
                Vous devez vous identifier pour accéder au site.
              </div>
            </div>
            <div class='col-lg-3'></div>";
        }
    }

?>