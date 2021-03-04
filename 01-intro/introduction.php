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
    

    <title>Cours PHP 7 - Introduction</title>

    <style>

        body {
            font-family: 'Montserrat', sans-serif;
        }

        /* style de la sidebar  */

        .sidenav {
        height: auto; /* Full-height: remove this if you want "auto" height */
        width: 350px; /* Set the width of the sidebar */
        position: fixed; /* Fixed Sidebar (stay in place on scroll) */
        z-index: 1; /* Stay on top */
        top: 120px; /* Stay at the top */
        right: 30px;
        /* border-left: 1px solid rgb(139, 139, 139); */
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 20px;
        }

        .sidenav li {
            list-style-type: none;
            padding-bottom: 20px;
        }

        .sidenav a {
            color: rgb(139, 139, 139);
        }

        .sidenav a:hover {
            color : #28a745;
            text-decoration-line: none;
        }

        code {
            color: #17a2b8;
        }

        h2 {
            font-size: 26px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        h2 span {
            color: #ffc107;
        }

        h3 {
            padding-left: 20px;
            padding-top: 15px;
            font-size: 22px;
            font-weight: bold;
        }

        hr {
            height: 6px;
            border-radius: 4px;
            background: linear-gradient(to left, #ffc107, #28a745, #17a2b8);
        }

        @media (max-width: 1700px) {
            .sidenav {
                display: none;
            }
        }

    </style>
  </head>
  <body class="bg-dark">
  <div class="container-fluid p-0 m-0">
        <!-- ========================================= -->
        <!-- Navbar -->
        <!-- ========================================= -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
            <a class="navbar-brand" href="#">Cours SQL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="introduction.php">Introduction</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="#I.">I. Création de la BDD bibliotheque</a>
                            <a class="dropdown-item" href="#II.">II. SELECT sur plusieurs tables</a>
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
                <h1 class="text-center">Cours PHP 7 - Introduction</h1>
                <p class="lead text-center mt-4">PHP signifie aujourd'hui Php Hypertext Preprocessor</p>
            </div>
        </div><!-- fin row -->

        <hr>

        <div id="I." class="row bg-light">
            
        </div><!-- fin de la rangée -->

        <hr>

        <div id="II." class="row bg-light">
           

        
        </div><!-- fin row -->

      <br><br>
    </div> <!-- fin du container -->

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
