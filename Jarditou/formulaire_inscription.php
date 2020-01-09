<?php session_start(); ?>
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
 		
 			
 			
	 		
				<form action="verification/verification_inscription.php" method="post"> 
			 
			   			 
					
					<fieldset>
					 <legend>Inscription</legend>
					 <br>
					 <div class="row">
			   			<div class="col-12">
			   				<P>Nom:</P>
			   			</div>
			   				<div class="col-12">
			   					<input type="text" name="nom" id="nom" required=""> 
			   					<span id="aideNom"><span/>
			   				</div>
			   			</div>
			   			<br>
			   			<div class="row">
				   			<div class="col-12">
				   				<p>Prenom:</p>
				   			</div>
				   				<div class="col-12">
				   					<input type="text" name="prenom" id="Prenom" required="">
				   					<span id="aidePrenom"><span/>
			   				</div>
			   			</div>	
					 <br>
					 <div class="row">
			   			<div class="col-12">
			   				<P>login:</P>
			   			</div>
			   				<div class="col-12">
			   					<input type="text" name="login" id="login" required=""> 
			   					<span id="aideNom"><span/>
			   				</div>
			   			</div>
			   			<br>
			   			<div class="row">
				   			<div class="col-12">
				   				<p> mot de passe:</p>
				   			</div>
				   				<div class="col-12">
				   					<input type="password" name="MDP" id="MDP" required="">
				   					<span id="aidePrenom"><span/>
			   				</div>
			   			</div>
			   			<br>	
			   			<div class="row">
				   			<div class="col-12">
				   				<p> Verification du mot de passe:</p>
				   			</div>
				   				<div class="col-12">
				   					<input type="password" name="VMDP" id="VMDP" required="">
				   					<span id="aidePrenom"><span/>
			   				</div>
			   			</div>
			   			<br>
			   			<p>Email*:</p>
					 	</div> 
					 		<div class="col-12">
					 			<input type="email" name="email" id="Email" required>
					 			<span id="aideEmail"><span/>
					 		</div>
					 	</div>
					</fieldset>
					<br>
					<p><input type="checkbox" name="validation" value="validation" id="traitement" required="checked"> Jaccepte de vous vendre mon ames et de me faire spam de pub</p>
					<span id="aideTaitement"></span>
					<p><input type="submit" value="Envoyer" id="bouton">	<input type="reset" value="annuler"></p>
				</form>
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