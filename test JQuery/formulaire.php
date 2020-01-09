<?php session_start(); ?>
<!DOCTYPE html>
<!--referencement de la langue du site-->
<html lang="fr">
	<!--début de head-->
	<head>
		<!-- lien css-->
		<link href="jQuery_form.js">
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
		include 'entete_de_page.php';
		include 'php_navbarre.php';
		?>
 <!--debut prog formulaire-->
 		<div class="row p-4">
 			<div class="col-3 hiden-xs ">
 				</div>	
				<form action="validation_formulaire.php" method="post"> 

					<fieldset>
					 <legend>Coordonnées</legend>
					 <div class="row">
			   			<div class="col-2">
			   				<P>Nom*:</P>
			   			</div>
			   				<div class="col-3">
			   					<input type="text" name="nom" id="nom" required=""> 
			   					<span id="aideNom"><span/>
			   				</div>
			   			</div>
			   				<div class="row">
			   			<div class="col-2">
			   				<p>Prenom*:</p>
			   			</div>
			   				<div class="col-3">
			   					<input type="text" name="prenom" id="prenom" required="">
			   					<span id="aidePrenom"><span/>
			   				</div>
			   			</div>	
			   			<div class="row">
				   			<div class="col-2">
				   				<p>Sexe*:</p>
				   			</div>
							<div class="col-3 form-inline ">
								<input type="radio" id="choix1" name="genre" value="Homme" required="">
							<label for="choix1">masculin</label> 
							   
							<input type="radio" id="choix2" name="genre" value="femme">
							<label for="choix2">féminin</label>	
							<span id="aideGenre"></span>
							</div>			  
						</div>
						<div class="row">	
						<div class="col-2">
							<p>Date de naissance*: </p>
						</div>
							<div class="col-3">
								<input type="date" name="ddn" max="2019-12-25" min="1900-01-01" id="date" required>
								<span id="aideDate"><span/>
							</div>
						</div>
							<div class="row">
						<div class="col-2">
							<p>Code postal:</p>
						</div>
							<div class="col-3">
								<input type="text"  name="codepostal" id="codePostal">
								<span id="aideCodePostal"><span/>
							</div>
						</div>
							<div class="row">
						<div class="col-2">
							<p>Adresse:</p>
						</div>
							<div class="col-3">
								<input type="text"  name="adresse" id="adresse" >
								<span id="aideAdresse"><span/>
							</div>
						</div>
							<div class="row">
						<div class="col-2">
							<p>Ville:</p>
						</div>
							<div class="col-3">
								<input type="text"  name="ville" id="ville">
								<span id="aideVille"></span>
							</div>
						</div>
							<div class="row">								
					 	<div class="col-2">
					 		<p>Email*:</p>
					 	</div> 
					 		<div class="col-3">
					 			<input type="email" name="email" id="Email" required>
					 			<span id="aideEmail"><span/>
					 		</div>
					 	</div>
				
					</fieldset>
					<br>
					<fieldset>
						<legend>Votre demande</legend>
							<p>
								Sujet:
								<select name="choix_commentaire"> 
				    			<option>Mes comande</option>
				    			<option>Reclamation</option>
				    			<option>Aides</option>
								</select>
							</p>
						<p>Vos comentaire:<br><textarea name="commentaire" rows="10" cols="50"></textarea>
					</fieldset>
					<p><input type="checkbox" name="validation" value="validation" id="traitement" required="checked"> J'accepte le traitements informatique de mes données</p>
					<span id="aideTaitement"></span>
					<p><input type="submit" value="Envoyer" id="bouton">	<input type="reset" value="annuler"></p>
				</form>
			 	</div>
			<div class="col-3 hiden-xs">
 				</div>
		</div>	

		<?php
		include 'bas_de_pages.php'
		?>






		 <!--lien necessaire a boostrap-->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- fin body-->
		<script src="jQuery_form.js"></script>
	</body>
</html>		
