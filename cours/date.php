   <?php
    $date = date("Y-m-d");
 echo $date."<br>";
    /* 
    * - On découpe la chaîne $date selon '/' avec la fonction explode() qui retourne un tableau 
    * - Les éléments du tableau sont directement afffecté à des variables ($dd, $mm, $yyyy) dans un ordre respectif grâce à la fonction list()      
    */
    list($anneEmbauche, $mm, $yyyy) = explode('-', $date);
 
    /* Les variables $dd, $mm, $yyyy sont des chaînes, or la fonction checkdate()  
    * n'accepte que des entiers
    */
    echo gettype($anneEmbauche)."<br>"; // indique que $dd est une chaîne
 
    /* On va donc 'caster' c'est-à-dire changer le type d'une variable,
    * ici on veut un entier, la syntaxe est de l'indiquer avec (int) 
    * devant la variable
    */ 
    $anneEmbauche = (int) $anneEmbauche;
 
    echo gettype($anneEmbauche)."<br>"; // $dd est désormais bien un entier
 
    $mm = (int) $mm;
    $yyyy = (int) $yyyy;
 
   echo $mm.",".$anneEmbauche.",".$yyyy;
   
   