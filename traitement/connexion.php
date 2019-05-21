<?php
	session_start();
	include("../methodes/db_connection.php");
	include("../methodes/request.php");

	if(isset($_SESSION['numero']))
	{
		//echo $numero = $_GET['numero'];
		//$_SESSION['numero'] = $numero;
	}else
	{
		header('Location: ../index.php?pbIdentification');
		exit;
	}
	//echo $role = connexion($numero,$conn);

	/*if($role == 'Administrateur') // Si l'utilisateur est renseigné en tant qu'adminsitrateur dans la BDD
	{
		$_SESSION['connecte'] = true;
		$_SESSION['Administrateur'] = true;
        header('Location: ../affichage/accueilAdministrateur.php');
	}else if($role=='Utilisateur') // Sinon, il est utilisateur
	{ 
		$_SESSION['connecte'] = true;
		$_SESSION['Utilisateur'] = true;
        header('Location: ../affichage/accueilUser.php');
    }else{
		header('Location: ../index.php?pbIdentification');
		exit;
	}*/
  
	
?>

