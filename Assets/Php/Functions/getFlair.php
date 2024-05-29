<?php

require_once ('db.php');

function getFlairId($ticketID){
    $db = connection();
    $req = $db->prepare('SELECT Id_Flair FROM Possede WHERE Id_Ticket = :id');
    $req->execute(array('id' => $ticketID));
    $flair = $req->fetchAll();

    if($flair){
        return $flair;
    }
    else{
        return false;
    }
}

function getFLair($ticketID){
    $flair = getFlairId($ticketID);
    if($flair && !empty($flair)){
        foreach($flair as $f){
            $db = connection();
            $req = $db->prepare('SELECT label FROM Flair WHERE Id_Flair = :id');
            $req->execute(array('id' => $f['Id_Flair']));
            $flair = $req->fetch();
            echo '<p class="flair">'.$flair['label'].'</p>';
        }
    }
}