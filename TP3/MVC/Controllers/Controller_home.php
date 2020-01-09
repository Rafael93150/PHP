<?php

class Controller_home extends Controller
{

    public function action_default(){
        // Récupérer le nombre de prix nobels dans la base de données pour l'afficher à la place de TO FILL.

        $m = Model::getModel();

        $tab = ["nb_nobels" => $m->getNbNobelPrizes()];
        $this->render("home", $tab);   
    }


}

?>