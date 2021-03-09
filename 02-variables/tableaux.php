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

    <title>Cours PHP 7 - Les tableaux</title>

  </head>
  <body class="bg-dark">
  <div class="container-fluid p-0 m-0">
        <!-- ========================================= -->
        <!-- Navbar -->
        <!-- ========================================= -->
        <?php require("../inc/nav.inc.php"); ?>
        <!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
            <a class="navbar-brand" href="#">Cours PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../01-intro/introduction.php">Introduction</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">02-variables</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="../02-variables/variables.php">Variables</a>
                            <a class="dropdown-item" href="../02-variables/types.php">Types</a>
                            <a class="dropdown-item" href="../02-variables/chaines.php">Chaînes</a>
                            <a class="dropdown-item active" href="../02-variables/tableaux.php">Tableaux</a>
                        </div>
                    </li>  -->

                    <!-- PLAN DU COURS -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plan du cours</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="#I.">I. Les tableaux</a>
                            <a class="dropdown-item" href="#II.">II. </a>
                            <a class="dropdown-item" href="#III.">III. </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav> -->
        <!-- fin navbar -->
    </div><!-- fin du container fluid -->

    <!-- ========================================= -->
    <!-- Contenu principal -->
    <!-- ========================================= -->

    <div class="container bg-white p-5">
        <div class="row jumbotron bg-light">
            <div class="col-sm-12">
                <h1 class="text-center">Cours PHP 7 - Les tableaux</h1>
                <p class="lead text-center mt-4">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes d'un des types de base que vous venez de voir. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1). D'où l'expression de tableau indicé.</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->
        <hr>

        <div id="I." class="row bg-light">
            <div class="col-sm-12">
                <h2><span>I.</span> Les tableaux</h2>
                <p>Texte à venir</p>
                <blockquote>

                </blockquote>
                <?php 
                    $tab[0] = 2004; // la variable $tab est un tableau par le simple fait que son nom est suivi de crochets
                    $tab[1] = 31.14E7;
                    $tab[2] = "PHP 7";
                    $tab[35] = $tab[2]. " et MySQL"; // Les éléments indicés entre 2 et 35 n'existent pas
                    $tab[] = "coucou"; // l'indice sera 36 : avantage d'ajouter un élément à la fin d'un tableau sans connaître la valeur du premier indice disponible
                    
                    echo "<p><strong>Nombre d'éléments du tableau ".count($tab)."</strong></p>"; // ils ne sont donc pas comptés
                    echo "<p><strong>Le langage préféré de l'open source est $tab[2] </strong></p>";
                    echo "<p><strong>Utilisez $tab[35]</strong</p>";
                ?>          
            </div><!-- fin col -->

            <div id="II." class="col-sm-12">
                <h2><span>II.</span> </h2>
                
            </div><!-- fin col -->
        </div><!-- fin row -->

        <hr>

        <div id="III." class="row bg-light">
            <div class="col-sm-12">
                <h2><span>III.</span> </h2>
            </div>
           
        </div><!-- fin row -->

        <hr>

        <div id="VI." class="row bg-light">
        <div class="col-sm-12">
                <h2><span>IV.</span> </h2>
            </div>
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
