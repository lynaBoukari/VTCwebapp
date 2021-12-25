<?php
/*set_include_path(get_include_path() . $_SERVER["DOCUMENT_ROOT"] . "/view/frontend/");*/
require_once('./view/frontend/frontend.php');
require_once('./view/frontend/accueilView.php');
require_once('./view/frontend/presentationView.php');
require_once('./view/frontend/loginView.php');
require_once('./view/frontend/inscriptionView.php');
require_once('./model/frontend/frontend.php');
require_once('./model/frontend/accueilModel.php');
require_once('./model/frontend/inscriptionModel.php');
require_once('./model/frontend/loginModel.php');
class Front_controller{

public function afficher_page_principal(){
$v = new accueil_view();
$v->affichPrincipal();
    }


public function afficher_annonces($depart, $arrivee){
    $m=new accueil_model();
   $rfa= $m->filtrerAnnonce($depart, $arrivee);
   return $rfa;
}

public function afficher_page_presentation($titre)
{
    $v = new presentation_view();
    $v->affichPresentation($titre);
}
public function inscriptionComplete($username,$fname, $lname, $email, $password, $phone, $adress, $isTransporter,$departs,$arrivees){
    $m=new inscription_model();
    $r= $m->inscriptionComplete($username,$fname, $lname, $email, $password, $phone, $adress, $isTransporter,$departs,$arrivees);
    return $r;
}
public function inscription($username,$fname, $lname, $email, $password, $phone, $adress, $isTransporter){
    $m=new inscription_model();
    $r= $m->inscription($username,$fname, $lname, $email, $password, $phone, $adress, $isTransporter);
    return $r;
}

public function afficher_page_inscription(){
    $v = new inscription_view();
  $v-> affichInscription();

}

public function login($username,$password){
     $m=new login_model();
     $msg=$m->login($username,$password);
    return $msg;
}
public function afficher_login(){
    $v = new login_view();
    $v->affichLogin();
}
}