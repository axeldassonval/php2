<?php

require "POO.php";
$employe1 = new employer();
$employe1->setprenom("hector");
$employe1->setnom("Jardin");
$employe1->setdateEmbauche("2017-10-23");
$employe1->setsalaire(19000);
$employe1->setservice("compta");

echo $employe1->getprenom()."<br>";
echo $employe1->getnom()."<br>";
echo $employe1->getdateEmbauche()."<br>";
echo $employe1->getsalaire()."<br>";
echo $employe1->getservice()."<br>";
echo "ancienneté employer 1 : ".$employe1->tempEntreprise("2017-10-23")." ans<br>";
echo "pourcentage de prime employer 1 : ".$employe1->pourcentage("2017-10-23", 19000)."%<br>";
echo "prime employer 1 : ".$employe1->prime("2017-10-23", 19000)."€<br>"."<br>"."<br>";

//======================================================================
$employe2 = new employer();
$employe2->setprenom("raimond");
$employe2->setnom("humfraid");
$employe2->setdateEmbauche("2003-05-07");
$employe2->setsalaire(12000);
$employe2->setservice("menage");

echo $employe2->getprenom()."<br>";
echo $employe2->getnom()."<br>";
echo $employe2->getdateEmbauche()."<br>";
echo $employe2->getsalaire()."<br>";
echo $employe2->getservice()."<br>";
echo "ancienneté employer 2 : ".$employe2->tempEntreprise("2003-05-07")." ans<br>";
echo "pourcentage de prime employer 2 : ".$employe2->pourcentage("2003-05-07", 12000)."%<br>";
echo "prime employer 2 : ".$employe2->prime("2003-05-04", 12000)."€<br>"."<br>"."<br>";
//======================================================================
$employe3 = new employer();
$employe3->setprenom("erf");
$employe3->setnom("poile");
$employe3->setdateEmbauche("2016-01-31");
$employe3->setsalaire(15000);
$employe3->setservice("RH");

echo $employe3->getprenom()."<br>";
echo $employe3->getnom()."<br>";
echo $employe3->getdateEmbauche()."<br>";
echo $employe3->getsalaire()."<br>";
echo $employe3->getservice()."<br>";
echo "ancienneté employer 3 : ".$employe3->tempEntreprise("2016-01-31")." ans<br>";
echo "pourcentage de prime employer 3 : ".$employe3->pourcentage("2016-01-31", 15000)."%<br>";
echo "prime employer 3 : ".$employe3->prime("2016-01-31", 15000)."€<br>"."<br>"."<br>";
//======================================================================
$employe4 = new employer();
$employe4->setprenom("remi");
$employe4->setnom("sans famille");
$employe4->setdateEmbauche("2010-07-05");
$employe4->setsalaire(21000);
$employe4->setservice("comercial");

echo $employe4->getprenom()."<br>";
echo $employe4->getnom()."<br>";
echo $employe4->getdateEmbauche()."<br>";
echo $employe4->getsalaire()."<br>";
echo $employe4->getservice()."<br>";
echo "ancienneté employer 4 : ".$employe4->tempEntreprise("2010-07-05")." ans<br>";
echo "pourcentage de prime employer 4 : ".$employe4->pourcentage("2010-07-05", 21000)."%<br>";
echo "prime employer 4 : ".$employe4->prime("2010-07-05", 21000)."€<br>"."<br>"."<br>";
//======================================================================
$employe5 = new employer();
$employe5->setprenom("julie");
$employe5->setnom("dubuisson");
$employe5->setdateEmbauche("2019-10-02");
$employe5->setsalaire(30000);
$employe5->setservice("direction");

echo $employe5->getprenom()."<br>";
echo $employe5->getnom()."<br>";
echo $employe5->getdateEmbauche()."<br>";
echo $employe5->getsalaire()."<br>";
echo $employe5->getservice()."<br>";
echo "ancienneté employer 5 : ".$employe5->tempEntreprise("2019-10-02")." ans<br>";
echo "pourcentage de prime employer 5 : ".$employe5->pourcentage("2019-10-02", 30000)."%<br>";
echo "prime employer 5 : ".$employe5->prime("2019-10-02", 30000)."€<br>"."<br>"."<br>";
?>