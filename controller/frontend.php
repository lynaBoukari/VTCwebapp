<?php
/*set_include_path(get_include_path() . $_SERVER["DOCUMENT_ROOT"] . "/view/frontend/");*/
require_once('./view/frontend/frontend.php');
require_once('./model/frontend.php');
class Front_controller{

public function afficher_page_principal($title){
$v = new front_view();
$v->affichPrincipal($title);
    }


public function afficher_annonces($depart, $arrivee){
    $m=new front_model();
   $rfa= $m->filtrerAnnonce($depart, $arrivee);
   return $rfa;
}

public function afficher_page_presentation($titre)
{
    $v = new front_view();
    $v->affichPresentation($titre);
}
}