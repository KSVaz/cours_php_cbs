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

    <title>Cours PHP 7 - Les boucles</title>

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
                <h1 class="text-center">Cours PHP 7 - Les boucles</h1>
                <p class="lead text-center mt-4">Les boucles permettent de répéter des opérations élémentaires un grand nombre de fois sans avoir à réécrire le même code.</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>I.</span> La boucle while</h2>
                <p>La boucle while permet d'affiner le comportement d'une boucle en réalisant une action de manière répétitive tant qu'une condition est vérifiée ou qu'une expression quelconque est évaluée à TRUE et donc de l'arrêter quand elle n'est plus vérifiée, évaluée à FALSE.</p>
                <?php 

                    $n = 1;
                    while($n%7 !=0) { // Le script s'arrête dès qu'il trouve un multiple de 7
                        $n = rand(1,100); // rand() fait un tirage aléatoire compris entre 1 et 100 (random)
                        echo $n. "&nbsp; - ";
                    }
                    
                ?> 
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2><span>II.</span> La boucle do... while</h2>     
                <p>Avec l'instruction do...while, la condition n'est évaluée qu'après une première exécution du bloc compris entre do et while.</p>
                <?php 
                    $n2 = 1;
                    do {
                        $n2 = rand(1,100);//initialisation de la variable à 1
                        echo $n2. "&nbsp; - ";
                    }
                    while($n2%7 != 0); //la condition, trouver un multiple de 7, n'est testée qu'après le premier tirage
                
                ?>
            </div><!-- fin col -->

        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>III.</span> La boucle for</h2>
                <p>La boucle for est plus concise, plus ramassée que la boucle while.</p>

                <?php 

                    for ($i=0; $i<=10; $i++) {
                        echo $i. " - ";
                    }

                    echo "<br>";
                    //on va afficher les puissance de 2 jusqu'à 8
                    
                    for ($i = 0; $i <=8; $i++) { // création d'un tableau avec 9 éléments (de 0 à 8)
                        $tab[$i] = pow(2,$i); // à l'aide d'une boucle for (on utilise la fonction pow())
                        // $tab[$i] = $i; // création d'un tableau avec la valeur de i incrémenté
                    }

                    // var_dump($i);
                    var_dump($tab);

                    echo "<br><br>";
                    
                ?> 
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2><span>IV.</span> La boucle foreach</h2>
                <p>La boucle foreach (pour chaque) est efficace pour lister les éléments d'un tableau.</p>
                
                <?php 
                    $val = "Valeurs de notre tableau :";
                    echo $val. "<br>";

                    echo "les puissances de 2 sont : ";

                    foreach ($tab as $val) { // pour chaque valeur que tu vois dans ce tableau
                        echo $val. " - "; // fait un echo
                    }
                ?> 

                <br><br>

                <p class="font-weight-bold">Lecture des indices et des valeurs d'un tableau.</p>

                <?php 
                    //création d'un autre tableau
                    for ($i = 0; $i <=5; $i++) { 
                     $tab[$i] = pow(2,$i);
                    } 
                    //lecture des undices et des valeurs des tableaux

                    foreach ($tab as $ind=>$val) {//on récupère indice et valeur
                        echo "2 puissance $ind vaut $val <br>";
                    }
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
