<?php
session_start();
$code = exec("sudo ./reader");
shell_exec("sudo ./buzzer.sh 0,5");
$_SESSION['numero']=$code;
require_once("db_connection.php");

try{
	$bdd = new PDO($dsn,$username,$password);
	$sql="SELECT * FROM identifiants WHERE numero = :code";
	$stmt = $bdd->prepare($sql);
	$stmt -> bindValue(':code',$code);
	$stmt->execute();
	$user = $stmt ->fetch(PDO::FETCH_ASSOC);
	if($user == false){
		$_SESSION['erreur']="Votre badge ne semble pas être connu";
		header("Location: ../index.php");
	}
	else{
		$_SESSION['connect']='oui';
		header("Location: ../compte.php");
	}
}catch(Exception $e){
	die('Erreur : ' .$e->getMessage()) or die(print_r($bdd->errorInfo()));
}

//echo $code;
//header("Location: connexion.php?numero=$code");
?>
