<?php require_once '../inc/functions.php';

// 2/ vérification de l'url ou si l'internaute vient pour la 1ère fois ou si  on déjà une lanque dans un cookie
if (isset($_GET['langue'])) { // si une langue est passée dans l'url, l'internaute a cliqué sur un des liens, on enverra cette langue dnas le cookie
    $langue = $_GET['langue'];
    jePrintR($langue);
}elseif (isset($_COOKIE['langue'])) { //sinon, si on a reçu un cookie appelé "langue" alors la valuer du site sera la valeur du cookie
    $langue = $_COOKIE['langue'];
    jePrintR($langue);
}else { // sinon si l'internaute n'a pas choisi de lanque, il arrive pour la première fois sur le site, on va lui mettre "fr" par défaut
    $langue = "fr";
    jePrintR($langue);
}

// 3- envoie du cookie avec l'information sur la langue
// jePrintR(time()); //time () nous donne la date du jour, exprimée en seconde, depuis le début de UNIX (soit 01/01/1970)
$expiration = time() + 365*24*60*60; // je crée ici la date d'expiration de mon cookie un an plus tard, j'ajoute à la date du jour de visite une année supplémentaire
// jePrintR($expiration);
// jePrintR($expiration - time());

// setcookie() fonction qui fabrique le cookie
setcookie('langue', $langue, $expiration); // la fonction envoie un cookie appelé "langue" avec la valeur de $langue et pour date d'expiration la valeur de $expiration

// Il n'existe pas de fonction prédéfinie qui permette de supprimer un cookie, pour rendre un cookie invalide, on utilise setcookie() avec le nom concerné et en mettant une date d'expiration à 0 ou antérieure à aujourd'hui

// Consulter les cookies sur les navigateurs :
//Firefox -> Inspecteur -> stockage
// Chrome -> Inspecteur -> Application -> storage -> cookie (déroulant)


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

    <title>Cours PHP 7 - Cookie</title>

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
                <h1 class="text-center">Cours PHP 7 - COOKIE</h1>
                <p class="lead text-center mt-4">La super globale $_COOKIE : un cookie est un petit fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui contient des informations.</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>I.</span> Définition</h2>
                <p>Les cookies sont automatiquement renvoyés au serveur par le navigateur. Lorsque l'internaute navigue dans les pages concernées par le ou les cookies, PHP permet de récupérer très facilement les données contenues dans un cookie ; car les informations sont stockées dans une super globale $_COOKIE.</p> 
                <p class="alert alert-danger">Un cookie étant sauvegardé sur le poste de l'internaute, il peut être modifié, détourné ou volé !!!! On n'y met donc aucune informations sensibles : références bancaires, numéro de sécurité sociale, mot de passe, le contenu d'un panier d'achat.</p>
               
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2><span>II.</span></h2>

                <!-- 1/ On envoie la langue choisie par l'url : la valuer "fr", par ex, est récupérée dans la super globale $_GET -->
                <!-- 2/ voir passage php avant doctype -->
                <a href="?langue=fr" class="btn btn-info">Français</a>
                <a href="?langue=es" class="btn btn-success">Espagnol</a>
                <a href="?langue=it" class="btn btn-warning">Italien</a>
                <a href="?langue=ru" class="btn btn-danger">Russe</a>

                <?php 
                
                    echo "<h5 class=\"mt-5\">Le site est en \"$langue\".</h5>";
                    echo "<p>" .time(). " = la date du jour ou le timestamp exprimée en secondes depuis le 1er janvier 1970.</p>";

                ?> 
            </div><!-- fin col -->

        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>III.</span></h2>
               
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
