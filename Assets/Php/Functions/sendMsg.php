<?php

session_start();

require_once ('db.php');

if(isset($_POST['message']) && !empty($_POST['message'])){
    $db = connection();
    $req = $db->prepare('INSERT INTO `message`(`Contenue`, `Id_Utilisateur`, `Id_Ticket`) VALUES (?,?,?)');
    $req->execute(array(htmlspecialchars($_POST['message']), $_SESSION['id'], $_POST['idTicket']));
    header('Location: ../../../View/ticketViewing.php?ITPM='.$_POST['idTicket']);
}