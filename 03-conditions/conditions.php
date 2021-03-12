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

    <title>Cours PHP 7 - Les instructions conditionnelles</title>

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
                <h1 class="text-center">Cours PHP 7 - Les instructions conditionnelles ou les conditions</h1>
                <p class="lead text-center mt-4">On retrouve dans PHP la plupart des instructions de contrôle des scripts. Indispensables à la gestion du déroulement d'un algorithme quelconque, ces instructions sont présentes dans tous les langages. PHP utilise une syntaxe très proche de celle du langage C. Ceux qui ont déjà pratiqué un langage tel que le C ou plus simplement JavaScript seront en pays de connaissance.</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12 col-md-4">
                <h2><span>I.</span> If</h2>
                <p>L'instruction <code>if</code> est la plus simple et la plus utilisée des instructions conditionnelles. Présente dans tous les langages de programmation, elle est essentielle en ce qu'elle permet d'orienter l'exécution du script en fonction de la valeur booléenne d'une expression.</p>
                <?php 
                    $a = 100;
                    $b = 55;
                    $c = 25;

                    if($a > $b && $b > $c) {

                        echo "<p class=\"text-success\">Les deux conditions sont ok";

                    }
                ?>
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-4">
                <h2><span>II.</span> If ... else</h2>
                <p>L'instruction <code>if...else</code> permet de traiter le cas où l'expression conditionnelle est TRUE et en même temps d'écrire un traitement de rechange quans elle est évaluée à FALSE, ce que ne permet pas une instruction if seule. L'instruction ou le bloc qui suit <code>else</code> est alors le seul à être exécuté. L'exécution continue ensuite normalement après le bloc.</p>
                <?php
                    if($a > $b) {

                        echo "<p class=\"text-success\">$a est supérieur à $b</p>";

                    }else {
                        echo "<p class=\"text-success\">$b qui est supérieur à $a </p>";
                    }

                    echo "<p>Autre exemple :</p>";

                    
                    $e = 10;
                    $f = 5;
                    $g = 2;

                    echo "<p class=\"text-success\">";

                    // L'opérateur OR qui s'écrit || 
                    if($e == 9 || $f > $g ){

                        echo "Au moins une des deux conditions est remplie";

                    }else {

                        echo "Les deux conditions sont fausses";
                    }

                    echo "</p>";


                ?>

                <p>Le bloc qui suit les instructions if ou else peut contenir toutes sortes d'instructions, y compris d'autres instructions <code>if...else</code>. Nous obtenins dans ce cas une syntaxe plus complexe, de la forme : VOIR</p>
                <p>Il existe une autre manière d'écrire un if...else ; la condition ternaire :</p>
                <p>Dans la ternaire, le ? remplace le if et le : remplace le else</p>

                <?php 

                    $h = 10;
                    
                    echo "<p class=\"text-success\">";
    
                    if($h == 10 ){

                        echo "\$h est égal à 10";

                    }else {

                        echo "$h est différent de 10";
                    }

                    echo "</p>";

                    // la même en ternaire

                    echo ($h == 10) ? "<p class=\"text-success\">\$h est égal à 10</p>" : "<p class=\"text-success\">\$h est différent de 10</p>"; // Si $h est égal à 10 on affiche la première expression sinon la seconde

                ?>
                

            </div><!-- fin col -->

            <div class="col-sm-12 col-md-4">
                <h2><span>III.</span> if...else if...else</h2>
                <p>Nous obtenons dans ce cas une syntaxe plus complexe, de la forme suivante :</p>
                <?php 

                    $d = 10;

                    echo "<p class=\"text-success\">";

                    if( $d == 8){

                        echo "Réponse 1 : \$d est égal à 8";

                    }else if ($d != 10) {

                        echo "Réponse 2 : \$d est différent de 10";

                    }else {

                        echo "Réponse 3 : Les deux conditions sont fausses";
                    }

                    echo "</p>";
                ?>
            </div><!-- fin col -->

        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>IV.</span> Switch...case</h2>
                <p>Switch permet de comparer à une multitude de valeur comme l'instruction if...else if...else</p>
                <?php 
                
                    $dept = 75;

                    switch($dept) {
                        case 75:
                            echo "Paris";
                            break;
                        case 41:
                            echo "Loir-et-Cher";
                            break;
                        case 92:
                            echo "Hauts-de-Seine";
                            break;
                        
                        default:
                            echo "Département inconnu !";
                            break;
                    }
                
                ?>
            </div> <!-- fin col -->
            <div class="col-sm-12 col-md-6">
                
            </div> <!-- fin col -->   

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
