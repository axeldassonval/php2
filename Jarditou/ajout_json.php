<?php
// https://stackoverflow.com/questions/7564832/how-to-bypass-access-control-allow-origin
// header('Access-Control-Allow-Origin: http://localhost/jarditou');
require 'connexion_bdd.php';
$pdo=connexionBase();

$requete="SELECT * from categories where cat_parent=".$_POST["id"]; 
		$result = $pdo->query($requete);
        $produit = $result->fetchAll();



        echo json_encode($produit);

?>