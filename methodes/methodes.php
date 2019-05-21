<script>


</script>

<?php

    function checkidentification(){ // Permet de s'assurer que l'utilisateur est bien connecté lorsqu'il cherche à accéder au site
        if(!isset($_SESSION['role']))
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
      if(!isset($_SESSION['role']) || $_SESSION['role'] != "Administrateur")
      {
          ?>
          <script>
              window.location.href="/reseau/index.php?pbIdentification";   
          </script>
          <?php
          exit;
        }
      }

    function getURL(){ // Permet d'afficher les alertes bootstrap si elles sont présentes dans l'URL
        if(isset($_GET['deconnexion']))
        {
          echo"
            <div class='col-lg-12'>
              <div class='alert alert-success' style='text-align:center;'>
                Vous êtes maintenant déconnecté.
              </div>
            </div>";
        }
        if(isset($_GET['pbIdentification']))
        {
          echo"
            <div class='col-lg-12'>
              <div class='alert alert-danger' style='text-align:center;'>
                Vous devez vous identifier pour accéder au site.
              </div>
            </div>";
        }
        if(isset($_GET['pbLogin']))
        {
          echo"
            <div class='col-lg-12'>
              <div class='alert alert-danger' style='text-align:center;'>
                Votre badge ne semble pas être connu
              </div>
            </div>";
        }
    }

?>