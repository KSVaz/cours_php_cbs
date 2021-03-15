<?php 
    function mnPap() {
        // une première fonction
        echo "<p class=\"lead text-center mt-4\">Minute papillon ! </p>";
    }

    // mini exo : faire une fonction qui affiche le jour de la semaine

    function dateDuJourFr() {
        echo "<p>Aujourd'hui, nous sommes le ";
        setlocale(LC_ALL, 'fr_FR');
        echo strftime("%A %e %B %Y");
        echo ".</p>";
    }

    function dateJourFr2() {
        setlocale(LC_ALL, 'fr_FR');
        echo "<p>Aujourd'hui, nous sommes le " .strftime("%A"). ".</p>";
    }

    function dateDuJourEn() {
        echo "<p>We are ".date('l j F Y').".</p>";
    }


    // Création d'une fonction pour var_dump() une variable (très utile pour un tableau)
    function jeVarDump($mavariable) {//la fonction nommée avec son paramètre, une variable 
        echo "<small class=\"bg-warning\">...var_dump()</small><pre class=\"alert alert-warning w-50\">"; 
        var_dump($mavariable);//une variable à laquelle on applique la fonction var_dump()
        echo"</pre>";
    }

    function jePrintR($mavariable) {
        echo "<small class=\"bg-info\">...print_r</small><pre class=\"alert alert-info text-info w-50\">"; 
        print_r($mavariable);
        echo"</pre>";
    }
?>