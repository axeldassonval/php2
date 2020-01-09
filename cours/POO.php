<?php 
/**
 * 
 */
	class employer 
	{
		private $nom;
		private $prenom;
		private $dateEmbauche;
		private $salaire;
		private $service;
		private $date;
		//le __contruct s'utilise pour generaliser une variable 
        public function __construct() {
        	$oDate = new dateTime();
        	$this->date = $oDate->format("Y-m-d");
        }
		
        public function getDate(){
			return $this->date;
		}

		public function setprenom($prenom){
			return $this->prenom=$prenom;
		}
		public function getprenom(){
			return $this->prenom;
		}
		
		public function setnom($nom){
			return $this->nom=$nom;
		}
		public function getnom(){
			return $this->nom;
		}
		
		public function setdateEmbauche($dateEmbauche){
			return $this->dateEmbauche=$dateEmbauche;
		}
		public function getdateEmbauche(){
			return $this->dateEmbauche;
		}
		
		public function setsalaire($salaire){
					return $this->salaire=$salaire;
				}
		public function getsalaire(){
			return $this->salaire;
		}

		public function setservice($service){
			return $this->service=$service;
		}
		public function getservice(){
			return $this->service;
		}
		
		
		public function tempEntreprise($dateEmbauche){
			list($anneEmbauche, $mm,$dd ) = explode('-', $dateEmbauche);
			$dd = (int) $dd;
			$mm = (int) $mm;
    		$anneEmbauche = (int) $anneEmbauche;

    		list($yyyy, $mm,$dd ) = explode('-', $this->date);
			$dd = (int) $dd;
			$mm = (int) $mm;
    		$yyyy = (int) $yyyy;
    		$annee = $yyyy-$anneEmbauche;
    		return $annee;
    	}
    	public function pourcentage($dateEmbauche,$salaire){
			list($anneEmbauche, $mm,$dd ) = explode('-', $dateEmbauche);
			$dd = (int) $dd;
			$mm = (int) $mm;
    		$anneEmbauche = (int) $anneEmbauche;

    		list($yyyy, $mm,$dd ) = explode('-', $this->date);
			$dd = (int) $dd;
			$mm = (int) $mm;
    		$yyyy = (int) $yyyy;
    		

    		$annee = $yyyy-$anneEmbauche;
			$anciennete=0.02*$annee;
			$pourcentage = $anciennete+0.05;
			return $pourcentage;
		}
		public function prime($dateEmbauche,$salaire){
			list($anneEmbauche, $mm,$dd ) = explode('-', $dateEmbauche);
			$dd = (int) $dd;
			$mm = (int) $mm;
    		$anneEmbauche = (int) $anneEmbauche;

    		list($yyyy, $mm,$dd ) = explode('-', $this->date);
			$dd = (int) $dd;
			$mm = (int) $mm;
    		$yyyy = (int) $yyyy;
    		

    		$annee = $yyyy-$anneEmbauche;
			$anciennete=0.02*$annee;
			$pourcentage = $anciennete+0.05;
			$prime = $salaire *$pourcentage;	
			return $prime;
		}
	}
?>