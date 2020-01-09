<?php

Class TODOList {
  public $to_dos;

  public function __construct(){
    $this->to_dos=[];
  }

  public function add_to_do($tache) {
    if (!preg_match("#^ *$#", $tache)){
      $this->to_dos[] = $tache;
    }
  }

  public function remove_to_do($indice){
    unset($this->to_dos[$indice]);
  }

  public function is_empty(){
    if (count($this->to_dos) == 0)
      return true;
    else return false;
  }

  public function get_html(){
    if ($this->is_empty())
    $html="Aucune tâche à faire !";

    else{
      $html = "<ul>";
      foreach ($this->to_dos as $v) {
        $html = $html . "<li>$v</li>";
      }
      $html = $html . "</ul>";
    }
    return $html;

  }
}

$liste = new TODOList();
$liste->add_to_do("Manger");
$liste->add_to_do("Boire");
$liste->add_to_do("Dormir");
$liste->add_to_do("Travailler");
echo $liste->get_html();

?>
