
	<!--barre de navigation-->		
			<nav id="navbar" class="navbar navbar-expand-lg bg-dark navbar-dark">
			    <!-- Tdefini la barre de bouton et les bouton -->
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="navbar-toggler-icon"></span>
			    </button>
			 
			    <div class="collapse navbar-collapse" id="collapsibleNavbar">
			        <ul class="navbar-nav">
			            <li class="nav-item">
			                <a class="nav-link" href="accueiljarditou.php">Accueil</a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link" href="tableau.php">Tableau</a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link" href="formulaire.php">Contact</a>
			            </li>
			            <?php if (isset($_SESSION["utilisateur"]) && $_SESSION["utilisateur"]->role=="admin"){ ?>
			            <li class="nav-item">
							<a class="nav-link" href="ajout_element_tableau.php">Ajouter au tableau</a>
						</li>
						<?php } ?>

						<?php if(@$_SESSION["autoriser"]=="oui"){ ?>
						
						<li class="nav-item">
							<a class="nav-link" href="Deconnexion.php">Deconnexion</a>
						</li>
					<?php }else{ ?>
						<li class="nav-item">
							<a class="nav-link" href="formulaire_inscription.php">Inscription</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Login.php">Connexion</a>
						</li>
					<?php } ?>
			        </ul>

			    </div> 
			   
			</nav> 
