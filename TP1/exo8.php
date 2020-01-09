<?php

$mdp_valide = 0 ;

$mot_de_passe = "gael" ;
$contenu = "Voici le contenu." ;

if (isset($_POST["mdp"]) and !preg_match("#^ +$#", $_POST["mdp"])){
    if($_POST["mdp"]==$mot_de_passe){
        $mdp_valide = 1;
    }
}

if ($mdp_valide==0){
    echo "<form action='exo8.php' method='post'>
         <input type='texte' name='pseudo' value='Rafael'>
         <input type='password' name='mdp'>
         <button type='submit' name='button_co' > Connexion </button>
    </form>";
}
else{
    echo $contenu ;
}

 ?>