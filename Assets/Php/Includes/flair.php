<?php

$db = connection();

$querry = $db->prepare('SELECT * FROM flair');
$querry->execute();
$flairs = $querry->fetchAll();

echo '<div id="flair"> <div id="flairList">';

foreach($flairs as $flair){
    echo '<input type="checkbox" name="flair" value="'.$flair['Id_Flair'].'" onclick="return false;">';
}

echo '</div>';

echo '<button id="addFlair" type="button"><image src="../Assets/Images/add.png" height="50px"/></button>';
echo '<div id="flairDisplay">';

foreach($flairs as $flair){
    echo '<p value="'.$flair['Id_Flair'].'" class="flair">'.$flair['Label'].'</p>';
}

echo '</div></div>';