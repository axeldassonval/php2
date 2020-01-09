<?php session_start(); ?>
<!DOCTYPE html>
<!--referencement de la langue du site-->
<html lang="fr">
	<!--début de head-->
	<head>

		<!--connexion css-->
		<link rel="stylesheet" href="css/style.css" />
				<!-- lien boostrap-->
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!--meta de compréhension symbole-->
		<meta charset="utf-8" />
		<!--meta d'hadaptation de reduction taille de pages-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--titre de page-->
		<title>Jarditou</title>
		<?php     
	     require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
	 
	    $db = connexionBase(); // Appel de la fonction de connexion
	     //$pro_id = $_GET["pro_id"];
		$requete = "SELECT * FROM produits";
	 
      
	    $result = $db->query($requete);


	 
	    // Renvoi de l'enregistrement sous forme d'un objet
	    $produit = $result->fetch(PDO::FETCH_OBJ);
		?>
			<style>
		table, th, td {
		  border: 1px solid black;border-collapse:collapse
		}
		</style>
		<!--fin de head-->
	</head>
	<body class="container p-0">
		<?php
		include 'include/entete_de_page.php';
		
		include 'include/php_navbarre.php';
		?>
		
		<!--debut tableau-->
		<section class="row"  class="container-fluid" >

				<div  class="table-responsive col-lg-8">
					<table width="100%" height="100%" class="table table-striped table-hover table-bordered">
						<thead class="thead-dark">
							<tr>
							    <td colspan="1">Photo</td>
							    <td colspan="1">ID</td>
							    <td colspan="1">ref</td>						    
							    <td colspan="1">Libélé</td>
							    <td colspan="1">Prix</td>
							    <td colspan="1">stock</td>
							    <td colspan="1">couleur</td>
							    <td colspan="1">ajout</td>
							    <td colspan="1">modification</td>
							    <td colspan="1">bloquer</td>
							    
							</tr>
						</thead>
						<tbody>
							<?php

						 
						while ($row = $result->fetch(PDO::FETCH_OBJ))
						{
						    echo"<tr>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'><img src = \"asset/image/$row->pro_id.$row->pro_photo\"alt='' title=''  width= \"100\" height= \"auto\"></a></td>";
						    echo"<td name='id'><a href='details.php?pro_id=$row->pro_id'>".$row->pro_id."</a></td>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'>".$row->pro_ref."</a></td>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'>".$row->pro_libelle."</a></td>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'>".$row->pro_prix."</a></td>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'>".$row->pro_stock."</a></td>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'>".$row->pro_couleur."</a></td>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'>".$row->pro_d_ajout."</a></td>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'>".$row->pro_d_modif."</a></td>";
						    echo"<td><a href='details.php?pro_id=$row->pro_id'>".$row->pro_bloque."</a></td>";
						    echo"</tr>";
						} 
 
						?>

						</tbody>

					</table> 
					
				</div>
			<div class="col-lg-4" style="padding-top: 1rem;">
		<?php
			include 'include/colone.php'
			?>
		</div>	
		</section>
		    
		<?php
		include 'include/bas_de_pages.php'
		?>
		



			 <!--lien necessaire a boostrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--fin de body-->	
	</body>
</html>		