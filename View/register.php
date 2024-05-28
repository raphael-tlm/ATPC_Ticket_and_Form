<?php 

session_start();

if(isset($_SESSION['on'])){
    header('Location: home.php');
}

require_once ('../Assets/Php/Functions/db.php');

$title = "Inscription";
$style = "register";
include ('../Assets/Php/Includes/header.php');
?>

<body>
    <?php if(isset($_GET['error'])){
        $error = intval($_GET['error']);
        include ('../Assets/Php/Includes/error.php');
    } ?>
    <div id="box">
        <h1>Inscription</h1>
        <form action="../Assets/Php/Functions/register.php" method="post">
            <input type="text" name="name" placeholder="Entrez votre nom . . ." required>
            <input type="text" name="firstname" placeholder="Entrez votre prénom . . ." required>
            <input type="text" name="mail" placeholder="Entrez votre e-mail . . ." required>
            <input type="password" name="password" placeholder="Entrez votre mot de passe . . ." required>
            <div>
                <button id="login">Se connecter</button>
                <input type="submit" value="S'inscrire">
            </div>
        </form>
    </div>
</body>
<script src="../Assets/Js/redirection.js"></script>
<script src="../Assets/Js/popup.js"></script>