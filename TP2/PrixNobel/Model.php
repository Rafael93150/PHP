<?php

class Model {

  private $bd;
  private static $instance = null;

  private function __construct() {
    try {
      //require'/home/Web/Auth/credentials.php';
      $this->bd = new PDO('mysql:host=localhost;dbname=php_tp2', 'root', '');
      $this->bd-> query("SET NAMES 'utf8'");
      $this->bd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die('<p> La connexion a echoué </p>');
    }
  }

  public static function getModel(){
    if(is_null(self::$instance))
      self::$instance =new Model();
    return self::$instance;
  }

  public function get_nb_nobel_prizes(){
    $req=$this->bd->prepare("Select count(*) from nobels;");
    $req->execute();
    $ligne=$req->fetch();
    return((int)$ligne[0]);
  }

  public function get_last(){
    $req=$this->bd->prepare("Select * from nobels order by id desc limit 25;");
    $req->execute();
    $ligne=$req->fetchall();
    return($ligne);
  }

  public function get_nobel_prize_informations($id){
    
    try{
      $req=$this->bd->prepare("Select * from nobels where id=:id;");
      $req->bindValue(":id",$id);
      $req->execute();
      $ligne=$req->fetch(PDO::FETCH_ASSOC);
      return $ligne;
    } catch (PDOException $e) {
      return false;
    }
  }

  public function get_categories(){
    $tab=[];
    $req=$this->bd->prepare("Select * from categories;");
    $req->execute();
    $ligne=$req->fetchall(PDO::FETCH_ASSOC);
    foreach($ligne as $c=>$v){
      //obligatoire
      //if(!in_array($v['category'], $tab))
      $tab[]=$v['category'];
    }
    return ($tab);
  }

  public function add_nobel_prize($infos){

    $valeurs="NULL, :year, :category, :name, :birthdate, :birthplace, :country, :motivation";
  
    $req=$this->bd->prepare("insert into nobels values (:valeurs);");
    $req->bindValue(':valeurs', $valeurs);

    $req->bindValue(':year', $infos['Year']);
    $req->bindValue(':category', $infos['Category']);
    $req->bindValue(':name', $infos['Name']);
    $req->bindValue(':birthdate', $infos['Birthdate']);
    $req->bindValue(':birthplace', $infos['BirthPlace']);
    $req->bindValue(':country', $infos['County']);
    $req->bindValue(':motivation', $infos['Motivation']);
    $req->execute();
  }
}


/*
echo("La taille de Nobels est : ". $m->get_nb_nobel_prizes());
var_dump($m->get_last($m->get_nb_nobel_prizes()));
var_dump($m->get_nobel_prize_informations(56))

$m = new Model();    
$tabtest = array ('Year' => 2019, 'Category' => 'Informatic', 'Name' => 'Gael Bourges', 
'Birthdate' => 2000, 'County' => 'Madagascar', 'BirthPlace' =>'Ermont', 
'Motivation' => 'Un beau gosse hors paire');
$m->add_nobel_prize($tabtest);
*/


?>