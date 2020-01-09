<?php

try {

  $bd=new PDO('pgsql:host=aquabdd;dbname=etudiants', '11803086', '082025135AF');
  $bd->query("SET NAMES 'utf8'");
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_GET["identifiant"]) and preg_match("#^\d+$#", $_GET["identifiant"])){
    $req=$bd->prepare("Select * from nobels where id= :identifiant");
    $req->bindValue(":identifiant" , $_GET["identifiant"]);
    $req->execute();
    $ligne=$req->fetch();
    var_dump($ligne);
  }
  else {
    echo "<p>Problème de paramètre </p>";
  }


} catch(PDOException $e) {

  die("<p> La connexion a échouée. </p>");

}



?>
