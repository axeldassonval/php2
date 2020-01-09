
<?php
require "connexion_bdd.php";
$db= connexionBase();


$sql = "DELETE FROM produits WHERE pro_id =".$_GET["pro_id"].""; 
$sth = $db->prepare($sql);
$sth->execute();
 
 header("Location:tableau.php");
exit;


?>