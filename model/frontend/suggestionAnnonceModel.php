<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
/**
 * 
 *  cette classe permet de recuperer le tarif ainsi que les transporteurs compatibles à l'annonce ajoutée
 */
class suggestionAnnonce_model {

    public function suggestion($idTrajet){

        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;

                 /*** Trouver les id transporteurs qui comptent desservir ce trajet  */
              $qcont="select idTransporter from trajets where idTrajet='".$idTrajet." ' ";
              $idTransporter=$fm-> requete($c,$qcont);
             
                  
                        
        $fm-> deconnect($c);
        return $idTransporter;
    }

    public function getTransSugg($idTransporter){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
            /*****    return les informations des transporteurs */
        $qcont="select * from user inner join transporter on transporter.idUser=user.idUser where transporter.idTransporter=' ".$idTransporter." ' and transporter.inscription='validee' ";
        $suggestion= $fm-> requete($c,$qcont);

        $fm-> deconnect($c);
        return $suggestion;
    }

    public function getTarif($idTrajet){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;

    /*****Trouver le tarif dont les departs et arrivées correspondent à l'annonce */
                $qcont="select tarif from trajet where idTrajet='".$idTrajet."'";
                $idTrajet=$fm-> requete($c,$qcont);
                foreach ($idTrajet as $row) {
                    $tarif = $row['tarif'];
                    break;
                }

                $fm-> deconnect($c);
                return $tarif;
    }

}