<?php

try
{
     $bdd = new PDO('mysql:host=localhost;dbname=corona', 'root', 'nsC& 02102001');
}
catch(Exception $e)
{
      die('Erreur : '.$e->getMessage());
}



function online()
{
      if(isset($_SESSION['tchat']))
      {
            $online=1;
      }
      else
      {
            $online=0;
      }
      return $online;
}


?>
