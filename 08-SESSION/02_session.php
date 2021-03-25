<?php 
    session_start();//permet de créer un fichier de session avec son identifiant ou de l'ouvrir si il existe déjà (l'identifiant) et que l'on a reçu un cookie avec l'id dedans
    print_r($_SESSION);
?> 