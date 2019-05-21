<?php

session_start();
$code = exec("sudo ./reader");
shell_exec("sudo ./buzzer.sh 0,5");
require_once("db_connection.php");

try{
	$bdd = new PDO($dsn,$username,$password);
	$sql="SELECT * FROM livres WHERE numero = :code";
	$stmt = $bdd->prepare($sql);
	$stmt -> bindValue(':code',$code);
	$stmt->execute();
	$user = $stmt ->fetch(PDO::FETCH_ASSOC);
	if($user == false){
		$_SESSION['erreur']="Le livre ne semble pas être connu";
		header("Location: ../compte.php");
	}
	else{
		$sql="SELECT * FROM livres WHERE numero = :code";
		$stmt = $bdd->prepare($sql);
		$stmt -> bindValue(':code',$code);
		$stmt->execute();
		$user = $stmt ->fetch(PDO::FETCH_ASSOC);
		if($user == false){
		$_SESSION['message']='Emprunt enregistré';
		header("Location: ../compte.php");
	}
}catch(Exception $e){
	die('Erreur : ' .$e->getMessage()) or die(print_r($bdd->errorInfo()));
}





?>
