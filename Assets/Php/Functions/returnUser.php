<?php

require_once ('db.php');

function returnUser($id) {
    $db = connection();

    $req = $db->prepare('SELECT * FROM Utilisateur WHERE Id_Utilisateur = ?');
    $req->execute(array($id));
    $user = $req->fetch();

    return $user;
}