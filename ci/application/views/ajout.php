<!DOCTYPE html>
<!--referencement de la langue du site-->
<html lang="fr">
	<!--début de head-->
	<head>
		<style type="text/css">.erreur{color: red;}</style>
		<!--connexion pdo-->
				<!-- lien boostrap-->
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!--meta de compréhension symbole-->
		<meta charset="utf-8" />
		<!--meta d'hadaptation de reduction taille de pages-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--titre de page-->
	<title>formulaire d'ajout</title>
</head>
<body class="container" style="padding: 0px">
	<?php echo form_open_multipart(); ?>
	<br/>
	<div class="row" style="padding: 5px"  enctype="multipart/form-data">

		<div class="col-12 col-lg-3 col-md-6">
			<p>reference de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="pro_ref">
			<br>
			<span class="erreur" ><?php echo form_error('pro_ref'); ?></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>libéllé de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="pro_libelle">
			<br>
			<span class="erreur" id=""><?php echo form_error('pro_libelle'); ?></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>prix de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="pro_prix">
			<br>
			<span class="erreur" id=""><?php echo form_error('pro_prix'); ?></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>quantité de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="pro_stock">
			<br>
			<span class="erreur" id=""><?php echo form_error('pro_stock'); ?></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>couleur de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="pro_couleur">
		
			<span class="erreur" id=""><?php echo form_error('pro_couleur'); ?></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>selectioner la categorie d'outils</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
				<select name="pro_cat_id" id="cat_id">
					<?php foreach ($categorie as $key => $cat) 
					{
						echo "<option value='".$cat->cat_id."'>".$cat->cat_nom."\n"; 
					}
					?>
				</select> <br>
				
				<select name="sous_cat" id="sous_cat" ><option selected disabled>sous categorie</option></select>
				<span class="erreur"><?php echo form_error('pro_cat_id'); ?></span> <br>
		</div>

		<div class="col-12 col-lg-3 col-md-6">
			<p>image a ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="file" name="fichier"> 
		</div>
		<div class="col-12"><br></div>
		<div class="col-12 row">
			<div class="col-lg-3 d-none d-lg-block"></div>
			<div class="col-12 col-lg-3 col-md-6" >
				<p>lobjet ajouter est il bloquer ?</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
				<input type="radio" name="pro_bloque" id="oui" value="oui" >
				<label for="oui" >oui</label>
				<input type="radio" name="pro_bloque" id="non" >
				<label for="non" >non</label> 
				<span class="erreur" id=""><?php echo form_error('pro_bloque'); ?></span>
			</div>
			<div class="col-lg-4 d-none d-lg-block"></div>
				<div class="d-md-none d-lg-block col-lg-5"></div>
				<div class="col-lg-1 col-md-6">
				<input type="submit" name="envoyer" value="Envoyer" id="bouton">
			</div>
				<div class="d-md-none col-sm-12"></div>
				<div class="col-lg-1 col-md-6 "><input type="reset" name="annuler" value="annuler"></p></div>
			<div class="d-md-none d-lg-block col-lg-5"></div>
		</div>
	</div>		
	</form>
	<br/>
	
	<!--lien necessaire a boostrap-->
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
		<!--fin de body-->
		<script src="ajout_join.js"></script>
</body>
</html>