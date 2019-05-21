<?php

	session_start();
	$code = exec("sudo ./reader");
	$code = "1ce5142b";
	shell_exec("sudo ./buzzer.sh 0,5");
	$_SESSION['numero']=$code;
	require_once("../methodes/db_connection.php");
	require_once("../methodes/request.php");
	try{
		$role=connexion($code,$conn);
		if(strpos($role, 'Utilisateur') !== false){
			$_SESSION['role']='Utilisateur';
			header("Location: ../affichage/utilisateur/empruntsActuels.php");
		}
		else if(strpos($role, 'Administrateur') !== false){
			$_SESSION['role']='Administrateur';
			header("Location: ../affichage/administrateur/gestionEmprunts.php");
		}else{
			header("Location: ../index.php?pbLogin");
		}
	}catch(Exception $e){
		die('Erreur : ' .$e->getMessage()) or die(print_r($bdd->errorInfo()));
	}

?>
