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
	private $z1 = 3+1;
	private $z2= 1+2;
	
	function decoupe(){
		$a=substr($z1,0,1);
		$b=substr($z1,2,1);
		$x=substr($z2,0,1);
		$y=substr($z2,2,1);
		return $this->$a,$b,$x,$y;
	}

	function addition(){
		decoupe($z1,$z2)
		$Add1 =(a+x);
		$Add2 =(b+y);
		$addtt="$add1+$add2*I"
		return $addtt;
	}
	function soustraction (){}
	function produit (){}
	function division (){}

}


?>
