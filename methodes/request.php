<?php

    function connexion($code,$conn)
    {
        $role=false;
        $reponse = $conn->query("SELECT * FROM identifiants WHERE numero='$code'");
        while ($donnees = $reponse->fetch_assoc())
        {
            $role = $donnees['role'];
        }
        return $role;
    }
?>