<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="../Assets/Css/style.css">
    <?php
    if(isset($style)){
        echo "<link rel='stylesheet' href='../Assets/Css/$style.css'>";
    }
    ?>
    <link rel="icon" href="../Assets/Images/favicon.ico">
</head>