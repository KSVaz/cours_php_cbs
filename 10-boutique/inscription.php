<?php 
//require à placer sur toutes les pages
require_once 'inc/init.php';

// jePrintR($_SESSION);

if(!empty($_POST)) {//si form n'est pas vide
    //jePrintR($_POST);

    if ( !isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 4 || strlen($_POST['pseudo']) > 20 ) {
        $contenu .="<div class=\"alert alert-danger\">Le pseudo doit contenir entre 4 et 20 caractères</div>";//si indice inf à 4 car. ou sup à 20 on affiche ce message
    } //fin if (!isset($_POST['pseudo']))

    if ( !isset($_POST['mdp']) || strlen($_POST['mdp']) < 4 || strlen($_POST['mdp']) > 20 ) {
        $contenu .="<div class=\"alert alert-danger\">Le mot de passe doit contenir entre 4 et 20 caractères</div>";
    } //fin if (!isset($_POST['mdp']))

    if ( !isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20 ) {
        $contenu .="<div class=\"alert alert-danger\">Le nom doit contenir entre 2 et 20 caractères</div>";
    } //fin if (!isset($_POST['nom']))

    if ( !isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 20 ) {
        $contenu .="<div class=\"alert alert-danger\">Le prénom doit contenir entre 2 et 20 caractères</div>";
    } //fin if (!isset($_POST['prenom']))

    if ( !isset($_POST['email']) || strlen($_POST['email']) > 50 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) > 20 ) {
        $contenu .="<div class=\"alert alert-danger\">Votre email n'est pas confonrme.</div>";// filter_var -> filtre de variable // dnas ce filtre on passe la fonction prédéfinie FILTER_VALIDATE_EMAIL (c'est une constante elle est écrit en majuscule) cette fonction vérifie que le format est bien de format email
    } //fin if (!isset($_POST['email']))

    if ( !isset($_POST['civilite']) || $_POST['civilite'] != 'm' && $_POST['civilite'] != 'f' ) {
        $contenu .="<div class=\"alert alert-danger\">La civilité n'est pas valide.</div>";// est ce que j'ai f ou m sinon j'affiche le message
    } //fin if (!isset($_POST['civilite']))

    if ( !isset($_POST['adresse']) || strlen($_POST['adresse']) < 2 || strlen($_POST['adresse']) > 100 ) {
        $contenu .="<div class=\"alert alert-danger\">L'adresse est-elle complète ?'</div>";
    } //fin if (!isset($_POST['adresse']))

    if ( !isset($_POST['code_postal']) || !preg_match( '#^[0-9]{5}$#', $_POST['code_postal']) ) {
        $contenu .="<div class=\"alert alert-danger\">Le code postal est invalide</div>";// est-ce que le code postal correspond à l'expression régulière précisée : la "regex" regular expression
    } //fin if (!isset($_POST['code_postal']))

    if ( !isset($_POST['ville']) || strlen($_POST['ville']) < 2 || strlen($_POST['ville']) > 100 ) {
        $contenu .="<div class=\"alert alert-danger\">Vérifiez le nom de votre ville</div>";
    } //fin if (!isset($_POST['ville']))

    if(empty($contenu)) {//si la variable est vide c'est qu'il n'y a plus d'erreurs sur le form
        
        $membre = executeRequete("SELECT * FROM membre WHERE pseudo = :pseudo",
                                array(':pseudo' => $_POST['pseudo']));

        if ($membre->rowCount() > 0) { // si la requête retourne des lignes c'est que le pseudo existe déjà
            $contenu .= '<div class="alert alert-danger">le pseudo est indisponible veuillez en choisir un autre</div>';
        } else { // si on inscirt le membre en BDD
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);// cette fonction prédéfinie permet de hasher le mot de passe selon l'algorithme actuel "bcrypt".  Il faudra lors de la connexion comparer le hash de la BDD avec celui du mdp de l'intérieur, le mdp sera "crypté"
            
            $succes = executeRequete(" INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, adresse, code_postal, ville,  statut) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :civilite, :adresse, :code_postal, :ville,  0)", 
                array(
                    ':pseudo' => $_POST['pseudo'],
                    ':mdp' => $mdp, //on prend le mot de passe hashé
                    ':nom' => $_POST['nom'],
                    ':prenom' => $_POST['prenom'],
                    ':email' => $_POST['email'],
                    ':civilite' => $_POST['civilite'],
                    ':adresse' => $_POST['adresse'],
                    ':code_postal' => $_POST['code_postal'],
                    ':ville' => $_POST['ville'],
            ));

            if ($succes) {
                $contenu .= '<div class="alert alert-success">Vous êtes inscrit <a href="connexion.php">Cliquez ici pour vous connecter</a></div>'; 
            } else {
                $contenu .= '<div class="alert alert-danger">Erreur lors de l`\enregistrement !</div>';
            }//fin du if if if ($succes)

        } // fin du if else vérification du membre ou inscription


    }//fin if (empty($contenu))

}//fin if principal

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

    <title>La Boutique - Inscription</title>
  </head>
  <body class="bg-light">
  <div class="container-fluid p-5">
        <div class="row jumbotron">
            <div class="col-sm-12">
                <h1>La Boutique - Inscription</h1>
                <?php echo $contenu; ?>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row my-5">
            <div class="col-sm-12 col-md-6">
                <h2>Inscrivez-vous</h2>
                <form action="" method="POST" class="mt-4">
                    <div class="form-group">
                        <label for="pseudo">Pseudo *</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?php echo $_POST['pseudo'] ?? ''; ?>" required>
                    </div>
            
                    <div class="form-group mt-2">
                        <label for="mdp">Mot de passe *</label>
                        <input type="password" class="form-control" id="mdp" name="mdp" minlength="4" maxlength="20" value="<?php echo $_POST['mdp'] ?? ''; ?>" required>
                        <div id="indication" class="form-text mb-3">Votre mot de passe doit contenir entre 4 et 20 caractères.</div>
                    </div>
            
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $_POST['nom'] ?? ''; ?>" required>
                    </div>
            
                    <div class="form-group mt-2">
                        <label for="prenom">Prénom *</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>" required>
                    </div>
            
                    <div class="form-group mt-2">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" required>
                    </div>
            
                    <div class="form-group my-2">
                        <label for="civilité">Civilité *</label>
                        <!-- pour les boutons radio, le 1er sera "checked" et le second le sera si on a l'info du sexe et si cette info == 'f'-->
                        <input type="radio" name="civilite" value="m" checked> Homme
                        <input type="radio" name="civilite" value="f"<?php if (isset($_POST['civilite']) && $_POST['civilite'] =='f') echo 'checked'; ?>> Femme
                    </div> 
            
                    <div class="form-group">
                        <label for="adresse">Adresse *</label>
                        <textarea type="text" cols="2" class="form-control" name="adresse" id="adresse" value="<?php echo $_POST['adresse'] ?? ''; ?>"></textarea>
                    </div>
            
                    <div class="form-group mt-2">
                        <label for="code_postal">Code postal *</label>
                        <input type="text" class="form-control" id="code_postal" name="code_postal" value="<?php echo $_POST['code_postal'] ?? ''; ?>" required>
                    </div>
            
                    <div class="form-group mt-2">
                        <label for="ville">Ville *</label>
                        <input type="text" class="form-control" name="ville" id="ville" value="<?php echo $_POST['ville'] ?? ''; ?>">
                    </div>
            
                    <button type="submit" class="btn btn-small text-white mt-4">S'inscrire</button>
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
