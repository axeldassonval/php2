<?php

if($_POST)
{
		require "connexion_bdd.php";

		$erreur=true;
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$email=$_POST["email"];
		$login=$_POST["login"];
		$MDP=$_POST["MDP"];
		$VMDP=$_POST["VMDP"];

		if (empty($nom)) {
			echo "veuiller entrer votre nom"."<br>";
		}
		else if (!preg_match("/[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^1-9¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/",$nom)) {
			echo "format invalide nom"."<br>";
		}
		else
		{
				echo "Nom: ".$nom."<br/>";
		}

	//======================================================================================================
	if (empty($prenom)) {
			echo "veuiller entrer votre prenom"."<br>";$erreur=false;
		}
		else if (!preg_match("/[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^1-9¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/",$prenom)) {
			echo "format invalide prenom"."<br>";$erreur=false;
		}
		else
		{
				echo "Nom: ".$prenom."<br/>";
		}

	//======================================================================================================
		 $bErreurLogin = TRUE;

		if (empty($login)) {
			echo "veuiller entrer votre login"."<br>";$erreur=false;
			$bErreurLogin = FALSE;
		}
		
		if ($bErreurLogin == TRUE && !preg_match("/[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^1-9¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/",$login)) {
			echo "format invalide<br>";$erreur=false;
			$bErreurLogin = FALSE;
		}
		
		if ($bErreurLogin == TRUE) {
		//mettre la connexion seulement la ou cest necessaire
			$pdo=connexionBase();
			//requete preparer
			$sqlLogin =$pdo->prepare("select login from utilisateur where login = '".$login."'");
			//execute
			$sqlLogin->execute(array('login' => $login));	
	         if ($sqlLogin->rowCount() > 0) { 
				echo "login existant<br>";$erreur=false;
				$bErreurLogin = FALSE;
			}
	     }  
		if ($bErreurLogin == TRUE)
		{
				echo "login: ".$login."<br/>";
		}

	//======================================================================================================

		

		$bErreurEmail = TRUE;
		if(empty($email)){	
			echo "Veuillez saisir votre email"."<br/>";$erreur=false;
			$bErreurEmail = FALSE;
		}
		if ($bErreurEmail == TRUE && !preg_match("/.+@.+\..+/",$email))
		{
			echo "format invalide"."<br/>";$erreur=false;
			$bErreurEmail = FALSE;
		}
		if ($bErreurEmail == TRUE) {
		//mettre la connexion seulement la ou cest necessaire
			$pdo=connexionBase();
			//requete preparer
			$sqlEmail =$pdo->prepare("select email from utilisateur where email = '".$email."'");
			//execute
			$sqlEmail->execute(array('email' => $email));	
		        if ($sqlEmail->rowCount() > 0) { 
				echo "email deja utiliser<br>";$erreur=false;
				$bErreurEmail = FALSE;
			}
		    }  
		if ($bErreurEmail == TRUE)
		{
				echo "email: ".$email."<br/>";
		}
		

	//======================================================================================================
		$regex_mdp= '#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#';

		if (empty($MDP)) {
			echo "veuiller entrer votre Mots de passe"."<br>";$erreur=false;
		}
		else if (!preg_match($regex_mdp,$MDP)) {
			echo "format invalide mot de passe"."<br>";$erreur=false;
		}else if ($MDP !== $VMDP) {
			echo "la verification de votre Mots de passe est incorect"."<br>";$erreur=false;
		}
		else
		{
				echo "Mots de passe valide"."<br/>";
		}
		
	//======================================================================================================
	$inscription= date("Y-m-d");

	//======================================================================================================
}

		$pdo=connexionBase();

		if($erreur==true)
		{
			$hachageMDP= password_hash($MDP, PASSWORD_DEFAULT);

		$stmt = $pdo->prepare("INSERT INTO utilisateur(`nom`, `prenom`, `email`, `login`, `MDP`, `inscription`) VALUES (:nom, :prenom, :email, :login, :MDP, '".$inscription."')");
		$stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
		$stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR);
		$stmt->bindValue(':login', $login, PDO::PARAM_STR);
		$stmt->bindValue(':MDP', $hachageMDP, PDO::PARAM_STR);
		$stmt->execute();

		
		header("Location:accueiljarditou.php");
		exit;
}
?>