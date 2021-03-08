<!DOCTYPE html>
<?php 
    $variable1 = "la page faite avec des fichiers en inc.";
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        echo "<title>Page faite avec des fichiers inc</title>";
    ?>
</head>
<body>
    <?php 
        #*****************************
        #Ceci est aussi un commentaire
        #*****************************

        echo "<div><h1 style=\"border-style:double;background-color:light blue;\">Bienvenue sur $variable1 </h1>";

        echo "<p>Une fonction qui donne le nom du fichier exécuté : ". $_SERVER['PHP_SELF']." </p></div>"; // si on le souhaite, on peut ne pas fermer le passage php car il se poursuit dans le fichier qui vient après

        /* Ceci est un commentaire
        sur plusieurs lignes
        pour le php */
        
    