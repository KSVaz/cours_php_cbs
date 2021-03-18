<?php require_once '../inc/functions.php'; ?> 
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

    <title>Cours PHP 7 - Traitement formulaire</title>

  </head>
  <body class="bg-dark">
  <div class="container-fluid p-0 m-0">
        <!-- ========================================= -->
        <!-- Navbar -->
        <!-- ========================================= -->
        <?php require("../inc/nav.inc.php"); ?>
        
    </div><!-- fin du container fluid -->

    <!-- ========================================= -->
    <!-- Contenu principal -->
    <!-- ========================================= -->

    <div class="container bg-white p-5">
        <div class="row jumbotron bg-light">
            <div class="col-sm-12">
                <h1 class="text-center">Cours PHP 7 - Traitement du formulaire</h1>
                <p class="lead text-center mt-4"></p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>I.</span></h2>
                
                <?php 
                    if(!empty($_POST)) {
                    // jeVarDump($_POST);

                    echo "<p>Prénom : " .$_POST['prenom']. "</p><br>";
                    echo "<p>Nom : " .$_POST['nom']. "</p><br>";
                    echo "<p>Email : " .$_POST['email']. "</p><br>";
                    echo "<p>Adresse : " .$_POST['adresse']. "</p><br>";
                    echo "<p>Code postal : " .$_POST['code_postal']. "</p><br>";
                    echo "<p>Ville : " .$_POST['ville']. "</p><br>";
                    
                    

                    //on va écrire le contenu de la super globale dans un fichier texte en l'absence de BDD

                    $fichier = fopen('formulaire.txt', 'a'); // fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon cela permet de l'ouvrir
                    
                    $donneeformulaire = $_POST['prenom']. " " .$_POST['nom']. " // email : " .$_POST['email']. " // adresse : " .$_POST['adresse']. " // code postal : " .$_POST['code_postal']. " // ville : " .$_POST['ville']. "\n"; // \n pour faire des sauts de ligne dans le .txt
                    
                    fwrite($fichier, $donneeformulaire);

                    } // fin if !empty
                ?>

            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
            
            </div><!-- fin col -->

        </div><!-- fin row -->

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>II.</span></h2>
               
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
            
            </div><!-- fin col -->

        </div><!-- fin row -->


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