<?php
function connection(){
    $bdd = 'mysql:host=localhost;dbname=service';
    $user  = 'gestion';
    $pass = 'mdp2j3st1on';
    try {   
        $conPDO = new PDO($bdd, $user,$pass, array(PDO::ATTR_PERSISTENT => true));
    }
    
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    return $conPDO;
}