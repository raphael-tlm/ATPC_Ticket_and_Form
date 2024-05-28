<?php 

session_start();

if(isset($_SESSION['on'])){
    header('Location: home.php');
}

require_once ('../Assets/Php/Functions/db.php');

$title = "Connection";
$style = "login";
include ('../Assets/Php/Includes/header.php');
?>

<body>
    <?php if(isset($_GET['error'])){
        $error = intval($_GET['error']);
        include ('../Assets/Php/Includes/error.php');
    } ?>
    <div id="box">
        <h1>Connexion</h1>
        <form action="../Assets/Php/Functions/login.php" method="post">
            <input type="text" name="mail" placeholder="Entrez votre e-mail . . ." required>
            <input type="password" name="password" placeholder="Entrez votre mot de passe . . .">
            <div>
                <button id="register">S'inscrire</button>
                <input type="submit" value="Se connecter">
            </div>
        </form>
        <div id="link">
            <a href="forgot.php">Mot de passe oublié ?</a>
        </div>
    </div>
</body>
<script src="../Assets/Js/popup.js"></script>
<script src="../Assets/Js/redirection.js"></script>