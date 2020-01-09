<?php 
$erreurMDP=false;
$erreur=false;
$erreurA=false;
$erreurB=false;
if ($_POST) {

	$VMDP=$_POST["VMDP"];
	$MDP=$_POST["MDP"];
	$login=$_POST["Login"];
	$email = $_POST["email"];

	$regex_mdp= '#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#';

		if (empty($MDP)) {
			$erreurA=true;
		}
		else if (!preg_match($regex_mdp,$MDP)) {
			$erreurB=true;
		}else if ($MDP !== $VMDP) {
			echo "la verification de votre Mots de passe est incorect"."<br>";$erreurMDP=true;
		}
		else
		{
				echo "Mots de passe valide"."<br/>";
		}
		
		//verif de si les mots de passe corresponde
	if ($erreurA ==false && $erreurB==false && $erreurMDP== false ) 
	{
		$MDPH = password_hash($MDP, PASSWORD_DEFAULT);

		require "connexion_bdd.php";
		$pdo=connexionBase();
		//connexion database poure verifier le login et mdp
		$bdd = $pdo->prepare("SELECT * FROM utilisateur WHERE login=:login AND email = :email");
		$bdd->bindValue(':login', $login, PDO::PARAM_STR);
		$bdd->bindValue(':email', $email, PDO::PARAM_STR);
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
		
			if($utilisateur != FALSE && $email == $utilisateur->email && $login==$utilisateur->login) 
			{	//update du mdp dans la database
				$modif= $pdo->prepare("UPDATE utilisateur set MDP=:MDP WHERE login = :login AND email = :email");
				$modif->bindValue(':login', $login, PDO::PARAM_STR);
				$modif->bindValue(':email', $email, PDO::PARAM_STR);
				$modif->bindValue(':MDP', $MDPH, PDO::PARAM_STR);
				try 
				{
				   $modif->execute();
				} 
				catch (Exception $f) 
				{
				        echo 'Erreur : ' . $f->getMessage() . '<br>';
				        echo 'N° : ' . $f->getCode() . '<br>';
				        die('Connexion au serveur impossible.');
				 }

			}
			else
			{
				$erreur=true;
			}
	}				
} ?>



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
	<body class="container text-center p-0">
		<?php
		include 'include/entete_de_page.php';
		
		include 'include/php_navbarre.php';
		?>
 <!--debut prog formulaire-->
 		<div class="row p-4">
 			<div class="col-3 hiden-xs ">
 				</div>
 			
	 		
				<form action="changement_du_mot_de_passe.php" method="post"> 
			 
			   			 
					
					<fieldset>
						<div class="row">
				   			<div class="col-12">
				   				<p> Login:</p>
				   			</div>
				   				<div class="col-12">
				   					<input type="text" name="Login" id="Login" required="">
				   					<span id="LoginAide"><span/>
				   						<div class="text-danger"><?php if ($erreur==true) {
				   						echo "Erreur l'adresse mail ou le login sont invalide"; 
				   					} ?></div>
			   				</div>
			   			</div>
			   			<br>
			   			<div class="row">
				   			<div class="col-12">
				   				<p> E-mail:</p>
				   			</div>
				   				<div class="col-12">
				   					<input type="text" name="email" id="email" required="">
				   					<span id="emailAide"><span/>
				   						<div class="text-danger"><?php if ($erreur==true) {
				   						echo "Erreur l'adresse mail ou le login sont invalide"; 
				   					} ?></div>
			   				</div>
			   			</div>
			   			<br>	
					 	<div class="row">
				   			<div class="col-12">
				   				<p> Nouveaux mot de passe:</p>
				   			</div>
				   				<div class="col-12">
				   					<input type="text" name="MDP" id="MDP" required="">
				   					<span id="aideMDP"><span/>
				   					<div class="text-danger">
					   					<?php if ($erreurMDP==true) {
					   						echo "Erreur les Mots de Passe ne coresponde pas"; 
					   					}
					   					if ($erreurA==true) {
					   						echo "veuiller entrer votre Mots de passe"; 
					   					}
					   					if ($erreurB==true) {
					   						echo "format invalide mot de passe"; 
					   					}?>				   						
				   					</div>
			   				</div>
			   			</div>
			   			<br>	
			   			<div class="row">
				   			<div class="col-12">
				   				<p> Verification du mot de passe:</p>
				   			</div>
				   				<div class="col-12">
				   					<input type="text" name="VMDP" id="VMDP" required="">
				   					<span id="aideVMDP"><span/>
				   					<div class="text-danger">
					   					<?php if ($erreurMDP==true) {
					   						echo "Erreur les Mots de Passe ne coresponde pas"; 
					   					}
					   					if ($erreurA==true) {
					   						echo "veuiller entrer votre Mots de passe"; 
					   					}
					   					if ($erreurB==true) {
					   						echo "format invalide mot de passe"; 
					   					}?>				   						
				   					</div>
			   				</div>
			   			</div>
			   			<br>
			   			
					</fieldset>
					<br>
					
					<span id="aideTaitement"></span>
					<p><input type="submit" value="Envoyer" id="bouton">	<input type="reset" value="annuler"></p>
				</form>
			 	</div>
			<div class="col-3 hiden-xs">
 				</div>
		</div>	

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