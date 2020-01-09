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
	<body class="container p-0">

		<?php
		include 'include/entete_de_page.php';
		
		include 'include/php_navbarre.php';
		?>
		    <!--fin de nav-->
		


			<!--image de promo-->
			<figure class="figure2">
				<img src="asset/image/promotion.jpg" alt="promotion jarditou" title="promotion" class="img-fluid" style="width: 100%">
			</figure>


			<hr>


			<!--debut de section-->
		<section class="row"> 
			
			<!--début article-->
			<article class="col-lg-8">
				<h1 id="accueil">Accueil</h1>
				<p> 
					<!--Article 1 :-->    <h2>L'entreprise</h2>
 				 	<!--paragraphe 1 :--> Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.<br>
  					<!--paragraphe 2 :--> Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.<br>
  					<!--paragraphe 3 :--> Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie<br>
  					<!--Section 2 :
 					Article 1 :--> <h2>Qualité</h2>
 					<!--paragraphe 1 :--> Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.<br>
  					<!--paragraphe 2 :--> Vous serez séduit par notre expertise, nos compétences et notre sérieux.<br>
	
 					<!--Article 2 :--> <h2>Devis gratuit</h2>
  					<!--paragraphe 1 :--> Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention.<br> 
  					Vous souhaitez un devis ? Nous vous le réalisons gratuitement.<br>
  				</p>
  				<!--fin article/texte-->
			</article>



			<!--colone-->
			<?php
			include 'include/colone.php';
			
			?>
			<!--fin de section-->
		</section>


		<hr>


		<?php
		include 'include/bas_de_pages.php';
		?>





		 <!--lien necessaire a boostrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--fin de body-->
	</body>
	<!--fin html-->
</html>