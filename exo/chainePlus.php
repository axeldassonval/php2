<?php

/*class chainePlus{
	private $chaine = "programation orientée objet en PHP";
	public $majuscule;
	public $italique;
	public $souligne;
	public $gras;

	public function  Majuscule(){
		 
		return strtoupper($this->chaine);

	}

	function italique(){
		return "<b>".$this->chaine."</b><br>";
	}

	function souligne(){
		return "<i>".$this->chaine."</i><br>";
	}

	function gras(){
		return "<u>".$this->chaine."</u><br>";
	}

}*/
class complexe{
	private $z1= 3+1;
	private $z2= 1+2;
	
	function decoupe(){
		$a=substr($z1,0,1);
		$b=substr($z1,2,1);
		$x=substr($z2,0,1);
		$y=substr($z2,2,1);
		$array=array($a,$b,$x,$y);
		return $this->$array;
	}

	function addition(){
		$this->decoupe();
		$calcul1 =($a+$x);
		$calcul2 =($b+$y);
		$calculTt=$calcul1."+".$calcul2."*I";
		return $this->$calculTt;
	}
	function soustraction(){
		$this->decoupe();
		$calcul1 =($a-$x);
		$calcul2 =($b-$y);
		$calculTt=$calcul1."-".$calcul2."*I";
		return $this->$calculTt;
	}
	function produit(){
		$this->decoupe();
		$calcul1 =($a*$x)-($b*$y);
		$calcul2 =($x*$b+$a*$y);
		$calculTt=$calcul1."+".$calcul2."*I";
		return $this->$calculTt;
	}
	function division(){
		$this->decoupe();
		$calcul1 =($a*$x+$b*$y)/(($x*$x)+($y*$y));
		$calcul2 =($b*$x-$a*$y)/(($x*$x)+($y*$y));
		$calculTt=$calcul1."-".$calcul2."*I";
		return $this->$calculTt;

	}

}


?>
