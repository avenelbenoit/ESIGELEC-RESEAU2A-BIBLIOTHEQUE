<?php
    $code = exec("sudo ./reader");
    header("Location: ../connexion?numero=$code");
?>