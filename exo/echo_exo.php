<!DOCTYPE html>
<html>
<head>
	<title>exo poo</title>
</head>
<body>
<?php
include_once("chainePlus.php");
$st = new chainePlus("programation orientée objet en PHP");
echo"gras :".$st->gras();
echo"italique :".$st->italique();
echo"souligne :".$st->souligne();
echo"majuscule :".$st->majuscule();
?>
</body>
</html>