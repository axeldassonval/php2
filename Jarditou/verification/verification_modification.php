<?php
if($_POST)
{	
	$erreur=false;
	//=========================================================================================================================================================
	$pro_cat_id = $_POST["pro_cat_id"];
	//=========================================================================================================================================================
	$reference = $_POST["reference"];
	//=========================================================================================================================================================
	$libelle = $_POST["libelle"];
	//=========================================================================================================================================================
	$prix = $_POST["prix"];
	//=========================================================================================================================================================
	$quantite = $_POST["quantite"];
	//=========================================================================================================================================================
	$couleur = $_POST["couleur"];
	//=========================================================================================================================================================
	$oui_ou_non = $_POST["oui_ou_non"];
	//=========================================================================================================================================================

	if(empty($reference)){
		
		echo "Veuillez saisir une reference"."<br>";
		$erreur=true;
	}
	else if(!preg_match("/[0-9a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/",$reference))
	{
		echo "format invalide reference"."<br>";$erreur=true;
	}
	else{
		echo "reference: ".$reference."<br>";
	}

	//=========================================================================================================================================================

	if(empty($libelle)){
		
		echo "Veuillez saisir un libéllé"."<br>";$erreur=true;
	}
	else if(!preg_match("/[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ0-9]+[^¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/",$libelle))
	{
		echo "format invalide libéllé"."<br>";$erreur=true;
	}
	else{
		echo "libéllé: ".$libelle."<br>";
	}
	//========================================================================================================================================================

	if(empty($prix)){
		
		echo "Veuillez saisir un prix"."<br>";$erreur=true;
	}
	else if(!preg_match("/[0-9.,]{1,9}/",$prix))
	{
		echo "format invalide prix"."<br>";$erreur=true;
	}
	else{
		echo "prix: ".$prix."<br>";
	}
	//========================================================================================================================================================

	if(empty($quantite)){
		
		echo "Veuillez saisir une quantite"."<br>";$erreur=true;
	}
	else if(!preg_match("/[0-9]{1,9}/",$quantite))
	{
		echo "format invalide quantite"."<br>";$erreur=true;
	}
	else{
		echo "quantite: ".$quantite."<br>";
	}
	//=========================================================================================================================================================

	if(empty($couleur)){
		
		echo "Veuillez saisir une couleur"."<br>";$erreur=true;
	}
	else if(!preg_match("/[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^1-9¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/",$couleur))
	{
		echo "format invalide"."<br>";$erreur=true;
	}
	else{
		echo "couleur : ".$couleur."<br>";
	}
	//========================================================================================================================================================

	if(!isset($_POST['oui_ou_non']))
	{
	 
	echo 'Cocher un bouton'."<br>";$erreur=true;
	}
	else{
		echo "bloquer : ".$_POST['oui_ou_non']."<br>";
	}
	//========================================================================================================================================================
	$date=date("Y-m-d");
	echo date("Y-m-d");

}
require "connexion_bdd.php";
$pdo=connexionBase();


if($erreur==false)
{
var_dump($_POST);

$sql = "UPDATE produits
         SET `pro_cat_id` = ".$pro_cat_id.",
          `pro_ref` = :pro_ref,
          `pro_libelle` = :pro_libelle,
           `pro_prix` = :pro_prix,
           `pro_stock` = :pro_stock,
           `pro_couleur` = :pro_couleur,
           `pro_d_modif` = '".$date."'
            WHERE pro_id=:id";

      
 


$stmt = $pdo->prepare($sql);
$stmt->bindValue(':pro_ref', $reference, PDO::PARAM_STR);
$stmt->bindValue(':pro_libelle', $libelle, PDO::PARAM_STR);
$stmt->bindValue(':pro_prix', $prix, PDO::PARAM_STR);
$stmt->bindValue(':pro_stock', $quantite, PDO::PARAM_INT);
$stmt->bindValue(':pro_couleur', $couleur, PDO::PARAM_STR);
$stmt->bindValue(':id', $_POST["id"], PDO::PARAM_INT);
$stmt->execute();

header("Location:tableau.php");
exit;

}
?>