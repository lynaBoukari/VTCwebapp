<?php

require_once('./view/frontend/frontend.php');
require_once('./view/backend/dashAccueilView.php');
require_once('./view/backend/gestClientView.php');
require_once('./view/backend/gestTransView.php');
require_once('./view/backend/gestAnnonView.php');
require_once('./view/backend/profilUserView.php');

require_once('./model/backend/gestClientModel.php');
require_once('./model/backend/gestAnnonModel.php');
require_once('./model/frontend/clientProfileModel.php');

class Back_controller{
    public function afficher_page_dashboard(){
        $v = new dashAccueil_view();
        $v->affichDashboard();
            }

            public function afficher_page_gestClient(){
                $v = new gestClient_view();
                $v->affichGestClient();
              }
              public function afficher_page_gestTrans(){
                $v = new gestTrans_view();
                $v->affichGestTrans();
              }
          
     public function afficher_page_gestAnnonce(){
     $v = new gestAnnon_view();
    $v->affichGestTrans();
      }
        
  public function getClientFiltred(){
      $m= new gestClient_model();
     $clients= $m->filtrerClients();
     return $clients;
  }

  public function getTransFiltred(){
    $m= new gestClient_model();
   $trans= $m-> filtrerTrans ();
   return $trans;
}

public function getAnnonceFiltred(){
    $m= new gestAnnonce_model();
   $annon= $m-> filtrerAnnonce ();
   return $annon;
}


  public function clientProfile_info($idUser) {
    $m= new clientProfile_model();
   $info= $m->getClientInfo($idUser);
   return $info;
}

public function transProfile_info($idUser) {
    $m= new clientProfile_model();
   $info= $m->getTransInfo($idUser);
   return $info;
}

public function  getTrajets_Info($idTransporter){
    $m= new clientProfile_model();
    $info= $m->getTrajetsInfo($idTransporter);
    return $info;
}

public function  getTrajet_Info($idTrajet) {
    $m= new clientProfile_model();
    $info= $m->getTrajetInfo($idTrajet) ;
    return $info;
}
public function  getAnnonce_Info($idUser) {
   $m= new clientProfile_model();
   $info= $m->getAnnonceInfo($idUser) ;
   return $info;
}

public function  gererUser($idUser) {
    $m= new gestClient_model();
    $m->gererUser($idUser) ;
    
 }

 public function afficher_clientProfile($content) {
        $v= new  profilUser_view();
        $v->affichClientProfile($content);
 }
 public function afficher_InfoProfile($idUser) {
   $v= new  profilUser_view();
   $content= $v->affichInformation($idUser);
   return $content;
}
public function afficher_AnnonProfile($idUser) {
   $v= new  profilUser_view();
   $content= $v->affichAnnonce($idUser);
   return $content;
}
public function afficher_GererProfile($idUser) {
    $v= new  profilUser_view();
    $content= $v->affichGererUser($idUser);
    return $content;
 }

}