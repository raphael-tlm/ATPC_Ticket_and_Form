<?php

session_start();

if(!isset($_SESSION['on'])){
    header('Location: login.php');
}

require_once '../Assets/Php/Functions/db.php';

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
    <main>
    <?php include '../Assets/Php/Includes/nav.php'; ?>
    <div class="mainContent">
        <h1>Créer un ticket</h1>
        <form action="../Assets/Php/Functions/createTicket.php" method="post">
            <input type="text" name="title" placeholder="Nom du Ticket" required maxlength="100">
                <?php include '../Assets/Php/Includes/flair.php'; ?>
            <textarea name="content" placeholder="Description du ticket" required maxlength="400"></textarea>
            <div id="buttons">
                <select name="mention" placeholder="Mention">
                    <?php include '../Assets/Php/Includes/mention.php'; ?>
                </select>
                <input type="submit" value="Créer">
            </div>
        </form>
        </div>
    </main>
<script src="../Assets/Js/flair.js"></script>