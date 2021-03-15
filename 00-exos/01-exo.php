<?php 
    require_once '../inc/functions.php';

    // des variables pour tester plus bas
    $chaine = "Longtemps je me suis couché ... dans le temps";
    $decimal = 18.74;
    $entier = 500;

    $liberte = "Liberté";
    $egalite = "Egalité";
    $fraternite = "Fraternité";
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

    <title>Cours PHP 7 - Exos pratiques</title>

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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="introduction.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Introduction</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="#I.">I. Intro</a>
                            <a class="dropdown-item" href="#II.">II. Exemples</a>
                            <a class="dropdown-item" href="#III.">III. Inclure des fichiers externes</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">02-variables</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="../02-variables/variables.php">Variables</a>
                            <a class="dropdown-item" href="../02-variables/types.php">Types</a>
                            <a class="dropdown-item" href="../02-variables/chaines.php">Chaînes</a>
                            <a class="dropdown-item" href="../02-variables/tableaux.php">Tableaux</a>
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
                <h1 class="text-center">Cours PHP 7 - Exos pratiques</h1>
                <?php mnPap(); ?>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
                <h2><span>1.</span> Date du jour</h2>
                <?php 

                    dateDuJourFr();
                    dateJourFr2();
                    dateDuJourEn();

                ?>
            </div>
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
            <h2><span>2.</span> var_dump()</h2>
                <?php // cette fonction permet d'analyser dans le navigateur le contenu et le type d'une variable et d'en donner la longueur si c'est une string
                        var_dump($chaine);
                        echo "<br>";
                        var_dump($decimal);
                        echo "<br>";
                        var_dump($entier);
                ?>
            </div>
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
            <h2><span>3.</span> Type</h2>
                <?php 
                     print_r("affiche du contenu avec la fonction print_r <br>");
                     
                    //  gettype() = récupérer le type de variable

                    echo gettype($chaine);
                ?>
            </div>
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
            <h2><span>4.</span> Concaténation</h2>
                <?php 
                    // mini exo : écrire "La devise de la République est Liberté, Egalité, Fraternité"
                    
                    echo "<p>La devise de la Républiqe est \"$liberte, $egalite, $fraternite\".</p>";
                ?>
            </div>
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
            <h2><span>5.</span> Conditions</h2>
                <?php 
                    // mini exo if else si le prix est supérieur à 100, la remise est de 10%, sinon la remise est de 5%. Donner le montant du prix après remise
                    $prix = 110;
                    $remise10 = $prix*0.9;
                    $remise5 = $prix*0.95;

                    echo "<p class=\"text-success\">";

                    if( $prix > 100){

                        echo "Pour un montant d'achat de $prix €, la remise est de 10% <br> Prix net = $remise10 €";

                    }else {

                        echo "Pour un montant d'achat de $prix €, la remise est de 5% <br> Prix net = $remise5 €";
                    }

                    echo "</p>";

                    echo "...................<br><br>";

                    // if... else if... else
                    // mini exo : Si vous achetez un PC à plus de 1000 euros, la remise est de 15%. 
                    // Pour un PC de 1000 euros et moins, la remise est de 10%
                    // si c'est un livre, la remise est de 5%
                    // Pour tous les autres articles, la remise est de 2%

                    $achat = "livre";
                    $prixAchat = 1200;
                    $remise15 = $prixAchat*0.85;
                    $remise10 = $prixAchat*0.9;
                    $remise5 = $prixAchat*0.95;
                    $remise2 = $prixAchat*0.98;

                    if($achat == "PC" && $prixAchat > 1000){

                        echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 15%. Vous paierez $remise15 €";

                    }elseif($achat == "PC" && $prixAchat <= 1000) {

                        echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 10%. Vous paierez $remise10 €";

                    }elseif($achat == "livre"){

                        echo "Vous avez acheté un livre à $prixAchat €, vous bénéficiez donc d'une remise de 5%. Vous paierez $remise5 €";

                    }else{
                        echo "Vous avez acheté un produit à $prixAchat €, vous bénéficiez donc d'une remise de 2%. Vous paierez $remise2 €";
                    }

                    echo "<br>";

                    // Autre méthode

                    $achat2 = "PC";

                    if ($achat2 == 'PC'){
                        if($prixAchat > 1000){
                          //remise de 15%
                          echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 15%. Vous paierez $remise15 €";
                        }else {
                          //remise de 10%
                          echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 10%. Vous paierez $remise10 €";
                        }
                      }elseif ($achat2 == 'livre'){
                        //remise de 5%
                        echo "Vous avez acheté un livre à $prixAchat €, vous bénéficiez donc d'une remise de 5%. Vous paierez $remise5 €";
                      }else {
                        //remise de 2%
                        echo "Vous avez acheté un produit à $prixAchat €, vous bénéficiez donc d'une remise de 2%. Vous paierez $remise2 €";
                      }
                    
                    

                ?>
                
                    <!-- Avec formulaire  -->
                    <form action="#" method="get">
                      Achat (PC, livre ou autre) : <input type="text" name="achat" />
                      Prix : <input type="text" name="prixAchat" />
                      <input type="submit" name="submit" /> 
                    </form>
                    <?php 
                        // Vérifier si le formulaire est soumis 
                    if ( isset( $_GET['submit'] ) ) {
                    /* récupérer les données du formulaire en utilisant 
                        la valeur des attributs name comme clé 
                        */
                    $achat = $_GET['achat']; 
                    $prixAchat = $_GET['prixAchat']; 
                    $remise15 = $prixAchat*0.85;
                    $remise10 = $prixAchat*0.9;
                    $remise5 = $prixAchat*0.95;
                    $remise2 = $prixAchat*0.98;

                    if ($achat == 'PC'){
                        if($prixAchat > 1000){
                        //remise de 15%
                        echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 15%. Vous paierez $remise15 €";
                        }else {
                        //remise de 10%
                        echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 10%. Vous paierez $remise10 €";
                        }
                    }else if ($achat == 'livre'){
                        //remise de 5%
                        echo "Vous avez acheté un livre à $prixAchat €, vous bénéficiez donc d'une remise de 5%. Vous paierez $remise5 €";
                    }else {
                        //remise de 2%
                        echo "Vous avez acheté \"$achat\" à $prixAchat €, vous bénéficiez donc d'une remise de 2%. Vous paierez $remise2 €";
                    }
                    }

                    ?>
            </div><!-- fin col -->
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12">
            <h2><span>5.</span> Boucles</h2>

            <!-- Boucle WHILE -->
            <!-- les boucles sont destinées à répéter du code de façon automatique -->
                <?php 

                    $i = 0;
                   
                   while($i < 25){ // tant que c'est inférieur à 25 on incrémente $i
                        
                        // on affiche d'abord la valeur de $i PUIS on l'incrémente
                        echo $i. "**";
                        $i++;

                   }

                   echo "Autre boucle**********<br><br>";

                   // mini exo 5 
                   // dans une boucle, faire les options d'un élément select en démarrant à 1920 et s'arrêtant à 2021

                   $annee = 1920;

                   echo "<label for=\"annee\">Années :</label><select name=\"annee\" class=\"form-control w-25\">";
                   echo "<option>Sélectionnez une année</option>";

                   while($annee <= 2021) {
                       
                       echo "<option value=\"$annee\">".$annee."</option>";
                       $annee++;
                   }
                   echo "</select><br><br>";

                    // La même boucle à l'envers

                   echo "<p><strong>Boucle à l'envers*************</strong></p><br>";

                   $annee2 = 2021;

                   echo "<label for=\"annee\">Années :</label><select name=\"annee\" class=\"form-control w-25\">";
                   echo "<option>Sélectionnez une année</option>";

                   while($annee2 >= 1920) {
                       
                       echo "<option value=\"$annee2\">".$annee2."</option>";
                       $annee2--;
                   }
                   echo "</select><br><br>";

                //    DO WHILE

                   echo "<p><strong>Boucle do...while******************</strong></p><br>";

                   $chamalow = 0; // valeur de la boucle

                   do {
                    echo "<p>Je fais un petit tour de boucle.</p><br>";
                    $chamalow++;
                   }
                   while ($chamalow > 10);//la condition renvoie FALSE tout de suite, pourtant la boucle a tourné une fois (puisque c'est une do...while)

                //    SWHITCH

                   echo "<p><strong>Switch******************</strong></p><br>";

                   //Mini exo
                   //si avec la variable $langue contient espagnol, vous dîtes Hola, si c'est anglais vous dîtes hello, si c'est français vous dites Bonjour

                   $langue = "anglais";

                   switch($langue) {
                        case 'français':
                            echo "Bonjour";
                            break;
                        case 'anglais':
                            echo "Hello";
                            break;
                        case 'espagnol':
                            echo "Hola";
                            break;
                        default:
                            echo "Langue inconnue !";
                            break;
                   }
                   echo "<br>";
                   echo "<p><strong>Les mêmes conditions avec if else if******************</strong></p><br>";
                ?>

                <!--    Avec input -->
                <!-- <form action="#" method="GET">
                <label for="langue">Quelle langue parlez-vous ?</label>
                <input type="text" name="langue">
                <input type="submit" name="submit">
                </form> -->

                <?php

                    // if (isset( $_GET['submit'] ) ) {
                    //     /* récupérer les données du formulaire en utilisant la valeur des attributs name comme clé */
                    //     $langue = $_GET['langue']; 
                    //     switch ($langue){
                    //         case "anglais":
                    //             echo "Hello !";
                    //             break;
                    //         case "français":
                    //             echo "Coucou !";
                    //             break;
                    //         case "allemand":
                    //             echo "Guten Tag !";
                    //             break;
                    //         case "espagnol":
                    //             echo "Holà !";
                    //             break;
                    //         default:
                    //             echo "Désolée je ne parle pas $langue !";
                    //             break;
                    //     }
                    // }

                   //Réecrire ce switch avec un if else if

                    if($langue == "français") {
                        echo "Bonjour";
                    }elseif ($langue == "anglais") {
                        echo "Hello";
                    }elseif ($langue == "espagnol") {
                        echo "Hola";
                    }else {
                        echo "Langue inconnue !";
                    }

                    echo "<p><strong>Boucle FOR******************</strong></p><br>";

                    // mini exo :
                    //afficher les mois de 1 à 12 à l'aide d'une boucle for dans un menu déroulant

                    echo "<label for=\"mois\">Mois :</label><select name=\"mois\" class=\"form-control w-25\">";
                    echo "<option>Sélectionnez un mois</option>";
                    for ($i = 1; $i <=12; $i++) {
                        echo "<option>" .$i. "</option>";
                    }
                    echo "</select><br>";

                    //mini exo
                    //faire une boucle for qui affiche 0 à 9 sur la même ligne
                    // compléter cette boucle pour mettre les chiffres dans un tableau HTML

                    echo "<table class=\"table table-bordered table-info mt-4\"><tr>";
                    for ($i=0; $i<=9; $i++) {
                        echo "<td>".$i. "</td>";
                    }
                    echo "</tr></table>";



                ?>
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
