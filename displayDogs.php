<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title> PHP </title>
</head>

<body>

    <form action="insert.php" method="post">

        Nom: <input type="text" name="nom" />
        Race: <input type="text" name="race" />

    
        <input type="submit" name="insert" value="Insérer"/>
    </form>
</body>
</html>


<?php

include_once '../PHP/connectDB.php';


$sql = "SELECT ch.nom, ch.race
        FROM chien ch
        ";

foreach($bdd->query($sql)->fetchAll() as $data) {

    ?>

<p>
    Nom = <?php echo $data['nom']; ?><br />
    Race = <?php echo $data['race']; ?>

</p>
<?php
}
?>
