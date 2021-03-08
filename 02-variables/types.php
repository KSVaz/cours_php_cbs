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

    <title>Cours PHP 7 - Types de données</title>

  </head>
  <body class="bg-dark">
  <div class="container-fluid p-0 m-0">
        <!-- ========================================= -->
        <!-- Navbar -->
        <!-- ========================================= -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
            <a class="navbar-brand" href="#">Cours PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="introduction.php">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="variables.php">Variables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../02-variables/types.php">Types</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="#I.">I. </a>
                            <a class="dropdown-item" href="#II.">II. </a>
                            <a class="dropdown-item" href="#III.">III. </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    <!-- fin navbar -->
    </div><!-- fin du container fluid -->

    <!-- ========================================= -->
    <!-- Contenu principal -->
    <!-- ========================================= -->

    <div class="container bg-white p-5">
        <div class="row jumbotron bg-light">
            <div class="col-sm-12">
                <h1 class="text-center">Cours PHP 7 - Types de données</h1>
                <p class="lead text-center mt-4">Dans PHP il n'existe pas de déclaration explicite du type d'une variable lors de sa création. Même PHP 7 reste un langage pauvrement typé comparé à JAVA ou au C.</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->
        <hr>

        <div id="I." class="row bg-light">
            <div class="col-sm-12 col-md-6">
                <h2><span>I.</span> Les types de données</h2>
                <ul>
						<li>Les types de base :</li>
							<ul>
								<li>Entiers, avec le type integer, qui permet de représenter les nombres entiers dans les bases 10, 8 et 16.</li>
								<li>Flottants, avec le type double ou float, au choix, qui représentent les nombres réels, ou plutôt décimaux au sens mathématique. </li>
								<li>Chaînes de caractères, avec le type string.</li>
								<li>Booléens, avec le type boolean, qui contient les valeurs de vérité TRUE ou FALSE (soit les valeurs 1 ou 0 si on veut les afficher).</li>
							</ul>
						<li>Les types composés :</li>
							<ul>
								<li>Tableaux, avec le type array, qui peut contenir plusieurs valeurs.</li>
								<li>Objets, avec le type object.</li>
							</ul>
						<li>Les types spéciaux</li>
							<ul>
								<li>Objets, avec le type object.</li>
								<li>Type null.</li>
							</ul>
					</ul>
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
            
            </div>
            
        </div><!-- fin row -->

        <hr>

        <div id="II." class="row bg-light">
            <div class="col-sm-12">
                <h2><span>II.</span> </h2>
            </div>
           
        </div><!-- fin row -->

        <hr>

        <div id="III." class="row bg-light">
        <div class="col-sm-12">
                <h2><span>III.</span> </h2>
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
