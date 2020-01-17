<!-- EXERCICES:
Outils nécessaire:
    Télécharger et dézipper le dossier JSDB (http://www.jsdb.org). 
    Lancer l'application JSDB.
    Taper votre code javascript
    
Attention toutefois à l'utilisation du langage. Ici , les fonctions permettant de gérer le DOM et les balises HTML.
Par exemple, la fonction "console.log()" ne fonctionne pas ici. Il faut utiliser la fonction "writeln()" à la place pour afficher du texte dans la console.
N'hesitez pas à vous référer à la doc JSDB (http://www.jsdb.org/tutorial.html, http://www.jsdb.org/cookbook.html)
I: Dessiner un carré plein dans la console.
Voici le résultat à obtenir:
*****
*****
*****
*****
*****
Astuce: Pour cet exercice, vous devrez utiliser des boucles afin de gérer chaque position.
II: Dessiner un carré vide.
Voici le résultat à obtenir:
*****
*   *
*   *
*   *
*****
Astuce: Cet exercice est le même que le précédent mais vous devrez en plus utiliser des structures conditionnelles.
(Facultatif)III: Dessiner un triangle dans la console.
Pour cet exercice, vous êtes libre de votre implémentation.-->


<?php 


for($i=0;$i<5;$i++){
    
    for($j=0;$j<5;$j++){
        
         echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";



for($i=0;$i<5;$i++){
    
        for($j=0;$j<5;$j++)
        {
                if($i<1 || $i>3 ){
                    echo "*";
                }else
                {
                    if($j>0 && $j<4){
                        echo "^";
                    }else{
                    echo "*";
                    }
                }
        
        }
    echo "<br>";
}
?>


