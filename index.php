<?php

require_once('.\controller\frontend.php');
$c=new front_controller();


if(isset($_GET["titre"]))
{
    if($_GET["titre"]=="Accueil")
    {
$c->afficher_page_principal("Accueil") ;
}else{
    if($_GET["titre"]=="Presentation") {
$c->afficher_page_presentation("Presentation");
    }else{
        if($_GET["titre"]=="Sinscrire") {
            $c->afficher_page_inscription();
        }
    }
}
}else {
    $c->afficher_page_principal("Accueil") ;

}

