<?php 
session_start();

if ($_POST)
{
	$loginEntrer=$_POST["login"];
	$passEntrer=$_POST["pass"];
	$valider=$_POST["valider"];
	$erreur = "";

	

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
	var_dump($utilisateur);
	//$utilisateur->mdp me premet de selectioner le mot de passe uniquement renvoyer part le fetch
	if($utilisateur != FALSE && password_verify($passEntrer, $utilisateur->MDP) == TRUE) 
	{
		$_SESSION["autoriser"]="oui";
       header("location:Index.php");
       exit;
 	} else {
 		header("location:Login.php");
       exit;
 	}
}	
?>