<?php

require_once ('db.php');

session_start();

if(isset($_POST['mail']) && isset($_POST['password'])){
    if(!empty($_POST['mail']) && !empty($_POST['password'])){
        $mail = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);
        
        $db = connection();

        $req = $db->prepare('SELECT * FROM utilisateur WHERE mail = ?');
        $req->execute(array($mail));
        $data = $req->fetch();

        if($data){
            if(password_verify($password, $data['Mot_De_Passe'])){
                $_SESSION['on'] = true;
                $_SESSION['id'] = $data['id'];
                $_SESSION['name'] = $data['Nom'];
                $_SESSION['firstname'] = $data['Prenom'];
                $_SESSION['mail'] = $data['mail'];
                header('Location: ../../../View/home.php');
            }
            else{
                header('Location: ../../../View/login.php?error=1');
            }
        }
        else{
            header('Location: ../../../View/login.php?error=1');
        }
        
    }
    else {
        header('Location: ../../../View/login.php?error=2');
    } 
} 
else {
    header('Location: ../../../View/login.php?error=3');
}