<?php 

session_start();
require_once 'db.php';

if(isset($_POST['title']) && isset($_POST['content'])){
    if(!empty($_POST['title']) && !empty($_POST['content'])){
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        if(!empty($_POST['mention'])){
            $mention = htmlspecialchars($_POST['mention']);
        }
        else{
            $mention = null;
        }
        $id = $_SESSION['id'];
        
        $db = connection();
        $req = $db->prepare('INSERT INTO `ticket`(`Titre`,`Statut`, `Id_Mention`, `Id_Utilisateur`) VALUES (?,?,?,?)');
        $req->execute(array($title, "0", $mention, $id));

        $idTicket = $db->lastInsertId();

        $req = $db->prepare('INSERT INTO `message`(`Contenue`, `Id_Utilisateur`, `Id_Ticket`) VALUES (?,?,?)');
        $req->execute(array($content, $id, $idTicket));

        if(!empty($_POST['Flair'])){
            foreach($_POST['Flair'] as $flair){
                $req = $db->prepare('INSERT INTO `possede`(`Id_Ticket`, `Id_Flair`) VALUES (?,?)');
                $req->execute(array($idTicket, $flair));
            }
        }
    }
    else{
        header('Location: ../../../View/createTicket.php?error=2');
    }
}
else{
    header('Location: ../../../View/createTicket.php?error=3');
}