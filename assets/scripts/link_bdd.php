<?php
    define('USER',"loic");
    define('PASSWD',"");
    define('SERVER',"localhost");
    define('BASE',"utilisateurs");
    
    $dsn="mysql:dbname=".BASE.";host=".SERVER;
    
    try{
        $pdo=new PDO($dsn,USER,PASSWD);
        echo("Connexion effectuée avec succès<br>");
    }
    catch(PDOException $e){
        echo("Échec de la connexion : ". $e->getMessage() . "<br>");
        exit();
    }
?>