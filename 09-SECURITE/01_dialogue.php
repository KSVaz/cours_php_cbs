<?php require_once '../inc/functions.php'?> 
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

    <title>Cours PHP 7 - Sécurité et PHP</title>

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
                <h1 class="text-center">Cours PHP 7 - Sécurité PHP</h1>
                <p class="lead text-center mt-4"></p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>I.</span> Création d'une BDD "dialogue"</h2>
                <p>avec les informations suivantes :</p>
        
                <ul>
                    <li>Nom de la BDD : dialogue</li>
                    <li>Nom de la table : commentaire</li>
                    <li>La table contient les champs suivants:
                        <ul>
                            <li>id_commentaire INT PK AI</li>
                            <li>pseudo : VARCHAR(20)</li>
                            <li>message : TEXT</li>
                            <li>date_enregistrement : DATETIME</li>
                        </ul>
                    </li>
                </ul>
               
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2><span>II.</span> Connexion à la BDD dialogue</h2>

                <?php 
                    // $pdoENT = new PDO('mysql:host=localhost;dbname=dialogue',
                    // 'root',
                    // '',
                    // array(
                    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// cette ligne sert à afficher les erreurs SQL dans le navigateur
                    //     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
                    // ));

                    // connexion PISOLA
                    $host = 'localhost';
                    $database = 'dialogue';
                    $user = 'root';
                    $psw = '';

                    $pdoDialogue = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw);
                    $pdoDialogue ->exec("SET NAMES utf8");

                    // jeVarDump( get_class_methods ($pdoENT));

                    $requete = $pdoDialogue->query( " SELECT * FROM commentaire " );
                    $ligne = $requete->fetch( PDO::FETCH_ASSOC );
                    jeVarDump($ligne);
                ?> 
            </div><!-- fin col -->

        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12">
                <h2><span>III.</span> Exo</h2>
                
                <?php 
                    //exo compter les commentaires et affichage des commentaires avec query() et boucle while dans un tableau HTML
                    $requete = $pdoDialogue->query("SELECT * FROM commentaire");
                    $nbr_commentaires = $requete->rowCount();

                    echo "<p>Il y a " .$nbr_commentaires. " commentaires dans la base de donnée.</p>";

                    echo "<table class=\"table table-dark table-striped w-50\">";
                    echo "<thead><tr><th scope=\"col\">#</th><th scope=\"col\">Pseudo</th><th scope=\"col\">Date</th><th scope=\"col\">Message</th></tr></thead>";
                    while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>#" .$ligne['id_commentaire']. "</td>";
                        echo "<td>" .$ligne['pseudo']. "</td>";
                        echo "<td>" .$ligne['date_enregistrement']. "</td>";
                        echo "<td>" .$ligne['message']. "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?> 
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
