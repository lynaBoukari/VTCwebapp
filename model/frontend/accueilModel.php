<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
class accueil_model {

public function filtrerAnnonce ($depart, $arrivee ) {
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
      $rfa=null;

      if(isset($depart) && isset($arrivee)){
     /* Recuperer l id du trajet correspondant aux destination du filtre */
     
    $idTrajet= $fm->chercherTrajet($depart, $arrivee);
 
    if($idTrajet->num_rows >0) {
     /* Recuperer toutes les annonces qui ont l'id du trajet*/
     while ($row = mysqli_fetch_assoc($idTrajet)) {
    $qfa= "select * from annonce where annonce.idTrajet= '" .$row['idTrajet'] . " ' ";
    $rfa= $fm->requete($c,$qfa);
      }  
  }
    $fm-> deconnect($c);
    return $rfa;
 }
}

}