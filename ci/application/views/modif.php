<!DOCTYPE html>
<html>
<head>
	<title>détails</title>
	<!--connexion css-->
	<!--<link rel="stylesheet" href="css/style.css" />-->
				<!-- lien boostrap-->
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!--meta de compréhension symbole-->
		<meta charset="utf-8" />
		<!--meta d'hadaptation de reduction taille de pages-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--titre de page-->
		<title>Jarditou</title>
</head>
<body>
<?php echo form_open_multipart(); ?>
	<form>
		<div class="row text-center">	
			<div class="col-12 text-center">
			 <?php $path = base_url("assets/image/".$produits->pro_id.".".$produits->pro_photo); ?>
			<img src='<?= $path ?>'width= "25%" height= "auto">
			</div>
			<div class="col-12"><br></div>

			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Id:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_id" value="<?= $produits->pro_id; ?>"><br>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Référence:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			
			<input type="text" name="pro_ref" value="<?= $produits->pro_ref; ?>"><br>
			
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Libéllé:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_libelle" value="<?= $produits->pro_libelle; ?>"><br>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Prix:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_prix" value="<?= $produits->pro_prix; ?>"><br>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Quantité:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_stock" value="<?= $produits->pro_stock; ?>"><br>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Couleur:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_couleur" value="<?= $produits->pro_couleur; ?>"><br>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Date d'ajout:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_d_ajout" value="<?= $produits->pro_d_ajout; ?>"><br>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Date de modification:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_d_ajout" value="<?= $produits->pro_d_modif; ?>"><br>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Bloquer:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_ref" value="<?= $produits->pro_bloque; ?>"><br>
			</div>

			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Categorie:</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<input type="text" name="pro_cat_id" value="<?= $produits->cat_nom; ?>"><br>
			</div>     
			<!--=================================================================================================================-->
			<div class="col-12 row">
			<div class="col-2">
				<p>Description:</p>
			</div>
			<div>
			<textarea type="text" name="pro_description" rows="5%" cols="80" style="padding-right: 0px"><?= $produits->pro_description; ?></textarea><br>
			</div>
			</div>
		<div class="col-12"><input type="submit" value="Modifier"><br><br></div>
	</form>
<!--lien necessaire a boostrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!--fin de body-->	
</body>
</html>