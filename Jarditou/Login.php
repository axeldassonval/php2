<?php 
session_start();
$faux=FALSE;
if ($_POST)
{
	$loginEntrer=$_POST["login"];
	$passEntrer=$_POST["pass"];
	$valider=$_POST["valider"];
	$erreur = "";
	date_default_timezone_set('Europe/Paris');
	$date = date("Y-m-d H:i:s");
	

	require "connexion_bdd.php";
	$pdo=connexionBase();

	$bdd = $pdo->prepare("SELECT * FROM utilisateur WHERE login=:login");
	$bdd->bindValue(':login', $loginEntrer, PDO::PARAM_STR);
	
	try 
	{
	   $bdd->execute();
	} 
	catch (Exception $e) 
	{
	        echo 'Erreur : ' . $e->getMessage() . '<br>';
	        echo 'N° : ' . $e->getCode() . '<br>';
	        die('Connexion au serveur impossible.');
	 }  
	// le fetch me renvoie mes donner du login
	$utilisateur = $bdd->fetch();
	//var_dump($utilisateur);
	//$utilisateur->mdp me premet de selectioner le mot de passe uniquement renvoyer part le fetch
	if($utilisateur != FALSE && password_verify($passEntrer, $utilisateur->MDP) == TRUE) 
	{
		//recuperation de donner en tableau
		/*
		$_SESSION["nom"] = $utilisateur["nom"];
		$_SESSION["prenom"]= $utilisateur["prenom"];
		$_SESSION["login"]= $utilisateur["login"];
		$_SESSION["inscription"]= $utilisateur["inscription"];
		$_SESSION["email"]= $utilisateur["email"];
		$_SESSION["role"]= $utilisateur["role"];
		*/
 		//recuperation de donner en objet 
        $_SESSION["utilisateur"] = $utilisateur;
		$_SESSION["autoriser"]="oui";
		$pdo=connexionBase();
		$derniereConnexion = $pdo->prepare("UPDATE utilisateur SET derniere_connexion= '".$date."' WHERE id ='".$_SESSION["utilisateur"]->id."'");
		$derniereConnexion->execute();
       header("Location:Index.php");
       exit;
 	}else{
 		$faux=TRUE;
 	}
}

?>



<!DOCTYPE html>
<!--referencement de la langue du site-->
<html lang="fr">
	<!--début de head-->
	<head>
		<!-- lien boostrap-->
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!--meta de compréhension symbole-->
		<meta charset="utf-8" />
		<!--meta d'hadaptation de reduction taille de pages-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--titre de page-->
		<title>Jarditou</title>
		<!--fin de head-->
	</head>

	<!--debut de mon body-->
	<body class="container p-0">
		<?php
		include 'include/entete_de_page.php';
		include 'include/php_navbarre.php';
		?>
		
		<form name="Session" method="post" action="Login.php">
		
			<div class="label">Login</div>
			<input type="text" name="login" value=""> <br>
			<?php if($faux==TRUE){ ?>
			 <p class="text-danger"><?php echo "Erreur de login ou password"; ?></p> <?php } ?>
			<br>
			<div class="label">Mot De Passe</div>
			<input type="password" name="pass" > <br>
			<?php if($faux==TRUE){ ?>
			 <p class="text-danger"><?php echo "Erreur de login ou password"; ?></p> <?php } ?>
			<br>
			<input type="submit" name="valider" value="S'authentifier">
		</form>

		<?php
		include 'include/bas_de_pages.php'
		?>

		<!--lien necessaire a boostrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- fin body-->
		<script src="js/eval_formulaire.js"></script>
	</body>
	
</html>		