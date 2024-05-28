<?php

$db = connection();

$querry = $db->prepare('SELECT * FROM flair');
$querry->execute();
$flairs = $querry->fetchAll();

echo '  <div id="flair">
            <div id="hiddenItems" style="display:none">
            </div>
            <div id="flairList"></div>
            <button id="addFlair" type="button">
                <image src="../Assets/Images/add.png" height="50px"/>
            </button>
            <div id="flairDisplay">';

foreach($flairs as $flair){
    echo '<p data-id="'.$flair['Id_Flair'].'" class="flair">'.$flair['Label'].'</p>';
}

echo '      </div>
        </div>';