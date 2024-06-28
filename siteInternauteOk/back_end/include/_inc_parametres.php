<?php
// ce fichier est destin� � �tre inclus dans les pages PHP qui ont besoin de se connecter � une base de donn�es
// 2 possibilit�s pour inclure ce fichier :
//     include_once ('_inc_parametres.php');
//     require_once ('_inc_parametres.php');

// connexion de l'application cliente au SGBD MySQL
$HOTE = "localhost";    // nom du serveur de donn�es : localhost ou serv-wamp1 ou serv-wamp1
$PORT = '3306';            // num�ro du port
$USER = "personne";            // nom de l'utilisateur
$PWD  = "";        // son mot de passe                    
$BDD  = "siteBel";        // nom de la base de donn�es    
?>