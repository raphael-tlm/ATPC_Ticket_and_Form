<?php

session_start();

if(!isset($_SESSION['on'])){
    header('Location: login.php');
}

require_once '../Assets/Php/Functions/isAdmin.php';
$isAdmin = isAdmin($_SESSION['id']);

if($isAdmin){
    header('Location: index.php');
}

$title = "Créer un ticket";
$style = "newticket";
include '../Assets/Php/Includes/header.php';
?>

<body>
    <?php include '../Assets/Php/Includes/nav.php'; ?>
