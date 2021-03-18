<?php require("../inc/functions.php"); ?>
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

    <title>Cours PHP 7 - Méthode POST</title>

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
                <h1 class="text-center">Cours PHP 7 - La méthode POST</h1>
                <p class="lead text-center mt-4">La méthode POST réceptionne les données d'un formulaire, $_POST est une superglobale.</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light p-3">
            <div class="col-sm-12 col-md-6">
                <h2><span>I.</span> Formulaire</h2>
                <ul>
                    <li>Un formulaire doit toujours être dans une balise <code>&#8249;form></code> pour fonctionner.</li>
                    <li>L'attribut method indique comment les données vont circuler vers le PHP.</li>
                    <li>L'attribut action indique l'URL de destination des données (si l'attribut action est vide, les données vont vers le même script ou la même page).</li>
                    <li>Ensuite sur les names il ne faut pas les oublier sur les formulaires ; ils constituent les indices de $_POST qui réceptionne les données.</li>
                </ul>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div><!-- fin champs prénom -->

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div><!-- fin champs nom -->

                    <div class="form-group">
                        <label for="">Votre commentaire</label>
                        <textarea class="form-control" id="commentaire" rows="2" name="commentaire" required></textarea>
                    </div><!-- fin champs commentaire -->

                    <button type="submit" class="btn btn-small btn-info">Envoyer</button>

                </form><!-- fin du formulaire -->
                
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2><span>II.</span> Récupération des données</h2>

                <ul>
                    <li>$_POST est une superglobale qui permet de récupérer les données saisirs dans un formulaire,</li>
                    <li>$_POST est donc un tableau (array) et il est disponible dans tous les contextes du script,</li>
                    <li>Le tableau $_POST se remplit de la manière suivante :
                        <code>
                            $_POST = array(<br>
                            'name1' => 'valeur1',<br>
                            'nameN' => 'valeurN',<br>
                            );
                        </code>
                    </li>
                    <li>Donc ou name1 et nameN correspondent aux attributs "name" du formulaire, et où valeur1 et valeurN correspondent aux valeurs saisies par l'internaute.</li>
                </ul>
                
                <?php 
                    if (!empty($_POST)) {// si $_POST n'est pas vide, c'est qu'il est rempli et donc que le formulaire a été envoyé, notez qu'en l'état on peut l'envoyer avec des champs vides, les valeurs des $_POST étant alors des strings vides. En effet on peut avoir des informations non obligatoires dans un formulaire et les input ne seront pas remplis.
                        // jeVarDump($_POST);

                        echo "<p>Prénom : " .$_POST['prenom']. "</p><br<";
                        echo "<p>Nom : " .$_POST['nom']. "</p><br>";
                        echo "<blockquote>Commentaire : " .$_POST['commentaire']. "</blockquote><br>";
                        
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
