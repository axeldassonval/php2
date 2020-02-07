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
/*class complexe1{
	private $z1= "3+1";
	private $z2= "1+2";
	
	function decoupe(){
		$a=substr($this->z1,0,1);
		$b=substr($this->z1,2,1);
		$x=substr($this->z2,0,1);
		$y=substr($this->z2,2,1);
		$array=array($a,$b,$x,$y);
		
		return $array;
	}

	function addition(){
		$array=$this->decoupe();
		$a=$array[0];
		$b=$array[1];
		$x=$array[2];
		$y=$array[3];
		$calcul1 =($a+$x);
		$calcul2 =($b+$y);
		$calculTt=$calcul1."+".$calcul2."*I";
		return $calculTt;
	}
	function soustraction(){
		$array=$this->decoupe();
		$a=$array[0];
		$b=$array[1];
		$x=$array[2];
		$y=$array[3];
		$calcul1 =($a-$x);
		$calcul2 =($b-$y);
		$calculTt=$calcul1."-".$calcul2."*I";
		return $calculTt;
	}
	function produit(){
		$array=$this->decoupe();
		$a=$array[0];
		$b=$array[1];
		$x=$array[2];
		$y=$array[3];
		$calcul1 =($a*$x)-($b*$y);
		$calcul2 =($x*$b+$a*$y);
		$calculTt=$calcul1."+".$calcul2."*I";
		return $calculTt;
	}
	function division(){
		$array=$this->decoupe();
		$a=$array[0];
		$b=$array[1];
		$x=$array[2];
		$y=$array[3];
		$calcul1 =($a*$x+$b*$y)/(($x*$x)+($y*$y));
		$calcul2 =($b*$x-$a*$y)/(($x*$x)+($y*$y));
		$calculTt=$calcul1."-".$calcul2."*I";
		return $calculTt;

	}

}
//Correction
class Complexe
{
    private $reel;
    private $im;
    //constructeur
    public function __construct($r, $im)
    {
        $this->reel = $r;
        $this->im = $im;
    }
    //les getters et les setters
    public function set_reel($reel){
      $this->reel = $reel;
    }
    public function get_reel(){
    	return $this->reel;
    }
    public function set_im($im){
      $this->im = $im;
    }
    public function get_im(){
    	return $this->im;
    }
    //La fonction Ajouter
    public function ajouter(Complexe $complexe)
	{   
		$reel=$this->reel+$complexe->reel;
		$imagin=$this->im+$complexe->im;
		return new Complexe($reel,$imagin);	
	}
		public function soustraire(Complexe $complexe)
	{
		$reel=$this->reel-$complexe->reel;
		$imagin=$this->im-$complexe->im;
		return new Complexe($reel,$imagin);
	}

	public function multiplier(Complexe $complexe)
	{
		$reel=($this->reel * $complexe->reel)-($this->im * $complexe->im);
		$imagin=($this->reel * $complexe->im)+($this->im * $complexe->reel);
		return new Complexe($reel,$imagin);
	}
	public function diviser(Complexe $complexe)
	{   $fract=pow($complexe->reel,2)+pow($complexe->im,2);
		$reel=(($this->reel * $complexe->reel)+($this->im * $complexe->im))/$fract;
		$imagin=($this->im * $complexe->reel)-($this->reel * $complexe->im)/$fract;
		return new Complexe($reel,$imagin);
	}
		
	public function __toString()
	{   if($this->im>=0)
		return $this->reel."+".$this->im."*I";
		else 
	    return $this->reel.$this->im."*I";
	}

}
//Source : www.exelib.net
*/
?>
