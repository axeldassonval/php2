	
<?php
function connexionBase()
{

   if ($_SERVER["SERVER_NAME"]=="dev.amorce.org") 
   {
      $base = "adasson";
      $host ="localhost";
      $login = "adasson";
      $password = "Kuro0905";
  } 

   if ($_SERVER["SERVER_NAME"]=="localhost") 
   {
      $base = "jarditou";
      $host ="localhost";
      $login = "root";
      $password = "";
  } 

   try 
   {
      
         $db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base, $login, $password);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
         return $db;
    } 
    catch (Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    } 
}
?>