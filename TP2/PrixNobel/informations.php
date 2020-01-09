<?php

require 'Model.php';
$m = Model::getModel();

if(isset($_GET["id"]) && preg_match("#^\d+$#", $_GET["id"])) {
    $infos = $m->get_nobel_prize_informations($_GET["id"]);
    var_dump($infos);
}
else echo("Vérifiez l'identifiant");

?>