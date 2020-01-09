<?php

//Activation des sessions
session_start();

//Si un mot de passe a été saisi et s'il est correct
if (isset($_POST["mdp"]) and $_POST["mdp"] == "kangourou") {
    $_SESSION["connecte"] = true; //On considère l'utilisateur comme connecté
}


//Si dans l'url, on a un paramètre action=deconnexion
if (isset($_GET["action"]) and $_GET["action"] == "deconnexion") {
    unset($_SESSION["connecte"]);//On considère que l'utilisateur n'est plus connecté
}



//Si l'utilisateur n'est pas connecté
if (!isset($_SESSION["connecte"])) {
    require("formulaire.php");//On affiche le formulaire de saisie de mot de passe
    exit();//On arrête le script
}
