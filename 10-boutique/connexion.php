<?php 
//require à placer sur toutes les pages
require_once 'inc/init.php';

// jePrintR($_SESSION);

?> 
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&display=swap" rel="stylesheet">  
    
    <link rel="stylesheet" href="css/style.css">

    <title>La Boutique - Connexion</title>
  </head>
  <body class="bg-light">
  <div class="container-fluid p-5">
        <div class="row jumbotron">
            <div class="col-sm-12">
                <h1>La Boutique - Connexion</h1>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row my-5">
            <div class="col-sm-12 col-md-6">
                <h2>Connectez-vous</h2>
                <form action="" method="POST" class="mt-4 w-50">
                    <div class="form-group">
                        <label for="pseudo">Pseudo *</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre petit nom"  value="<?php echo $_POST['pseudo'] ?? ''; ?>" required>
                    </div>
            
                    <div class="form-group mt-2">
                        <label for="mdp">Mot de passe *</label>
                        <input type="password" class="form-control" id="mdp" name="mdp" minlength="4" maxlength="20" placeholder="Vous seul le connaissez !" value="<?php echo $_POST['mdp'] ?? ''; ?>" required>
                    </div>
            
                    <button id="btnConnexion" type="submit" class="btn btn-small text-white mt-4">Connexion</button>

                    <div class="form-text mt-3">Connectez-vous pour administrer "La Boutique".</div>  
                </form>
            </div><!-- fin col -->

            <div id="icone" class="d-sm-none d-md-inline-flex col-md-6 d-flex align-items-center position-relative">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="position-absolute end-0">
                <path fill="#CEB8F1" d="M42.8,-61.9C54.3,-59.2,61.7,-45.4,69.7,-30.9C77.7,-16.5,86.4,-1.4,82.1,10.1C77.8,21.6,60.5,29.5,49.1,42.2C37.6,55,32,72.5,20.2,81.9C8.4,91.3,-9.6,92.7,-22.1,84.7C-34.6,76.7,-41.7,59.5,-49.9,45.6C-58.2,31.8,-67.6,21.5,-72.5,8.5C-77.3,-4.4,-77.5,-20,-69.2,-28.9C-61,-37.9,-44.2,-40.3,-31.2,-42.4C-18.3,-44.4,-9.1,-46.1,3.3,-51.2C15.7,-56.3,31.3,-64.7,42.8,-61.9Z" transform="translate(100 100)" />
                </svg>
            </div><!-- fin col bulle -->
        </div><!-- fin row -->



       


    </div> <!-- fin du container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
