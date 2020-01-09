<?php
include ('Model.php');

// Récupérer le nombre de prix nobels dans la base de données pour l'afficher à la place de TO FILL.

require "begin.html";

$m = new Model;
$nb_prix_nobels = $m->get_nb_nobel_prizes();

echo "<h1> List of the nobel prizes </h1>";

echo "<p> Welcome to the website listing the different nobel prizes given until 2010. It references 
<strong>$nb_prix_nobels</strong> nobel prizes. You can modify this list by adding new Nobel Prizes, 
and removing or updating the information contained in this database. You can also search among 
the nobel prizes on the name, the year and the different categories. </p>";


require "end.html"; 
?>