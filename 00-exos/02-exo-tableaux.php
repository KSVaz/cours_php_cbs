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

                   //mini exo avec une boucle foreach, parcourez les deux tableaux de cette page et affichez les dans 2 ul

                   //tableau 1

                    //on parcourt le tableau $tableau1 par ses valeurs. La variable $acteur prend les valeurs du tableau successivement à chaque tour de boucle, le mot clé "as" est obligatoire
                    echo "<p>Tableau 1 : <br></p><ul>";
                    foreach ($tableau1 as $acteur) {
                       echo "<li>$acteur</li>";
                    }
                    echo "</ul>";

                    //tableau 2

                    echo "<p>Tableau 2 : <br></p><ul>";
                    foreach ($tableau2 as $pays) {
                       echo "<li>$pays</li>";
                    }
                    echo "</ul>";

                    jePrintR($pays); //va afficher que le dernier élément dde $tableau2 puisqu'on l'appelle APRÈS la boucle
                    jeVarDump($acteur);

                    //mini exo : La boucle foreach pour parcourir les indices et les valeurs

                    echo "<p>Tableau 1 : <br></p><ul>";
                    foreach ($tableau1 as $indice =>$acteur) {//la boucle parcourt cette fois-ci les indices et les valeurs. D'abord les indices dans une variable $indice => puis les valeurs correspondant à chaque indice dans une variable $acteur
                       echo "<li>L'indice $indice, contient la valeur $acteur</li>";
                    }
                    echo "</ul>";

                    echo "<p>Tableau 2 : <br></p><ul>";
                    foreach ($tableau2 as $indice =>$acteur) {
                       echo "<li>L'indice $indice, contient la valeur $acteur</li>";
                    }
                    echo "</ul>";

                    //mini exo
                    // 1- Déclarer un tableau associatif $contacts avec les indices suivants : prenom, nom, email et téléphone et vous y mettez les valeurs correspondant à un seul contact.
                    // 2- Puis avec une boucle foreach vous affichez les valeurs
                    // 3- Puis dans une autre boucle vous affichez les valeurs dans des p sauf le prénom qui doit être dans un h3
                    
                    // 1
                    echo "<div class=\"alert alert-primary p-4 w-75\">";

                    $contacts = array (
                        'prenom' => 'Jean',
                        'nom' => 'Cocteau',
                        'email' => 'jean.cocteau@gmail.com',
                        'telephone' => '01.42.42.42.42',
                    );

                    // jeVarDump($contacts);
                    
                    // 2
                    echo "<p>Contacts : <br></p><ul>";
                    foreach ($contacts as $infoscontact) {
                        echo "<li>$infoscontact</li>";
                    }
                    echo "</ul>";

                    // 3
                    echo "<p>Contacts : <br></p><ul>";
                    foreach ($contacts as $indice => $infoscontact) {
                        echo "<li>$indice = $infoscontact</li>";
                    }
                    echo "</ul>";

                    // 3bis
                    foreach ($contacts as $indice => $infoscontact) {

                        if($indice == 'prenom') {
                            echo "<h3 class =\"pl-0\">$infoscontact</h3>";
                        }else {
                            echo "<p>$infoscontact</p>";
                        }
                    }
                
                    echo "</div>";
                ?>
            </div>
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
            <h2><span>2.</span> Tableau multi-dimensionnel</h2>
                <?php 
                     $tableau_multi = array (
                         0 => array (
                             'prenom' => 'Jean',
                             'nom' => 'Cocteau',
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

                ?>
            </div>
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">
            <div class="col-sm-12">
                <h2><span>3.</span> </h2>
                <?php 
                    //1- exo faire un tableau $tailles avec des tailles de vêtements du small au xl et les afficher avec une boucle foreach dans une ul
                    //2- puis les afficher dans un select avec une boucle foreach

                    // $tailles = array('S', 'M', 'L', 'XL');
                    $tailles = array (
                        'S' => 'small',
                        'M' => 'medium',
                        'L' => 'large',
                        'XL' => 'extra-large',
                    );

                    echo "<ul>";
                    foreach ($tailles as $indice => $size) {
                        echo "<li>$indice - $size</li>";
                    }
                    echo "</ul>";

                    echo "<label for =\tailles\">Tailles</label><select class=\"form-control w-25\"><option>Sélectionnez votre taille</option>";
                    foreach ($tailles as $indice => $size) {
                        echo "<option value =\"$indice\">$indice - $size</option>";
                    }
                    echo "</select>";
                ?> 
            </div>
        </div>



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
