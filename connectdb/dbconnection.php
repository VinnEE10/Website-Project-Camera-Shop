<?php
#These are functions for connectiong and interactiing with the databases
function connect()
 {
 $dbhost = "localhost";
 $dbuser = "cameraShopOwner";
 $dbpass = "cameraShopOwnerpass";
 $db = "camerashopdatabase";
    /*
    GRANT SELECT, INSERT, DELETE, UPDATE 
    ON camerashopdatabase.* 
    TO cameraShopOwner@localhost 
    IDENTIFIED BY 'cameraShopOwnerpass'; 
    */

 $dsn  = "mysql:host=$dbhost;dbname=$db; charset=UTF8";

 $pdo = new PDO($dsn,$dbuser,$dbpass);

 return $pdo;

 
 }



 
 
   
?>