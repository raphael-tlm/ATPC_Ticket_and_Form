<?php
function verifTicket($ITPM, $isAdmin){
    $db = connection();
    $req = $db->prepare('SELECT * FROM ticket WHERE Id_Ticket = ?');
    $req->execute(array($ITPM));
    $data = $req->fetch();
    if(!$_SESSION['on'] || $data['Id_Utilisateur'] != $_SESSION['id'] && !$isAdmin){
        header('Location: ../../../View/home.php');
    }
    else{
        return $data;
    }
}

?>