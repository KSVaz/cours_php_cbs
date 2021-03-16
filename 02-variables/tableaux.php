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

    <title>Cours PHP 7 - Les tableaux</title>

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
                <h1 class="text-center">Cours PHP 7 - Les tableaux</h1>
                <p class="lead text-center mt-4">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes d'un des types de base que vous venez de voir. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1). D'où l'expression de tableau indicé.</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->
        <hr>

        <div id="I." class="row bg-light">
            <div class="col-sm-12">
                <h2><span>I.</span> Les tableaux</h2>
                <p>Un tableau appelé array en anglais est une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type. Elles possèdent un indice dont la numérotation commence à 0.</p>
                <blockquote>
                    <!-- déclarer un tableau - les valeurs du tableau sont indiquées dans les () -->
                    <code>$tableau1 = array('Dalio', 'Gabin', 'Arletty', 'Fernandel', 'Pauline Carton');</code>
                </blockquote>
                <?php 
                    $tab[0] = 2004; // la variable $tab est un tableau par le simple fait que son nom est suivi de crochets
                    $tab[1] = 3.14;
                    $tab[2] = "PHP 7";
                    $tab[35] = $tab[2]. " et MySQL"; // Les éléments indicés entre 2 et 35 n'existent pas
                    $tab[] = "coucou"; // l'indice sera 36 : avantage d'ajouter un élément à la fin d'un tableau sans connaître la valeur du premier indice disponible
                    
                    echo "<p><strong>Nombre d'éléments du tableau ".count($tab)."</strong></p>"; // ils ne sont donc pas comptés
                    echo "<p><strong>Le langage préféré de l'open source est $tab[2] </strong></p>";
                    echo "<p><strong>Utilisez $tab[35]</strong></p>";

                    // jePrintR($tab);
                    // jeVarDump($tab);
                ?>          
            </div><!-- fin col -->

            <div id="II." class="col-sm-12">
                <h2><span>II.</span> Les tableaux associatifs</h2>
                <p>Dans un tableau associatif, nous pouvons choisir le nom des indices ou des index, c'est-à-dire que nous associons un indice créé par nous à sa valeur.</p>

                <?php 

                    $couleurs = array (
                        'b' => 'bleu',
                        'bl' => 'blanc',
                        'r' => 'rose',
                    );

                    jeVarDump($couleurs);

                    //pour afficher une valeur de notre tableau associatif en le cherchant par son indice
                    echo "<p>La première couleur du tableau est " .$couleurs['b']. ".</p>";//dans des quotes il prend des quotes autour de son indice
                    echo "<p>La première couleur du tableau est $couleurs[b].</p>"; //dans des guillemets, il y a une exception, l'indice ne prend plus de quotes

                    //mini exo
                    //compter le nombre d'éléments du tableau

                    echo "<p>Le tableau \$couleurs contient " .count($couleurs). " éléments.</p>";
                    // echo "<p>Le tableau \$couleurs contient " .sizeof($couleurs). " éléments.</p>";

                    jePrintR(count($couleurs));
                    
                ?> 
            </div><!-- fin col -->

            <div class="col-sm-12">
                <h2><span>III.</span> Les tableaux multi-dimensionnels</h2>
                <p>Un tableau multi-dimensionnel est un tableau qui contiendra une suite de tableau. Chaque tableau présente une "dimension".</p>

                <?php 
                    $tableau_multi = array (
                        0 => array (
                            'prenom' => 'Jean',
                            'nom' => 'Dujardin',
                            'telephone' => '01 42 42 42 42',
                        ),
                        1 => array (
                            'prenom' => 'Alexandra',
                            'nom' => 'Lamy',
                            'telephone' => '01 65 98 74 41',
                        ),
                        2 => array (
                            'prenom' => 'John',
                            'nom' => 'Wayne',
                            'telephone' => '01 45 75 85 45',
                        ),
                        3 => array (
                            'prenom' => 'Ava',
                            'nom' => 'Gardner',
                            'telephone' => '01 02 03 04 05',
                        ),
                    );

                    jePrintR($tableau_multi);
                 
                    echo $tableau_multi[0]['prenom']; //pour afficher Jean on entre d'abord l'indice 0 puis dans le sous-tableau on va à l'indice 'prenom'

                    // pour parcourir le tableau multi-dimensionnel on peut faire une boucle for car ces indices sont numériques

                    echo "<ul>";
                    for ($i = 0; $i < count($tableau_multi); $i++) {
                        echo "<li>" .$tableau_multi[$i]['prenom']. " " .$tableau_multi[$i]['nom']. "</li>";
                    }
                    echo "</ul>";

                    // ou une boucle foreach en passant en variable les contenus de chaque indice du tableau et en ciblant les indices nommés des sous-tableaux associatifs
                    echo "<p>";
                    foreach ($tableau_multi as $indice => $acteur) {
                        jePrintR($indice);
                        echo $acteur['prenom']. " " .$acteur['nom']."<br>";
                        // echo $tableau_multi[$indice]['prenom'];
                    }
                    echo "</>";
                ?> 
            </div><!-- fin col -->
        </div><!-- fin row -->

        <hr>

        <div id="III." class="row bg-light">
            <div class="col-sm-12">
                <h2><span>IV.</span> </h2>
            </div><!-- fin col -->
           
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
