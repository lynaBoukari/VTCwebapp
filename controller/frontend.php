<?php
require_once('../model/frontend.php');
require_once('../view/frontend.php');

class Front_controller{

    public function afficher_principal($title){
$v = new front_view();
$v->affichPrincipal($title);
    }
}