<?php

require_once ('db.php');

function isAdmin($id){
    $db = connection();
    $req = $db->prepare('SELECT * FROM utilisateur WHERE Id_Utilisateur = ?');
    $req->execute(array($id));
    $data = $req->fetch();
    if($data['Statut'] == 1){
        return true;
    }else{
        return false;
    }
}