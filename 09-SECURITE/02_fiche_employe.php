<?php 
require_once '../inc/functions.php';

$host = 'localhost';
$database = 'entreprise';
$user = 'root';
$psw = '';

$pdoENT = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw);
$pdoENT->exec("SET NAMES utf8");

// traitement des infos reçues par $_GET
// jePrintR($_GET); // pour vérifier que l'on reçoit une info par l'URL.

if (isset ($_GET['id_employes'])) {//si existe l'indice "id_employes" dans $_GET, donc dans l'URL, c'est qu'on a demandé le détail d'un employé.
    // jePrintR($_GET) 
    $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE id_employes = :id_employes");
    $resultat->execute(array (
        ':id_employes' => $_GET['id_employes']// on associe le marqueur vide à l'id_employes qui provient de l'url
    ));

    // jePrintR($resultat);
    // jePrintR($resultat->rowCount());

    if($resultat->rowCount() == 0) {//si il y a 0 lignes dans $resultat c'est que l'id n'existe pas
        header('location:02_employes.php');// on redirige vers une autre page
        exit();// on arrête le script
    }

    $fiche = $resultat->fetch(PDO::FETCH_ASSOC);
    // jePrintR($fiche);
}else{
    header('location:02_employes.php');
    exit();
}

// Traitement de mise à jour du formulaire

if ( !empty($_POST)) {
    //pour se prémunir des failles nous faisons ceci
    $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
    $_POST['nom'] = htmlspecialchars($_POST['nom']);
    $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
    $_POST['service'] = htmlspecialchars($_POST['service']);
    $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
    $_POST['salaire'] = htmlspecialchars($_POST['salaire']);

    $requete = $pdoENT->prepare( " UPDATE employes SET prenom = :prenom, nom = :nom, sexe = :sexe, service = :service, date_embauche = :date_embauche, salaire = :salaire WHERE id_employes = :id_employes " );

    $requete->execute(array (
        ':prenom' => $_POST['prenom'],
        ':nom' => $_POST['nom'],
        ':sexe' => $_POST['sexe'],
        ':service' => $_POST['service'],
        ':date_embauche' => $_POST['date_embauche'],
        ':salaire' => $_POST['salaire'],
        ':id_employes' => $_GET['id_employes'],
    ));
    header('location:02_employes.php');
    exit();
}//fin if !empty


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

    <title>Cours PHP 7 - Fiche employé <?php echo $fiche['id_employes']; ?></title>

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
                <h1 class="text-center">Cours PHP 7 - Employé<?php if($fiche['sexe'] == 'f') {echo 'e';} echo " " .$fiche['prenom']. " " .$fiche['nom']; ?></h1>
                <p class="lead text-center mt-4">Modification d'un employé</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>I.</span></h2>
               
                <div class="card" style="width: 18rem;">
                    <?php if($fiche['sexe'] == 'f') { ?>

                        <img src="../img/femme.jpg" class="card-img-top" alt="Avatar">

                    <?php } else { ?>

                            <img src="../img/homme.jpg" class="card-img-top" alt="Avatar">

                    <?php } ?>
                    
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $fiche['prenom']. " " .$fiche['nom']; ?></h5>

                        <p class="card-text"><?php echo "Service : " .$fiche['service']. "<br> Salaire : " .$fiche['salaire']. " €<br> Date d'embauche : " .date('d/m/Y', strtotime($fiche['date_embauche'])); ?></p>   
                    </div> <!-- fin card body -->
                </div><!-- fin card --> 
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2><span>II.</span></h2>
                <form action="" method="POST" class="w-75">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $fiche['prenom']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom</label>
                         <!-- if (isset($fiche['nom'])) { echo "..."; } else { echo '';} si il n'y a rien je mets une chaîne vide opérateur de coalescence-->
                         <!-- cet opérateur avec $_POST['nom'] et le if isset else "résumé" avec l'opérateur de coalescence sera utile si on utilise un seul formulaire pour INSERT et UPDATE -->
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $fiche['nom'] ?? ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <select id="sexe" class="form-control" name="sexe">
                            <!-- <option selected>Votre sexe</option> -->
                            <option value="f">Femme</option>
                            <option value="m"<?php if(!(strcmp("m", $fiche['sexe']))) echo " selected"; ?>>Homme</option>
                            
                        </select>
                    </div>
                    

                    <!-- avec des boutons radios : -->

                    <!-- <div class="form-group">
                        <label for="sexe">Sexe</label>-->
                        <!-- pour les boutons radio, le 1er sera "checked" et le second le sera si on a l'info du sexe et si cette info == 'f'-->
                        <!-- <input type="radio" name="sexe" value="m" checked> Homme
                        <input type="radio" name="sexe" value="f"<?php if (isset($fiche['sexe']) && $fiche['sexe'] =='f') echo 'checked'; ?>> Femme
                    </div>  -->

                    <div class="form-group">
                        <label for="service">Service</label>
                        <select id="service" class="form-control" name="service" value="<?php echo $fiche['service']; ?>">
                            <!-- <option selected>Sélectionnez le service</option> -->
                            <option value="assistant" <?php if(!(strcmp("assistant", $fiche['service']))) {echo " selected";} ;?>>assistant</option>
                            <option value="commercial" <?php if(!(strcmp("commercial", $fiche['service']))) {echo " selected";} ;?>>commercial</option>
                            <option value="comptabilite" <?php if(!(strcmp("comptabilite", $fiche['service']))) {echo " selected";} ;?>>comptabilite</option>
                            <option value="communication" <?php if(!(strcmp("communication", $fiche['service']))) {echo " selected";} ;?>>communication</option>
                            <option value="direction" <?php if(!(strcmp("direction", $fiche['service']))) {echo " selected";} ;?>>direction</option>
                            <option value="informatique" <?php if(!(strcmp("informatique", $fiche['service']))) {echo " selected";} ;?>>informatique</option>
                            <option value="juridique" <?php if(!(strcmp("juridique", $fiche['service']))) {echo " selected";} ;?>>juridique</option>
                            <option value="production" <?php if(!(strcmp("production", $fiche['service']))) {echo " selected";} ;?>>production</option>
                            <option value="secretariat" <?php if(!(strcmp("secretariat", $fiche['service']))) {echo " selected";} ;?>>secretariat</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="date_embauche">Date d'embauche</label>
                        <input type="date" class="form-control" name="date_embauche" id="date_embauche" value="<?php echo $fiche['date_embauche']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="salaire">Salaire</label>
                        <input type="number" class="form-control" id="salaire" name="salaire" value="<?php echo $fiche['salaire']; ?>" required>
                    </div>

                    <button type="submit" class="btn btn-small btn-info">Envoyer</button>
                </form>
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
