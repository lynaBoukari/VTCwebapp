<?php

require_once('./view/frontend/frontend.php');
require_once('./view/frontend/accueilView.php');
require_once('./view/frontend/presentationView.php');
require_once('./view/frontend/loginView.php');
require_once('./view/frontend/inscriptionView.php');
require_once('./view/frontend/contactView.php');
require_once('./view/frontend/detailsAnnonceView.php');
require_once('./view/frontend/ajouterAnnonceView.php');
require_once('./view/frontend/suggestionAnnonce.php');
require_once('./view/frontend/clientProfileView.php');
require_once('./view/frontend/newsView.php');
require_once('./view/frontend/newsDetailsView.php');
require_once('./view/frontend/statsView.php');


require_once('./model/frontend/frontend.php');
require_once('./model/frontend/accueilModel.php');
require_once('./model/frontend/inscriptionModel.php');
require_once('./model/frontend/loginModel.php');
require_once('./model/frontend/contactModel.php');
require_once('./model/frontend/detailsAnnonceModel.php');
require_once('./model/frontend/ajouterAnnonceModel.php');
require_once('./model/frontend/suggestionAnnonceModel.php');
require_once('./model/frontend/clientProfileModel.php');
require_once('./model/frontend/newsModel.php');
require_once('./model/frontend/presentationModel.php');
require_once('./model/frontend/statsModel.php');

class Front_controller{

   public function afficher_page_start(){
      $v = new start_view();
      $v->affichStart();
          }

public function afficher_page_principal(){
$v = new accueil_view();
$v->affichPrincipal();
    }


public function afficher_annonces($depart, $arrivee){
    $m=new accueil_model();
   $rfa= $m->filtrerAnnonce($depart, $arrivee);
   return $rfa;
}
public function afficher_random_annonces(){
    $m=new accueil_model();
   $rfa= $m->randomAnnonce();
   return $rfa;
}

public function afficher_page_presentation()
{
    $v = new presentation_view();
    $v->affichPresentation();
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

 public function contact(){
  $m= new contact_model();
   $contacts= $m->contact();
   return $contacts;
 }
 public function afficher_contact(){
     $v = new contact_view();
    $v->affichContact();
 }
 public function logout() {
     $m = new login_model();
     $m->logout();
     header('Location: ./index.php');
 }

 public function detailsAnnonce($idAnnonce) {
    $m = new detailsAnnonce_model();
    $details= $m->details($idAnnonce);
    return $details;
 }
 public function getWilaya($idWilaya){
   $m = new detailsAnnonce_model();
   $nom= $m->getWilaya($idWilaya);
   return $nom;
 }
 public function detailsUserAnnonce($idAnnonce) {
    $m = new detailsAnnonce_model();
    $details= $m->getUserAnnonce($idAnnonce);
    return $details;
 }
 public function detailsTrajetAnnonce($idAnnonce) {
    $m = new detailsAnnonce_model();
    $details= $m->getTrajetAnnonce($idAnnonce);
    return $details;
 }

 public function suggestionAnnonce($idTrajet) {
   $m = new suggestionAnnonce_model();
   $sugg= $m->suggestion($idTrajet);
   return $sugg;
}
public function getTarif($idTrajet) {
   $m = new suggestionAnnonce_model();
   $sugg= $m->getTarif($idTrajet);
   return $sugg;
}
public function getTransSugg($idTransporter) {
   $m = new suggestionAnnonce_model();
   $sugg= $m->getTransSugg($idTransporter);
   return $sugg;
}


 public function afficher_detailsAnnonce() {
    $v = new detailsAnnonce_view();
    $v->affichPageDetails();
 }
 public function afficher_suggestionAnnonce($idTrajet) {
   $v = new suggestionAnnonce_view();
   $v->affichSuggestion($idTrajet);
}

 public function ajouterAnnonce($depart,$arrivee,$typeTransport,$poidInit,$poidFinal,$volumeInit,$volumeFinal,$moyenTransport,$idUser,$titre,$description) {
    $m = new ajouterAnnonce_model();
    $idTrajet= $m->ajouterAnnonce($depart,$arrivee,$typeTransport,$poidInit,$poidFinal,$volumeInit,$volumeFinal,$moyenTransport,$idUser,$titre,$description);

        return $idTrajet;
 }
 public function afficher_ajouterAnnonce() {
    $v = new ajouterAnnonce_view();
    $v->affichAjouterAnnonce();
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

public function  updateUser_Info($fname, $lname,$username, $email, $password, $phone, $adress, $isTransporter) {
   $m= new clientProfile_model();
   $msg= $m->updateUser($fname, $lname,$username, $email, $password, $phone, $adress, $isTransporter) ;
   return $msg;
}

 public function afficher_clientProfile($content) {
        $v= new clientProfile_view();
        $v->affichClientProfile($content);
 }
 public function afficher_InfoProfile($idUser) {
   $v= new clientProfile_view();
   $content= $v->affichInformation($idUser);
   return $content;
}
public function afficher_AnnonProfile($idUser) {
   $v= new clientProfile_view();
   $content= $v->affichAnnonce($idUser);
   return $content;
}

 
 public function getNews(){
    $m= new news_model();
    $info= $m-> getNews() ;
    return $info;
 }

 public function getNews_details($idNews){
    $m= new news_model();
    $info= $m->getNewsInfo($idNews) ;
    return $info;
 }

 public function getPresentation(){
   $m= new presentation_model();
   $info= $m-> getPresentation() ;
   return $info;
}

 public function afficher_news(){
    $v= new news_view();
    $v->affichNewsPage();
 }
 public function afficher_detailsNews(){
    $v= new detailsNews_view();
    $v->affichNewsDetails();
 }
 public function afficher_stats(){
   $v= new stats_view();
   $v->affichStatsPage();
 }

 public function updateStats(){
   $m= new stats_model();
   $m->updateStats();
   $m->getUserStats();
 }
 public function getUserStats(){
   $m= new stats_model();
  $nbr= $m->getUserStats();
  return $nbr;
 }
 public function getTransStats(){
   $m= new stats_model();
  $nbr= $m-> getTransStats();
  return $nbr;
 }
 public function getAnnonStats(){
   $m= new stats_model();
  $nbr= $m-> getAnnonStats();
  return $nbr;
 }
 public function getVisitStats(){
   $m= new stats_model();
  $nbr= $m-> getVisitStats();
  return $nbr;
 }
 
 public function getTopAnnonStats(){
   $m= new stats_model();
  $nbr= $m-> getTopAnnonStats();
  return $nbr;
 }
}