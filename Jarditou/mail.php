<?php 

if($_POST){
 
	$url = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/Session";
    

	//=============================================================================================================================================================
	$contenue= ' <!DOCTYPE html>
<!--referencement de la langue du site-->
<html lang="fr">
	<!--début de head-->
	<head>
		<!-- lien boostrap-->
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!--meta de compréhension symbole-->
		<meta charset="utf-8" />
		<!--meta d\'adaptation de reduction taille de pages-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--titre de page-->
		<title>Jarditou</title>
		<style>
			html 
			{
			   font-size: 100%;
			}
			 
			body 
			{
			    font-size: 1rem; /* Si html fixé à 100%, 1rem = 16px = taille par défaut de police de Firefox ou Chrome */
			}
		</style>  
		<!--fin de head-->
	</head>




	<!--debut de mon body-->
	<body class="container p-0">

		<?php
		include "entete_de_page.php";
		include "php_navbarre.php";
		?>
				    <!--fin de nav-->
		<div class="container">
		    <div class="row">
		    	<div class="col-12">
		          <h1>Mail de securiter</h1>
		    	</div>    
		    </div>      
		    <div class="row">
		    	<div class="col-12">
		          <p>Ce mail vous a etais envoyer car une demande de changement de mot de passe a etais effectuer sure votre compte.<br>
		          Ignorer le si vous n\'ete pas a l\'origine de se mot de passe. </p> <br>

		         <a href="'.$url.'/changement_du_mot_de_passe.php"></a>
		    	</div>    
		    </div>      
		    <div class="row">
		    	<div class="col-12">
		         	<img src="jarditou_logo.jpg" title="Logo" alt="Logo" class="img-fluid">
		    	</div>    
		    </div>      
		</div> 

		<?php
		include "bas_de_pages.php";
		?>
		 <!--lien necessaire a boostrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--fin de body-->
	</body>
	<!--fin html-->
</html>';
//=================================================================================================================================================================
	$login=$_POST["login"];
	$email=$_POST["email"];
	date_default_timezone_set('Europe/Paris');
	$date= date("Y-m-d H:i:s");

	$parametre=array('MIME-Version' => '1.0',
                   'Content-Type' => 'text/html; charset=utf-8',
                   'From' => 'Securité <securité@jarditou.com>',
                   'Reply-To' => 'Service commercial <securité@jarditou.com>',
                   'X-Mailer' => 'PHP/' . phpversion()
                   );
require "connexion_bdd.php";
	$pdo=connexionBase();

	$bdd = $pdo->prepare("SELECT * FROM utilisateur WHERE login=:login");
	$bdd->bindValue(':login', $login, PDO::PARAM_STR);
	
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
	if($utilisateur != FALSE && $email == $utilisateur->email ) 
	{
		mail($utilisateur->email,"Mot de passe oublier",$contenue,$parametre);
	}

}

?>