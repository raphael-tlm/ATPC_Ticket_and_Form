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
        <?php if(!$isAdmin){ echo '<a href="archive.php"><image src="../Assets/Images/archive.png" height="50px" title="Tickets archivé"></image></a>';}?>
        <?php if($isAdmin){ echo '<a href="admin.php"><image src="../Assets/Images/admin.png" height="50px" title="Administration"></image></a>';}?>
        <?php if($isAdmin){ 
            echo '
            <div id="admin">
                    <a href="list.php"><image src="../Assets/Images/pile.png" height="50px" title="Liste des tickets"></image></a>
                    <a href="notopened.php"><image src="../Assets/Images/view.png" height="50px" title="Tickets non ouvert"></image></a>
                    <a href="progess.php"><image src="../Assets/Images/inprogress.png" height="50px" title="Tickets en cours"></image></a>
                    <a href="archive.php"><image src="../Assets/Images/archive.png" height="50px" title="Tickets archivé"></image></a>
            </div>
            ';}?><?php if($isAdmin){ 
                echo '
                <div id="admin">
                        <a href="form.php"><image src="../Assets/Images/form.png" height="50px" title="Ecrire un formulaires"></image></a>
                        <a href="notopened.php"><image src="../Assets/Images/newForm.png" height="50px" title="Créer un nouveau formulaire"></image></a>
                        <a href="formList.php"><image src="../Assets/Images/pile.png" height="50px" title="List des formulaires"></image></a>
                </div>
                ';}?>
        <a href="../Assets/Php/Functions/logout.php"><image src="../Assets/Images/disconnect.png" height="50px" title="Se déconnecter"></image></a>
    </menu>
</nav>
</div>