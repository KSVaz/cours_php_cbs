<?php 

//////////////// 1- FONCTION print_r ////////////////
function jePrintR($mavariable) {
    echo "<small class=\"bg-info\">...print_r</small><pre class=\"alert alert-info text-info w-75\">"; 
    print_r($mavariable);
    echo"</pre>";
}

//////////////// 2- FONCTION POUR EXECUTER LES prepare() ////////////////
function executeRequete($requete, $parametres = array ()) { //utile pour toutes les requêtes du site
    foreach ($parametres as $indice => $valeur) {  // foreach      
        $parametres[$indice] = htmlspecialchars($valeur);// on evite les injections SQL
        global $pdoSITE; // 'global' nous permet d'accéder à la variable $pdoSITE dans l'espace global du fichier init.php
        $resultat = $pdoSITE->prepare($requete); //puis prepare() prépare la requête
        $succes = $resultat->execute($parametres); //on exécute 
        if ($succes === false) {
            return false; // si la requête  n'a pas marché je renvoie false
        } else {
            return $resultat;
        }// fin if else 
    }
}// fermeture fonction executeRequete

//////////////// 3- VERIFIER SI LE MEMBRE EST CONNECTÉ ////////////////

//////////////// 4- VERIFIER LE STATUT DU membre ////////////////

?> 