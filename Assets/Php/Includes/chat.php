<?php

$db = connection();

$req = $db->prepare('SELECT * FROM message WHERE Id_Ticket = ?');
$req->execute(array($data['Id_Ticket']));
$messages = $req->fetchAll();

require_once ('../Assets/Php/Functions/returnUser.php');

$lastId = 0;

foreach($messages as $message) {
    if($message['Id_Utilisateur'] == $_SESSION['id']){
        echo '<div class="message me">';
    } else {
        echo '<div class="message">';
    }
    if($message['Id_Utilisateur'] != $lastId){
        
        echo '<div class="user">';
        $user = returnUser($message['Id_Utilisateur']);
        echo $user['Nom'] . ' ' . $user['Prenom'];
        echo '</div>';
        $lastId = $message['Id_Utilisateur'];
    }
    echo '<div class="content">';
    echo str_replace("\n","<br>",$message['Contenue']);
    echo '</div>';
    echo '</div>';
}