<?php

session_start();

require_once ('../Assets/Php/Functions/db.php');
require_once ('../Assets/Php/Functions/verifTicket.php');
require_once ('../Assets/Php/Functions/isAdmin.php');
$isAdmin = isAdmin($_SESSION['id']);

$data = verifTicket($_GET['ITPM'], $isAdmin);

require_once ('../Assets/Php/Functions/getFlair.php');

$title = $data['Titre'];
$style = "viewing";

include ('../Assets/Php/Includes/header.php');
?>

<body>
    <div id="navFlex">
    <nav>
        <div id="logo">
            <img src="../Assets/Images/logo.png" alt="Logo" height="200px">
        </div>
        <menu>
            <a href="../index.php"><image src="../Assets/Images/home.png" height="50px" title="Accueil"></image></a>
            <?php if(!$isAdmin){ echo '<a href="newticket.php"><image src="../Assets/Images/plus.png" height="50px" title="Créer un ticket"></image></a>';}?>
            <?php if(!$isAdmin){ echo '<a href="list.php"><image src="../Assets/Images/pile.png" height="50px" title="Liste des tickets"></image></a>';}?>
            <?php if(!$isAdmin){ echo '<a href="../index.php"><image src="../Assets/Images/archive.png" height="50px" title="Tickets archivé"></image></a>';}?>
            
            <a href="../Assets/Php/Functions/logout.php"><image src="../Assets/Images/disconnect.png" height="50px" title="Se déconnecter"></image></a>
        </menu>
    </nav>
        <div id = "ui">
            <div class="title">
                <h1><?php echo $data['Titre']; ?></h1>
                <div>
                <?php if($isAdmin){ echo '<a href="../Assets/Php/Functions/archive.php?ITPM='.$_GET['ITPM'].'"><image src="../Assets/Images/toarchive.png" height="50px" title="Archiver le ticket"></image></a>';}?>
                <?php if($isAdmin && $data['Statut'] == 0){ echo '<a href="../Assets/Php/Functions/view.php?ITPM='.$_GET['ITPM'].'"><image src="../Assets/Images/view.png" height="50px" title="Archiver le ticket"></image></a>';}?>
                    <div class='list'><?php getFlair($_GET['ITPM']) ?></div>
                </div>
              </div>
            <div class="chatting"  style="display:none;">
                <?php include ('../Assets/Php/Includes/chat.php'); ?>
            </div>
        </div>
    </div>
</body>
<script src="../Assets/Js/view.js"></script>