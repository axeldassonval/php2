<!DOCTYPE html>
<html>
<head>
	<title>exo poo</title>
</head>
<body>
<?php
include_once("chainePlus.php");
$st = new complexe("programation orientée objet en PHP");
echo"gras :".$st->addition();
echo"italique :".$st->soustraction();
echo"souligne :".$st->produit();
echo"majuscule :".$st->division();
?>
</body>
</html>