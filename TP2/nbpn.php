<?php

try {

  $bd=new PDO('pgsql:host=aquabdd;dbname=etudiants', '11803086', '082025135AF');
  $bd->query("SET NAMES 'utf8'");
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $req=$bd->prepare("Select count(*) from nobels");
  $req->execute();
  $ligne=$req->fetch();

} catch(PDOException $e) {

  die("<p> La connexion a échouée. </p>");
  
}

var_dump($ligne);

?>
