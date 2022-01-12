<?php

require_once('./view/frontend/frontend.php');
require_once('./view/backend/dashAccueilView.php');

class Back_controller{
    public function afficher_page_dashboard(){
        $v = new dashAccueil_view();
        $v->affichDashboard();
            }
  
}