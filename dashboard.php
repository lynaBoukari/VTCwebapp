<?php

require_once('.\controller\backend.php');
require_once('.\controller\frontend.php');
session_start();
$_SESSION['session']=session_id();
$c=new Back_controller();
$cf=new front_controller();

if(isset($_GET["title"]))
{ 
    switch($_GET["title"])
    {
        case 'gestionUtilisateurs':
            $c->afficher_page_dashboard();
            break;

        case 'gestionClients':
            $c-> afficher_page_gestClient();
            break;

        case 'gestionTransporteurs' :
            $c-> afficher_page_gestTrans();
            break;

            case 'gestionAnnonces' :
                $c-> afficher_page_gestAnnonce();
                break;
        
        case 'profileClient' :
            $c->afficher_clientProfile("",$_GET['id']);
            break;
        case 'Profile/Informations' :
                $c->afficher_clientProfile($c->afficher_InfoProfile($_GET['id']),$_GET['id']);
                break ;
        case 'Profile/Annonces' :
            $c->afficher_clientProfile($c->afficher_AnnonProfile($_GET['id']),$_GET['id']);
                break ;
        case 'Profile/Gerer' :
            $c->afficher_clientProfile($c-> afficher_GererProfile($_GET['id']),$_GET['id']);
            $c->gererUser($_GET['id']);
            break;

            default:
        $c->afficher_page_dashboard();
        break;
    }

}else{

    $c->afficher_page_dashboard();
}