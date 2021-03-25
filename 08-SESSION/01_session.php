<?php 
   
//création ou ouverture d'une session
echo "<h1>Cours PHP 7 - \$_SESSION</h1>";

echo '<p>Les données du fichier de session sont accessibles et manipulables à partir de la super globale $_SESSION.</p>'; //de simples quotes permettent à "$_SESSION" d'être considéré comme une string. Pas besoin du caractère d'échappement (comme avec des doubles quotes).

// cette fonction si on a besoin des informations de session devra être placée au début de chaque page
session_start();//permet de créer un fichier de session avec son identifiant ou de l'ouvrir si il existe déjà (l'identifiant) et que l'on a reçu un cookie avec l'id dedans

//Principe des sessions : un fichier temporaire appelé "session" est crée sur le serveur, avec un identifiant unique. Cette session est liée à un internaute, dans le même temps un cookie est déposé sur le poste de l'internaute avec l'identifiant  (au nom de PHPSESSID). Ce cookie se détruit quand on quitte le navigateur.
//Le fichier de session peut contenir des informations sensibles !!! Il n'est pas accessible par l'internaute.

$_SESSION['pseudo'] = 'Tintin';
$_SESSION['mdp'] = 'vol747';
$_SESSION['email'] = 'tintin@moulinsart.be';

echo "<p>La session est remplie.</p>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//il est possible de vider une partie de la session avec unset()
// unset($_SESSION['mdp']);

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//supprimer entièrement une session

//session_destroy(); //suppression totale de la session et du fichier de session

//echo "<p>La session est détruite.</p>";// nous avon effectué la session_destroy() mais il n'est exécuté qu'à la fin de notre scrippt. Nous voyons encore ici le contenu de la session, mais le fichier temporaire dans le dossier temp a bine été supprimé

// ce fichier contient les informations de session et elles sont accessibles grâce à session_start()

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?> 