<?php

session_start();

if(!isset($_SESSION['on'])){
    header('Location: login.php');
}

require_once('../Assets/Php/Functions/isAdmin.php');
$isAdmin = isAdmin($_SESSION['id']);

$title = "Accueil";
$style = "home";
include_once('../Assets/Php/Includes/header.php');


?>

<body >
    <?php include_once('../Assets/Php/Includes/nav.php'); ?>

</body>
<script src="../Assets/Js/load.js"></script>