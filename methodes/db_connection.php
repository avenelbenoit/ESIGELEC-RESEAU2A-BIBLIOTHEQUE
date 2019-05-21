<?php

header("Content-Type: text/html;charset=utf-8");

///////////////////////// DATABASE CONNECTION

$servername = "localhost";
$username = "root";
$password = "raspberry";
$dbname = "bibliotheque"; // Modifier ici le nom de la base

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$accents = $conn->query("SET NAMES 'utf8'");
?>