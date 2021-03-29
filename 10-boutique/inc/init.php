<?php 
// init.php

//fichier indispensable au fonctionnement du site

//////////////// 1- CONNEXION À LA BDD ////////////////

$pdoSITE = new PDO('mysql:host=localhost;dbname=site',
'root',
'',
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
));

//////////////// 2- OUVERTURE DE SESSION ////////////////
session_start();

//////////////// 3- Chemin du site avec une constante ////////////////

//////////////// 4- Variable pour les contenus ////////////////
$contenu = '';

//////////////// 5- INCLUSION DES FONCTIONS ////////////////
require_once 'inc/functions.php';

?> 