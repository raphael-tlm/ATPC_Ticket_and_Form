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
            <div>
                <label for="mail">E-mail</label>
                <input type="text" name="mail" placeholder="Entrez votre e-mail . . ." required>
            </div>
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" placeholder="Entrez votre nom . . ." required>
            </div>
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" placeholder="Entrez votre prénom . . ." required>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" placeholder="Entrez votre mot de passe . . ." required>
            </div>
            <input type="submit" value="S'inscrire">
        </form>
        <div id="link">
            <a href="login.php">Vous possedez un compte ?</a>
        </div>
    </div>
</body>
<script src="../Assets/Js/popup.js"></script>