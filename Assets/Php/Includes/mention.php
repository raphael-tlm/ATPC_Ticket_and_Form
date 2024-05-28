<?php
echo '<option value="0">Aucune mention</option>';

$db = connection();

$querry = $db->prepare('SELECT * FROM Utilisateur WHERE Statut = 1');
$querry->execute();
$users = $querry->fetchAll();

foreach($users as $user){
    echo '<option value="'.$user['Id_Utilisateur'].'">'.$user['Nom'].' '.$user['Prenom'].'</option>';
}
?>