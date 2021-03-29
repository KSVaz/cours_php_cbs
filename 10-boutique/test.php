<?php 

$pdoSITE = new PDO('mysql:host=localhost;dbname=site',
'root',
'',
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
));

require_once 'inc/functions.php';

// var_dump($pdoSITE);

$requete = $pdoSITE->query("SELECT * FROM membre");

$ligne = $requete->fetch(PDO::FETCH_ASSOC);

echo "<p>". $ligne['prenom']. " " .$ligne['nom']. ", " .$ligne['adresse']. ", " .$ligne['code_postal']. " - " .$ligne['ville']. "</p>";

?> 