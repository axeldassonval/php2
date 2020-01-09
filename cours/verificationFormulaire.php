<?php 
class verificationFormulaire{
	//generale
	private $erreur= false;
	private $nom=$_POST["nom"];
	private $prenom=$_POST["prenom"];
	private $dateDeNaissance=$_POST["dateDeNaissance"];
	private $email=$_POST["email"];
	private $ville=$_POST["ville"];
	private $code_postal=$_POST["code_postal"];
	private $adresse=$_POST["adresse"];
	//compte Web
	private $login=$_POST["login"];
	private $motDePasse=$_POST["motDePasse"];
	private $verificationMotDePasse=$_POST["verificationMotDePasse"];

//debut de la galère

	public function regex(){
		 if (!preg_match("/[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^1-9¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/",$nom)) {
			$erreur= true;
		} else {$erreur= false;}
		
		return $erreur;
	}

}
?>