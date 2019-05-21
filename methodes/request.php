<?php

    function connexion($numero,$conn)
    {
        $role="";

        $reponse = $conn->query("SELECT * FROM identifiants WHERE numero='$numero'");

        while ($donnees = $reponse->fetch())
        {
            echo $donnees['role'] . '<br />';
        }
        
        $reponse->closeCursor();



        /*$result = $conn->query("SELECT * FROM identifiants WHERE numero='$numero'");
        $req = mysql_query($result);
        // on fait une boucle qui va faire un tour pour chaque enregistrement 
        while($data = mysql_fetch_assoc($req)) 
        { 
            // on affiche les informations de l'enregistrement en cours 
            $role = $row['role'];

        } 

        // on ferme la connexion à mysql 
        mysql_close(); 
        return $role;*/
    }

?>