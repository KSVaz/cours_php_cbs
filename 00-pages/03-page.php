<?php 

    define("PI",3.1415926535,TRUE); // définition insensible à la casse parce qu'on a mis TRUE

    echo "La constante PI vaut ",PI,"<br>";
    echo "La constante pi vaut ",PI,"<br>";

    // vérification de l'existence de la constante

    if(defined( "PI" ) ) echo "La constante est déjà définie<br>";
    // if(defined( "pi" ) ) echo "La constante est déjà définie<br>";

    define("sitegravillon", "http://www.gravillon.fr", FALSE); // avec FALSE : sensibilité à la casse

    // echo "L'URL de Gravillon est : ".siteGRAVILLON."<br>";
    echo "L'URL de Gravillon est : ".sitegravillon."<br>";

    echo "Visitez le site de <a href=\" ".sitegravillon." \" target=\"_blank\">Gravillon</a>";

?>