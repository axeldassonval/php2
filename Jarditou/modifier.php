<?php session_start(); 
if(isset($_SESSION["utilisateur"]) && $_SESSION["utilisateur"]->role == "admin"){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modification</title>
	<!--connexion pdo-->
				<!-- lien boostrap-->
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!--meta de compréhension symbole-->
		<meta charset="utf-8" />
		<!--meta d'hadaptation de reduction taille de pages-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--titre de page-->
		
		<?php     
	     require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
	 
	    $db = connexionBase(); // Appel de la fonction de connexion
	     //$pro_id = $_GET["pro_id"];
	    ?>
</head>
<body>
	<?php
				include 'include/entete_de_page.php';
				include 'include/php_navbarre.php';


		$result = $db->query("SELECT * FROM produits WHERE pro_id = ".$_GET["pro_id"]."");
		$produit = $result->fetch(PDO::FETCH_OBJ);
		$result->closeCursor();

		$a="SELECT cat_nom from categories ORDER BY cat_nom";
	$resultat = $db->query($a);
	$tab1_categories = $resultat->fetchAll(PDO::FETCH_OBJ);
	?>
	<div class="col-12 text-center"><h1>Modification</h1></div>
	<form action="verification/verification_modification.php" method="POST" class="row">
		<div class="row text-center">	
			<div class="col-12 text-center">
			<?php 
			echo "<img src = \"asset/image/$produit->pro_id.$produit->pro_photo\"alt='equipement_jarditou' title='equipement_jarditou'  width= \"auto\" height= \"auto\" class=\"img-responsive center-block\">";
			?>
			</div>
			<div class="col-12"><br></div>

			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Id :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<?php 
			echo "<input type=\"text\" readonly value=\"$produit->pro_id\" class=\"text-center\" name=\"id\" />";
			?>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Référence :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<?php 
			echo "<input type=\"text\" value=\"$produit->pro_ref\"class=\"text-center\" name=\"reference\">";
			?>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Libéllé :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<?php 
			echo "<input type=\"text\" value=\"$produit->pro_libelle\"class=\"text-center\" name=\"libelle\">";
			?>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Prix :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<?php 
			echo "<input type=\"text\" value=\"$produit->pro_prix\"class=\"text-center\" name=\"prix\">";
			?>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Quantité :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<?php 
			echo "<input type=\"text\" value=\"$produit->pro_stock\"class=\"text-center\" name=\"quantite\">";
			?>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Couleur :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<?php 
			echo "<input type=\"text\" value=\"$produit->pro_couleur\"class=\"text-center\" name=\"couleur\">";
			?>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Date d'ajout :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<?php 
			echo "<input type=\"text\" disabled=\"disabled\" value=\"$produit->pro_d_ajout\"class=\"text-center\" name=\"\">";
			?>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Date de modification :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
			<?php 
			echo "<input type=\"text\" disabled=\"disabled\"value=\"$produit->pro_d_modif\"class=\"text-center\" name=\"\">";
			?>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>categorie :</p>
			</div>
			<div class="col-12 col-lg-2 col-md-6">
				<select name="pro_cat_id">
					<?php foreach ($tab1_categories as $cat) 
					{
						
						echo "<option value='".$produit->pro_cat_id."'>".$cat->cat_nom."\n"; 
					}
					?>
				</select>
			</div>
			<!--=================================================================================================================-->
			<div class="col-12 col-lg-2 col-md-6">
				<p>Bloquer :</p>
			</div>
			
			<div class="col-12 col-lg-2 col-md-6">
				<input type="radio" name="oui_ou_non" id="oui" value="oui" required="">
				<label for="oui" >oui</label>
				<input type="radio" name="oui_ou_non" id="non" value="non" required="">
				<label for="non" >non</label>
				<span id=""></span>
			</div>
			
			<div class="col-12"><br></div>
			<!--=================================================================================================================-->
			<div class="col-5"></div>
			<div class="col-1">
			<input type="submit" name="envoyer" value="envoyer">
			</div>
			<div class=" col-1">
			<input type="reset" name="annuler" value="annuler">	
			</div>
			<div class="col-5"></div>
			<div class="col-12"><br></div>
			<!--=================================================================================================================-->
		</div>
	</form>
	<?php 
		include "include/bas_de_pages.php";
	?>
	<!--lien necessaire a boostrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!--fin de body-->	
</body>
</html>
<?php } else{ ?> <h1>NOPE</h1> <?php } ?>