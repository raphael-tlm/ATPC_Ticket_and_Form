<div>
<link rel="stylesheet" href="../Assets/Css/nav.css">
<nav>
    <?php if(!$isAdmin){ echo '
        <div id="logo">
            <img src="../Assets/Images/logo.png" alt="Logo" height="200px">
        </div>';}
    ?>
    <menu>
    
        <a href="../index.php"><image src="../Assets/Images/home.png" height="50px" title="Accueil"></image></a>
        <?php if(!$isAdmin){ echo '<a href="newticket.php"><image src="../Assets/Images/plus.png" height="50px" title="Créer un ticket"></image></a>';}?>
        <?php if(!$isAdmin){ echo '<a href="list.php"><image src="../Assets/Images/pile.png" height="50px" title="Liste des tickets"></image></a>';}?>
        <?php if(!$isAdmin){ echo '<a href="../index.php"><image src="../Assets/Images/archive.png" height="50px" title="Tickets archivé"></image></a>';}?>
        <?php if($isAdmin){ echo '<a href="admin.php"><image src="../Assets/Images/admin.png" height="50px" title="Administration"></image></a>';}?>
        <a href="../Assets/Php/Functions/logout.php"><image src="../Assets/Images/disconnect.png" height="50px" title="Se déconnecter"></image></a>
    </menu>
</nav>
</div>