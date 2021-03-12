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
?>