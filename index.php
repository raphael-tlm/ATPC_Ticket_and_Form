<?php

session_start();

if(isset($_SESSION['on'])){
    header('Location: View/home.php');
}
else{
    header('Location: View/login.php');
}
