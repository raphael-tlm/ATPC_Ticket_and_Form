<?php

session_start();

require_once ('db.php');

if(isset($_POST['mail']) && isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['password'])){
    if(!empty($_POST['mail']) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['password'])){
        $mail = htmlspecialchars($_POST['mail']);
        $name = htmlspecialchars($_POST['name']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $password = htmlspecialchars($_POST['password']);
        
        $db = connection();

        $req = $db->prepare('SELECT * FROM utilisateur WHERE mail = ?');
        $req->execute(array($mail));
        $data = $req->fetch();

        if(!$data){
            $req = $db->prepare('INSERT INTO utilisateur (Nom, Prenom, mail, Mot_De_Passe) VALUES (?, ?, ?, ?)');
            $req->execute(array($name, $firstname, $mail, password_hash($password, PASSWORD_DEFAULT)));
            header('Location: ../../../View/login.php');
        }
        else{
            header('Location: ../../../View/register.php?error=4');
        }
    }
    else {
        header('Location: ../../../View/register.php?error=2');
    }
}
else {
    header('Location: ../../../View/register.php?error=3');
}