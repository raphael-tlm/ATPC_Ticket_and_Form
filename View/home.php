<?php

session_start();

if(!isset($_SESSION['on'])){
    header('Location: login.php');
}

include_once('../Assets/Php/Includes/header.php');
