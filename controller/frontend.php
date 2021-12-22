<?php
require_once('ProjetTDW/view/frontend.php');
require_once('ProjetTDW/model/frontend.php');


class Front_controller{

    public function afficher_principal($title){
$v = new front_view();
$v->affichPrincipal($title);
    }
}