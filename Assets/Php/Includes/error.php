<?php

switch($error){
    case 1:
        echo "<div id='popup'><p>Identifiants incorrects.</p>&nbsp; <button id='close'><image src='../Assets/Images/x.png' height='15px'></button></div>";
        break;
    case 2:
        echo "<div id='popup'><p>Veuillez remplir tous les champs.</p>&nbsp; <button id='close'><image src='../Assets/Images/x.png' height='15px'></button></div>";
        break;
    case 3:
        echo "<div id='popup'><p>Une erreur est survenue.</p>&nbsp; <button id='close'><image src='../Assets/Images/x.png' height='15px'></button></div>";
        break;
    case 4:
        echo "<div id='popup'><p>Cet e-mail est déjà utilisé.</p>&nbsp; <button id='close'><image src='../Assets/Images/x.png' height='15px'></button></div>";
        break;
}