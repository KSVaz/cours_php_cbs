<?php require_once '../inc/functions.php'; ?>
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

    <title>Cours PHP 7 - PDO</title>

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
                <h1 class="text-center">Cours PHP 7 - PDO (PHP Data Object)</h1>
                <p class="lead text-center mt-4">La variable "$pdo" est un objet qui représente la connexion à une BDD.</p>
            </div><!-- fin col -->
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12">
                <h2><span>I.</span> Connexion à la BDD</h2>
                <p><abbr title="PHP Data Object">PDO</abbr> est l'acronyme de PHP Data Object</p>

                <?php 
                    $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise',// on a en premier lieu le driver mysql (IBM, ORACLE, ODBC ...), le nom du serveur, le nom de la BDD
                    'root',// l'utilisateur pour la BDD
                    '',// si vous êtes sur MAC il y a un mdp = 'root'
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// cette ligne sert à afficher les erreurs SQL dans le navigateur
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
                    ));

                    // connexion PISOLA
                    // $host = 'localhost';
                    // $database = 'entreprise';
                    // $user = 'root';
                    // $psw = '';

                    // $pdoENT = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw);
                    // $pdoENT ->exec("SET NAMES utf8");

                    jeVarDump($pdoENT); // l'objet est vide car il n' y a pas de propriétés
                    jeVarDump( get_class_methods ($pdoENT));//permet d'afficher la liste des méthodes présentes dans l'objet PDO
                ?> 
            </div><!-- fin col -->

            <div class="col-sm-12">
                <h2><span>II.</span> Faire des requêtes avec <code>exec()</code></h2>
                <p>La méthode exec() est utilisée pour faire des requêtes qui ne retournent pas de résultats : INSERT, UPDATE, DELETE</p>
                <p>Valeurs de retours : <br>
                Succès : dans le jeVarDump de $requete on aura le nombre lignes affectées par la requête, 3 delete = int(3) <br>
                Echec : false = 0
                </p>

                <?php 
                    //on va insérer un employé dans la BDD
                    // INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Bon', 'm', 'informatique', '2021-03-18', 2000)

                    // $requete = $pdoENT->exec( "INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Bon', 'm', 'informatique', '2021-03-18', 2000)" ); //on la commente pour ne pas insérer cette requête à chaque fois qu'on rafraichit la page

                    // $requete = $pdoENT->exec( "DELETE FROM employes WHERE prenom ='Jean' AND nom='Bon'" );
                    // jeVarDump($requete);

                    echo "<p>Dernier id généré en BDD : " .$pdoENT->lastInsertId(). ".</p>";
                ?> 
            
            </div><!-- fin col -->

            <div class="col-sm-12">
                <h2><span>III.</span> Faire des requêtes avec <code>query()</code></h2>
                <p><code>query()</code> est utilisé pour faire des requêtes qui retournent un ou plusieurs résultats : SELECT mais aussi DELETE UPDATE et INSERT</p>
                <p>En cas de succès : query() retourne un nouvel objet qui provient de la classe PDOstatement. <br> En cas d'échec : false</p>

                <ul>
                    <li>Pour information, on peut mettre dans les paramètres() de fetch()</li>
                    <li>PDO::FETCH_NUM : pour obtenir un tableau aux indices numériques</li>
                    <li>PDO::FETCH_OBJ : pour obtenir un dernier objet</li>
                    <li>Ou encore des () vides : pour obtenir un mélange de tableau associatif et numérique</li>
                </ul>

                <?php 

                    //1- on demande des informations à la BDD car il y a un ou plusieurs résultats avec query()
                    $requete = $pdoENT->query( " SELECT * FROM employes WHERE prenom = 'Emilie' " );
                    // jeVarDump($requete);

                    //2- dans cet objet $requete, nous ne voyons pas encore les données concernant Amandine pourtant elles s'y trouvent. Pour y accéder, nous devons utiliser une méthode de $requete qui s'appelle fetch()

                    $ligne = $requete->fetch( PDO::FETCH_ASSOC );
                    // 3- avec cette méthode fetch() on transforme l'objet $requete
                    // 4- fetch(), avec le paramètre PDO::FETCH_ASSOC permet de transformer l'objet de la requête $requete en un array associatif appelé ici $ligne : on y trouve en indice le nom des champs de la requête SQL
                    jeVarDump($ligne);

                    echo "<ul><li>Prénom : " .$ligne['prenom']. "</li><li>Nom : " .$ligne['nom']. "</li><li>Sexe : " .$ligne['sexe']. "</li><li>Service : " .$ligne['service']. "</li><li>Date d'entrée dans l'entreprise : " .$ligne['date_embauche']. "</li><li>Salaire : " .$ligne['salaire']. " €</li></ul>";

                    // exo afficher le service de l'employé dont l'ID est 417 et son nom et son prénom

                    $requete = $pdoENT->query( " SELECT id_employes, prenom, nom FROM employes WHERE id_employes = '417' " );
                    $ligne = $requete->fetch( PDO::FETCH_ASSOC );
                    jeVarDump($ligne);
                    
                    echo "<ul><li>ID :" .$ligne['id_employes']. "</li><li>Prénom : " .$ligne['prenom']. "</li><li>Nom : " .$ligne['nom']. "</li>";
                ?> 
                
            </div><!-- fin col -->

            <div class="col-sm-12">
                <h2><span>IV.</span> Faire des requêtes avec query() et afficher plusieurs résultats</h2>
                
                <?php 
                    $requete = $pdoENT->query("SELECT * FROM employes ORDER BY prenom");
                    // jeVarDump($requete);

                    // $ligne = $requete->fetch( PDO::FETCH_ASSOC );
                    // jeVarDump($ligne);

                    $nbr_employes = $requete->rowCount();//cette méthode rowCount() permet de compter le nombre d'enregistrements retournés par la requête
                    // jeVarDump($nbr_employes);

                    echo "<p>Il y a " .$nbr_employes. " employés dans la base.</p>";
                    
                    // comme nous avons plusieurs résultats dans $requete, nous devons faire une boucle pour les parcourir
                    // fetch()va chercher la ligne suivante du jeu de résultat à chaque tour de boucle et le transforme en objet. La boucle while permet de faire avancer le curseur dans l'objet. Quand il arrive à la fin, fetch() retourne FALSE et la boucle s'arrête

                    echo "<ul>";
                    while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                        echo "<li>".$ligne['prenom']. " " .$ligne['nom']. " - " .$ligne['sexe']. " - " .$ligne['service']. " - " .$ligne['date_embauche']. " - " .$ligne['salaire']. " €</li>";
                    }
                    echo "</ul>";

                    // Exo afficher la liste des différents services dans une ul en mettant un service par li

                    $requete = $pdoENT->query("SELECT DISTINCT(service) FROM employes ORDER BY service");
                    $nbr_services = $requete->rowCount();

                    echo "<div class=\"bg-info rounded w-50 text-white mt-4 mx-auto\">";
                    echo "<p class=\"p-2\">Il y a " .$nbr_services. " services dans l'entreprise :</p>";
                    echo "</div>";

                    echo "<div class=\"border border-info rounded w-50 pt-3 mx-auto\">";
                    echo "<ul>";
                    while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                        echo "<li>".$ligne['service']. "</li>";
                    }
                    echo "</ul>";
                    echo "</div>";

                    // <!-- EXO 1/ dnas un h2, compter le nombre d'employés
                    // 2/ puis afficher toutes les informations des employés dans un tableau HTML triés par ordre alphabétique de nom

                    $requete = $pdoENT->query("SELECT * FROM employes ORDER BY nom");
                    $nbr_employes = $requete->rowCount();

                    echo "<h2><span>Exo.</span> Il y a " .$nbr_employes. " employés dans la société.</h2>";

                    echo "<table class=\"table table-dark table-striped\">";
                    echo "<thead><tr><th scope=\"col\">ID</th><th scope=\"col\">Prénom</th><th scope=\"col\">Nom</th><th scope=\"col\">Sexe</th><th scope=\"col\">Service</th><th scope=\"col\">Date d'embauche</th><th scope=\"col\">Salaire</th></tr></thead>";
                    while($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {

                        echo "<tr>";
                        echo "<td>#". $ligne['id_employes']. "</td>";   
                        echo "<td>";
                        if($ligne['sexe'] == 'f') {
                            echo "Mme ";
                        }else {
                            echo "M. ";
                        }
                        echo $ligne['prenom']. "</td>";
                        echo "<td>". $ligne['nom']. "</td>";
                        echo "<td>". $ligne['sexe']. "</td>";
                        echo "<td>". $ligne['service']. "</td>";
                        echo "<td>". $ligne['date_embauche']. "</td>";
                        echo "<td>". $ligne['salaire']. " €</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                    echo "<table class=\"table table-info table-striped\">";
                    foreach ( $pdoENT->query( " SELECT * FROM employes ORDER BY sexe DESC, nom ASC " ) as $infos ) { //$employe étant un tableau on peut le parcourir avec une foreach. La variable $infos prend les valeurs successivement à chaque tour de boucle
                    // jevardump($infos);
                    echo "<tr>";
                    echo "<td>";
                    if ( $infos['sexe'] == 'f') {
                      echo "Mme ";
                    } else {
                      echo "M. ";
                    } echo $infos['nom']. " " .$infos['prenom']. "</td>";
                    echo "<td>" .$infos['service']. " </td>";

                    // Ici on veut que la date s'affiche au format français jj/mm/aaaa
                    // setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR');
                    // $dateBDD = $infos['date_embauche'];
                    // echo "<td>" . strftime('%d %B %Y', strtotime($dateBDD)). " </td>";
                    echo "<td>" .date('d/m/Y', strtotime($infos['date_embauche'])). " </td>";


                    echo "<td>" .number_format($infos['salaire'], 2, ',', ' '). " €</td>"; // number_format() = pour avoir un nombre au format français 0000,00 
                    echo "</tr>";
                    }
                    echo "</table>";

                ?> 
               
            </div><!-- fin col -->

            <div class="col-sm-12">
                <h2><span>V.</span> Requêtes préparées</h2>
                <p>Les requêtes préparées sont préconisées si vous exécutez plusieurs fois la même requête, ainsi vous éviterez au SGBD de répéter toutes les phrases, analyses, interprétations, exécutions etc.. >> on gagne en performance.</p>
                <p>Les requêtes préparées sont utiles pour nettoyer les données et se prémunir des injections de type SQL (tentative de piratage) cf. 09-securite</p>

                <?php 
                    // une requête préparée se réalise en 3 étapes
                    $nom = "Thoyer"; // ici j'ai l'info que je cherche dans une variable, je cherche un résultat ex : je cherche "Thoyer"

                    // 1- on prépare la requête
                    $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE nom =:nom"); //a- prepare permet de préparer la requête sans l'exécuter
                    // b- :nom est un marqueur qui est vide (comme une boîte vide) et qui attend une valeur
                    // c- $resultat est pour le moment un objet PDOstatement

                    // 2- on lie le marqueur :nom à une variable $nbr_employes
                    $resultat->bindParam(':nom', $nom); // bindParam permet de lier le marqueur :nom à la variable $nom. On lie les paramètres
                    // $resultat->bindValue(':nom', 'titi'); // si on a besoi de lier le marqueur à une valeur fixe
                    
                    // 3- puis on exécute la requête
                    $resultat->execute(); // permet d'exécuter toute la requête
                    $employe = $resultat->fetch(PDO::FETCH_ASSOC);

                    jeVarDump($employe); // renvoie TRUE

                    //prepare() et boucle 
                    $sexe = "f";
                    $requete = $pdoENT->prepare( " SELECT * FROM employes WHERE sexe = :sexe " ); 
                    $requete->bindParam(':sexe', $sexe);
                    $requete->execute();
                    $nombre_employes = $requete->rowCount();
                    jeVarDump($nombre_employes);
                    while ( $ligne = $requete->fetch( PDO::FETCH_ASSOC ) ) {
						echo "<p>Nom : " .$ligne['prenom']. " " .$ligne['nom']." travaille au service : " .$ligne['service']."</p>";
					}

                    echo "<hr>";

                    // requête préparée sans bindParam()
                    $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom");//préparation de la requête
                    $resultat->execute(array(
                        ':nom' => 'Thoyer',
                        ':prenom' => 'Amandine'//on peut se passer de bindParam()
                    ));
                    $employe = $resultat->fetch(PDO::FETCH_ASSOC);//on va chercher les infos
                    // jeVarDump($employe);

                    echo $employe['prenom']. " " .$employe['nom']. " a été embauchée le " .date('d/m/Y', strtotime($employe['date_embauche'])). " au service " .$employe['service'];//on affiche les infos

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
