<?php

function getTickets($isAdmin){
    
    require_once 'db.php';

    $db = connection();

    if($isAdmin){
        $req = $db->prepare('SELECT * FROM ticket');
    }
    else{
        $req = $db->prepare('SELECT * FROM ticket WHERE Id_Utilisateur = :id_user');
        $req->bindParam(':id_user', $_SESSION['id']);
    }
    $req->execute();
    $tickets = $req->fetchAll();
    return $tickets;
}