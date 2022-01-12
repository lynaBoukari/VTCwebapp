<?php
// inistialisation
session_start();
$_SESSION['session']=session_id();

require_once('.\controller\frontend.php');
$c=new front_controller();
$c->afficher_login();
$c->updateStats();
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
    case 'Statistiques' :
        $c->afficher_stats();
        break ;
    case 'DetailsAnnonce' :
        $c->afficher_detailsAnnonce() ;
        break ;
    case 'ajouterAnnonce' :
        $c->afficher_ajouterAnnonce();
        break ;
    case 'Profile' :
            $c->afficher_clientProfile("");
            break ;
    case 'Profile/MesInformations' :
            $c->afficher_clientProfile($c->afficher_InfoProfile());
            break ;
    case 'Profile/MesAnnonces' :
        $c->afficher_clientProfile($c->afficher_AnnonProfile());
            break ;
        
    case 'News' :
        $c->afficher_news();
        break ;
    case 'DetailsNews' :
        $c->afficher_detailsNews();
        break ;
    case 'Dashboard' :
          header('Location: dashboard.php');
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