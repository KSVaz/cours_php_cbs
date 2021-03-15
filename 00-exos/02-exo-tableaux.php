<?php 
require_once '../inc/functions.php';
?> 
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&display=swap" rel="stylesheet">  
    
    <link rel="stylesheet" href="../css/style.css">

    <title>Cours PHP 7 - Exos tableaux</title>

  </head>
  <body class="bg-dark">
  <div class="container-fluid p-0 m-0">
        <!-- ========================================= -->
        <!-- Navbar -->
        <!-- ========================================= -->
        <?php require("../inc/nav.inc.php"); ?>
    <!-- fin navbar -->
    </div><!-- fin du container fluid -->

    <!-- ========================================= -->
    <!-- Contenu principal -->
    <!-- ========================================= -->

    <div class="container bg-white p-5">
        <div class="row jumbotron bg-light">
            <div class="col-sm-12">
                <h1 class="text-center">Cours PHP 7 - Exos tableaux</h1>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
                <h2><span>1.</span> </h2>

                <?php 

                   //déclarer un tableau - les valeurs du tableau sont indiquées dans les ()
                   $tableau1 = array('Dalio', 'Gabin', 'Arletty', 'Fernandel', 'Pauline Carton');

                   //echo $tableau1; erreur de type "array to string conversion" on ne peut afficher directement un tableau

                   echo "<pre>"; // pour mieux afficher et mieux lire
                   var_dump($tableau1); //var_dump() affiche le contenu du tableau, le type de données et les valeurs
                   echo"</pre>";

                   echo "<pre>"; 
                   print_r($tableau1); //affiche l'indice et le contenu mais pas les types
                   echo"</pre>";

                   // autre façon de déclarer un array
                   $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];

                   echo "<pre>"; 
                   var_dump($tableau2); //var_dump() affiche le contenu du tableau, le type de données et les valeurs
                   echo"</pre>";

                   $tableau2[] = 'Roumanie';//ajouter un élément dans notre tableau avec des crochets vides
                   echo "<pre>"; 
                   var_dump($tableau2);
                   echo"</pre>";

                   dateDuJourFr();

                   //On appelle la fonction suivante pour faire un var_dump() plus rapidement (cf.functions.php)
                   
                   jeVarDump($tableau1);
                   jePrintR($tableau1);

                ?>
            </div>
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
            <h2><span>2.</span> </h2>
                <?php // cette fonction permet d'analyser dans le navigateur le contenu et le type d'une variable et d'en donner la longueur si c'est une string
                       
                ?>
            </div>
        </div><!-- fin row -->

        <hr>



    </div> <!-- fin du container -->

    <?php require("../inc/footer.inc.php"); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
