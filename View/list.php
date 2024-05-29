<?php

session_start();

if(!isset($_SESSION['on'])){
    header('Location: login.php');
}

require_once '../Assets/Php/Functions/isAdmin.php';
$isAdmin = isAdmin($_SESSION['id']);

$title = "Liste des tickets";
$style = "list";
include '../Assets/Php/Includes/header.php';


require_once '../Assets/Php/Functions/getTickets.php';
?>

<body>
<main>
    <?php include '../Assets/Php/Includes/nav.php'; ?>
    <div id="MC">
        <div id="title">
            <h1>Liste des tickets</h1>
        </div>
        <div id="content">
            <?php 
            $tickets = getTickets($isAdmin);
            foreach($tickets as $ticket){
                echo '<div class="ticket">';
                echo '<h2>'.$ticket['Titre'].'</h2>';
                echo '</div>';
            }
            ?>
        </div>
    </div> 
</main>    
</body>

<script src="../Assets/Js/load.js"></script>