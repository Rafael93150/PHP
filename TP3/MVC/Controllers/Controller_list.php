<?php

class Controller_list extends Controller
{

    public function action_default(){

        $m = Model::getModel();
        $tab = ["last" => $m->getLast()];
        $this->render("last", $tab);
    }

    public function action_informations(){
        $m = Model::getModel();

        if(isset($_GET["id"]) and preg_match("#^\d+$#", $_GET["id"]) 
        and $_GET["id"]<=$m->getNbNobelPrizes()){
            
            $tab = $m->getNobelPrizeInformations($_GET["id"]);

            foreach($tab as $c=>$v){
                if($v==null) {
                    $tab[$c]="???";
                }
            }
            
            $this->render("informations", $tab);
        }
        else{
            require "Views/view_begin.php";
            echo("Erreur d'identifiant");
            require "Views/view_end.php";
        }
    }

}