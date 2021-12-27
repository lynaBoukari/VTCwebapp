<?php
// inistialisation
session_start();

require_once('.\controller\frontend.php');
$c=new front_controller();
$c->afficher_login();

if(isset($_GET["titre"]))
{ 
    switch($_GET["titre"])
    {

case 'Accueil' :
         $c->afficher_page_principal() ;
            break ;
case 'Presentation' :
        $c->afficher_page_presentation();
            break ;
  case 'Sinscrire' :
        $c->afficher_page_inscription();
            break ;
    case 'Contact':
        $c->afficher_contact();
        break ;
    case 'acueil' :
        $c->logout();
        break ;
    case 'DetailsAnnonce' :
        $c->afficher_detailsAnnonce() ;
        break ;
    case 'ajouterAnnonce' :
        $c->afficher_ajouterAnnonce();
        break ;

}
}else {
    
   if( isset($_SESSION['valide']) && $_SESSION['valide']=='oui')
    {
     $c->afficher_page_principal() ;
    } else {
        $_SESSION['valide']='non';
        $c->afficher_page_principal() ;
    }
    }
