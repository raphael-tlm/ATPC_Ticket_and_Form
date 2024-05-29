<?php

session_start();

if(!isset($_SESSION['on'])){
    header('Location: ../index.php');
}

require_once '../Assets/Php/Functions/verifTicket.php';
require_once '../Assets/Php/Functions/isAdmin.php';
require_once '../Assets/Php/Functions/getFlair.php';


$isAdmin = isAdmin($_SESSION['id']);

$data = verifTicket($_GET['ITPM'], $isAdmin);

$title = $data['Titre'];
$style = 'viewing';
include '../Assets/Php/Includes/header.php';

?>

<body>
        <?php include '../Assets/Php/Includes/nav.php'; ?>
        <div id="MC">
            <div id="ribbon">
                <h1><?= $data['Titre'] ?></h1>
                <?php 
                    if($isAdmin){
                        echo '<a href="../Assets/Php/Functions/pin.php?ITPM='.$data['Id_Ticket'].'"><image src="../Assets/Images/fav.png" height="50px" title="Archiver"></image></a>';
                        echo '<a href="../Assets/Php/Functions/inprogress.php?ITPM='.$data['Id_Ticket'].'"><image src="../Assets/Images/view.png" height="50px" title="Archiver"></image></a>';
                        echo '<a href="../Assets/Php/Functions/archive.php?ITPM='.$data['Id_Ticket'].'"><image src="../Assets/Images/toarchive.png" height="50px" title="Archiver"></image></a>';
                    }
                ?>
                <div id="flair">
                    <?php getFlair($data['Id_Ticket']); ?>
                </div>        
            </div>

            <div id="chat">
                    <?php include '../Assets/Php/Includes/chat.php';?>
            </div>
            <form id="messaging" action="../Assets/Php/Functions/sendMsg.php" method="post">
                <input type="text" name="message" id="message" placeholder="Message">
                <input type="hidden" name="idTicket" value="<?= $data['Id_Ticket'] ?>">
                <button>Envoyer</button>
            </form>
        </div>
</body>
<script src="../Assets/Js/view.js"></script>
<script src="../Assets/Js/load.js"></script>