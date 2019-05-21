<?php
    checkAdministrateur();
    
    function displayDatas()
    {
        // Modifier ici valeur 10
        for($i=0;$i<    10   ;$i++)
        {
            // Modifier ici les données via $_SESSION
            $titre="sdqfsqdf";
            $auteur = "dsqfqsdf";
            $dateEmprunt="01/10/0254";
            $dateRetour = "01/10/0254";
            $email = "dsqfqsdf@qsdfsq";

            echo "
                <tr>
                  <td>$titre</td>
                  <td>$auteur</td>
                  <td>$dateEmprunt</td>
                  <td>$dateRetour</td>
                  <td>$email</td>
                  <td><input type='text' class='form-control' id='ISBN$i'></td>
                  <td><button id=$i class='btn btn-md btn-block btn-outline-primary' onclick=submitISBN(this.id)>Ok</button></td>
                </tr>";
        }
    }
?>
<script>
    function submitISBN(id)
    {
        var isbnInput = "ISBN"+id;
        var isbn = document.getElementById(isbnInput).value;
        if(isbn.length>2)
        {
            // Suppression dans la BDD de ISBN
        }
    }
</script>