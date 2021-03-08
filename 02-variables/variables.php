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

    <title>Cours PHP 7 - Variables</title>

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
                        <a class="nav-link" href="../01-intro/introduction.php">Introduction</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">02-variables</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item active" href="../02-variables/variables.php">Variables</a>
                                <a class="dropdown-item" href="../02-variables/types.php">Types</a>
                                <a class="dropdown-item" href="../02-variables/chaines.php">Chaînes</a>
                                <a class="dropdown-item" href="../02-variables/tableaux.php">Tableaux</a>
                        </div>
                    </li> 

                    <!-- PLAN DU COURS -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plan du cours</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                                            <a class="dropdown-item" href="#I.">I. Les variables</a>
                                            <a class="dropdown-item" href="#II.">II. Affectation des variables par valeur et par références</a>
                                            <a class="dropdown-item" href="#III.">III. Les variables prédéfinies</a>
                                            <a class="dropdown-item" href="#IV.">IV. Les opérateurs d'affectation combinés</a>
                                            <a class="dropdown-item" href="#V.">V. Les constantes</a>
                        </div>
                    </li> <!-- Fin sous titres -->
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
                <h1 class="text-center">Cours PHP 7 - Variables</h1>
                <p class="lead text-center mt-4">Une variable est le conteneur d'une valeur d'un des types utilisés par PHP (entiers, flottants, chaînes de caractères, tableaux, booléens, objets, ressource ou NULL).</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->
        <hr>

        <div id="I." class="row bg-light">
            <div class="col-sm-12">
                <h2><span>I.</span> Les variables</h2>
                <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($) suivi du nom de la variable. Les règles de création des noms de variable sont les suivantes :</p>
                <ul>
                    <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le caractère de soulignement (_).</li>
                    <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>
                    <li>
                        <?php echo "<p>Nom du fichier inclus : ".__FILE__."</p>"; ?>
                    </li>
                    <li>La longueur du nom n'est pas limitée, mais il convient d'être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus « parlant » possible. En relisant le code contenant la variable $nomclient, par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit $x ou $y.</li>
                </ul>
            </div><!-- fin col -->
            <div class="col-sm-12">
                <ul>
                    <li>La déclaration des variables n'est pas obligatoire en début de script. C'est là une différence notable avec les langages fortement typés comme Java ou C. Vous pouvez créer des variables n'importe où, à condition bien sûr de les créer avant de les utiliser, même s'il reste possible d'appeler une variable qui n'existe pas sans provoquer d'erreur.</li>
                    <li>L'initialisation des variables n'est pas non plus obligatoire et une variable non initialisée n'a pas de type précis.</li>
                    <li>Les noms des variables sont sensibles à la casse (majuscules et minuscules). $mavar et $MaVar ne désignent donc pas la même variable.</li>
                </ul>
            </div>
            <div class="col-sm-12">
                <h3>Les noms de variables suivants sont corrects</h3>
                <ul>
                    <li>$mavar</li>
                    <li>$_mavar</li>
                    <li>$mavar2</li>
                    <li>$M1</li>
                    <li>$_123</li>
                </ul>
                <h3>Les noms de variables suivants sont illégaux</h3>
                <ul>
                    <li>$*mavar</li>
                    <li>$5_mavar</li>
                    <li>$mavar2+</li>
                </ul>
            </div>           
        </div><!-- fin row -->

        <hr>

        <div id="II." class="row bg-light">
            <div class="col-sm-12">
                <h2><span>II.</span> Affectation de variables par valeur et par références</h2>
                <p>L'affectation consiste à donner une valeur à une variable. Lors de la création d'une variable, vous ne déclarez pas son type. C'est la valeur que vous lui affectez qui détermine ce type. Dans PHP, vous pouvez affecter une variable par valeur ou par référence.</p>
                <p>Exemples :</p>
                <ul>
                    <li>$mavar=75;</li>
                    <li>$mavar="Paris";</li>
                    <li>$mavar=7*3+2/5-91%7; //PHP évalue l'expression puis affecte le résultat </li>
                    <li>$mavar=mysql_connect($a,$b,$c); //la fonction retourne une ressource </li>
                    <li>$mavar=isset($var&&($var==9)); //la fonction retourne une valeur booléenne</li>
				</ul>
            </div>
           
        </div><!-- fin row -->

        <hr>

        <div id="III." class="row bg-light">
            <div class="col-sm-12">
                <h2><span>III.</span> Les variables prédéfinies</h2>
                <p>PHP dispose d'un grand nombre de variables prédéfinies, qui contiennent des informations à la fois sur le serveur et sur toutes les données qui peuvent transiter entre le poste client et le serveur, comme les valeurs saisies dans un formulaire, les cookies ou les sessions.</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Variable</th>
                            <th scope="col">Utilisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">$GLOBALS</th>
                            <td>Contient le nom et la valeur de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau. $GLOBALS["mavar"] récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions, par exemple).</td>
                        </tr>
                        <tr>
                            <th scope="row">$_COOKIE</th>
                            <td>Contient le nom et la valeur des cookies enregistrés sur le poste client. Les noms des cookies sont les clés de ce tableau (voir le chapitre 13).</td>
                        </tr>
                        <tr>
                            <th scope="row">$_ENV></th>
                            <td>Contient le nom et la valeur des variables d'environnement qui sont changeantes selon les serveurs.</td>
                        </tr>
                        <tr>
                            <th scope="row">$_FILES</th>
                            <td>Contient le nom des fichiers téléchargés à partir du poste client.</td>
                        </tr>
                        <tr>
                            <th scope="row">$_GET</th>
                            <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode GET. Les noms des champs du formulaire sont les clés de ce tableau.</td>
                        </tr>
                        <tr>
                            <th scope="row">$_POST</th>
                            <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode POST. Les noms des champs du formulaire sont les clés du tableau.</td>
                        </tr>
                        <tr>
                            <th scope="row">$_REQUEST</th>
                            <td>Contient l'ensemble des variables superblogales $_GET, $_POST, $_COOKIE et $_FILES.</td>
                        </tr>
                        <tr>
                            <th scope="row">$_SERVER</th>
                            <td>Contient les informations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du script en cours d'exécution. Retenons les variables suivantes :

                            <ul>
                                <li>$_SERVER["HTTP_ACCEPT_LANGUAGE"], qui contient le code de langue du navigateur client.</li>
                                <li>$_SERVER["HTTP_COOKIE"], qui contient le nom et la valeur des cookies lus sur le poste client.</li>
                                <li>$_SERVER["HTTP_HOST"], qui donne le nom de domaine</li>
                                <li>$_SERVER["SERVER_ADDR"], qui indique l'adresse IP du serveur.</li>
                                <li>$_SERVER["PHP_SELF"], qui contient le nom du script en cours. Nous l'utiliserons souvent dans les formulaires.</li>
                                <li>$_SERVER["QUERY_STRING"], qui contient la chaîne de la requête utilisée pour accéder au script.</li>
                            </ul>
                            
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">$_SESSION</th>
                            <td>Contient l'ensemble des noms des variables de session et leurs valeurs</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- fin col -->

            <hr>

            <div id="IV." class="col-sm-12">
                <h2><span>IV.</span> Les opérateurs d'affectation combinés</h2>
                <p>En plus de l'opérateur classique d'affectation =, il existe plusieurs opérateurs d'affectation combinée. Ces opérateurs réalisent à la fois une opération entre deux opérandes et l'affectation du résultat à l'opérande de gauche.</p>

                <table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">Opérateur</th>
						<th scope="col">Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">+=</th>
							<td>Addition puis affectation :<br>
								$x += $y équivaut à $x = $x + $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">-=</th>
							<td>Soustraction puis affectation :<br>
								$x -= $y équivaut à $x = $x - $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">*=</th>
							<td>Multiplication puis affectation :<br>
							$x *= $y équivaut à $x = $x * $y<br>
							$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">**=</th>
							<td>Puissance puis affectation<br>
							$x**=2 équivaut à $x=($x)²</td>
						</tr>
						<tr>
							<th scope="row">/=</th>
							<td>Division puis affectation :<br>
							$x /= $y équivaut à $x = $x / $y<br>
							$y peut être une expression complexe dont la valeur est un nombre différent de 0.</td>
						</tr>
						<tr>
							<th scope="row">%=</th>
							<td>Modulo puis affectation :<br>
								$x %= $y équivaut à $x = $x % $y $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">.=</th>
							<td>Concaténation puis affectation :<br>
								$x .= $y équivaut à $x = $x . $y<br>
								$y peut être une expression littérale dont la valeur est une chaîne de caractères.</td>
						</tr>
					</tbody>
                </table>
            </div><!-- fin col -->

            
            <hr>
           

            <div id="V." class="col-sm-12">
                <h2><span>V.</span> Les constantes</h2>
                <p>Vous serez parfois amené à utiliser de manière répétitive des informations devant rester constantes dans toutes les pages d'un même site. Il peut s'agir de texte ou de nombres qui reviennent souvent. Pour ne pas risquer l'écrasement accidentel de ces valeurs, qui pourrait se produire si elles étaient contenues dans des variables, vous avez tout intérêt à les enregistrer sous forme de constantes personnalisées.</p>
                <p>On peut définir ses constantes soi-même cf. ; Pour définir des constantes personnalisées, utilisez la fonction define(), dont la syntaxe est la suivante : <strong>boolean define(string nom_cte, divers valeur_cte, boolean casse)</strong> Voir la page <a href="../00-pages/03-page.php">suivante</a></p>

                <h3>Les constantes prédéfinies</h3>
                <p>Il existe dans PHP un grand nombre de constantes prédéfinies, que vous pouvez notamment utiliser dans les fonctions comme paramètres permettant de définir des options. Nous ne pouvons les citer toutes tant elles sont nombreuses, mais nous les définirons au fur et à mesure de nos besoins. Voir la page <a href="../00-pages/04_constantes_predefinies.php">avec un exemple</a></p>

                <table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Constantes</th>
								<th scope="col">Résultat</th>
							</tr>
						</thead>
						<tbody>
                                <tr>
                                    <th scope="row">PHP_VERSION</th>
                                    <td>PHP_VERSION
                                    <?php echo "<p><strong>PHP version ".PHP_VERSION."</strong></p>"; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">PHP_OS</th>
                                    <td>Nom du système d'exploitation du serveur
                                    <?php echo "<p><strong>Nom OS : ". PHP_OS ."</strong></p>"; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">DEFAULT_INCLUDE_PATH</th>
                                    <td>Chemin d'accès aux fichiers par défaut
                                    <?php echo "<p><strong>Chemin : ".__LINE__."</strong></p>"; ?>    
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">__FILE__</th>
                                    <td>Nom du fichier en cours d'exécution
                                    <?php echo "<p><strong>Nom du fichier : ".__FILE__."</strong></p>"; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">__LINE__</th>
                                    <td>Numéro de la ligne en cours d'exécution
                                    <?php echo "<p><strong>Numéro de la ligne : n° ".__LINE__."</strong></p>"; ?>
                                    </td>   
                                </tr>
						</tbody>
				</table>



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
