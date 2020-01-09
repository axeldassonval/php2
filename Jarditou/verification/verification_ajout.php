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
	//securité

	// On met les types autorisés dans un tableau (ici pour une image)
	$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff","image/jfif");
	 
	// On extrait le type du fichier via l'extension FILE_INFO 
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
	$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
	finfo_close($finfo);
	 
	if (in_array($mimetype, $aMimeTypes))
	{
	  // Le code suivant récupère l'extension ('jpg')
  	$extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1);         
	} 
	else 
	{
	   // Le type n'est pas autorisé, donc ERREUR
	 
	   echo "Type de fichier non autorisé";    
	   exit;
	}  

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
	else if(!preg_match("/[0-9]{1,9}/",$prix))
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
require '../connexion_bdd.php';
$pdo=connexionBase();


if($erreur==false)
{
$stmt = $pdo->prepare("INSERT INTO produits (`pro_cat_id`, `pro_ref`, `pro_libelle`, `pro_prix`, `pro_stock`, `pro_couleur`, `pro_photo`, `pro_d_ajout`) VALUES (".$pro_cat_id.", :pro_ref, :pro_libelle, :pro_prix, :pro_stock, :pro_couleur,:pro_photo, '".$date."')");
$stmt->bindValue(':pro_ref', $reference, PDO::PARAM_STR);
$stmt->bindValue(':pro_libelle', $libelle, PDO::PARAM_STR);
$stmt->bindValue(':pro_prix', $prix, PDO::PARAM_STR);
$stmt->bindValue(':pro_stock', $quantite, PDO::PARAM_INT);
$stmt->bindValue(':pro_couleur', $couleur, PDO::PARAM_STR);
$stmt->bindValue(':pro_photo', $extension, PDO::PARAM_STR);
$stmt->execute();

$id=$pdo->lastInsertID();

move_uploaded_file($_FILES["fichier"]["tmp_name"], "asset/image/$id.$extension");


header("Location:../tableau.php");
exit;

}
?>