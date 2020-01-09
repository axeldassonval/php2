<?php	
 	session_start(); 
 	if(isset($_SESSION["utilisateur"]) && $_SESSION["utilisateur"]->role == "admin"){
		require "connexion_bdd.php";
		$dataBase=connexionBase();
		$requete="SELECT * from categories where ISNULL(cat_parent)  ORDER BY cat_nom";
		$result = $dataBase->query($requete);
		$tab_categories = $result->fetchAll(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<!--referencement de la langue du site-->
<html lang="fr">
	<!--début de head-->
	<head>

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
	<?php
	include "include/entete_de_page.php";
	include "include/php_navbarre.php";
	?>
	<br/>
	<form action="verification/verification_ajout.php" method="post" class="row" style="padding: 5px"  enctype="multipart/form-data">

		<div class="col-12 col-lg-3 col-md-6">
			<p>reference de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="reference" required="">
			<span id=""></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>libéllé de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="libelle" required="">
			<span id=""></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>prix de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="prix" required>
			<span id=""></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>quantité de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="quantite" required="">
			<span id=""></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>couleur de lobjet ajouter :</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<input type="text" name="couleur" required="">
			<span id=""></span>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
			<p>selectioner la categorie d'outils</p>
		</div>
		<div class="col-12 col-lg-3 col-md-6">
				<select name="cat_id" id="cat_id">
					<?php foreach ($tab_categories as $key => $cat) 
					{
						echo "<option value='".$cat->cat_id."'>".$cat->cat_nom."\n"; 
					}
					?>
				</select> <br>
				<select name="sous_cat" id="sous_cat" ><option selected disabled>sous categorie</option></select>
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
				<input type="radio" name="oui_ou_non" id="oui" value="oui" required="">
				<label for="oui" >oui</label>
				<input type="radio" name="oui_ou_non" id="non" value="non" required="">
				<label for="non" >non</label>
				<span id=""></span>
			</div>
			<div class="col-lg-4 d-none d-lg-block"></div>
				<div class="d-md-none d-lg-block col-lg-5"></div>
				<div class="col-lg-1 col-md-6">
				<input type="submit" value="Envoyer" id="bouton">
			</div>
				<div class="d-md-none col-sm-12"></div>
				<div class="col-lg-1 col-md-6 "><input type="reset" value="annuler"></p></div>
			<div class="d-md-none d-lg-block col-lg-5"></div>
		</div>	
	</form>
	<br/>
	<?php
	include "include/bas_de_pages.php";
	?>
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
<?php } else{ ?> <h1>NOPE</h1> <?php } ?>