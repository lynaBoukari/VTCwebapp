<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
class detailsAnnonce_model {

    public function details($idAnnonce) {
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $qa="select * from annonce where idAnnonce = '".$idAnnonce."'";
        $ra= $fm->requete($c,$qa);

        /****** incrementer annonce vues */
        
        $qa="update annonce SET nbrVus = nbrVus+ 1 where idAnnonce = '".$idAnnonce."'";
        $r= $fm->requete($c,$qa);

            /**** Gerer l'archivage ou validation d'une annonce  ** */
            if(isset($_POST['validerAnnonce'])){
                $qa="update annonce SET valide = '1' where idAnnonce = '".$idAnnonce."'";
                $r= $fm->requete($c,$qa);

            }
            if(isset($_POST['archiverAnnonce'])){
                $qa="update annonce SET archive = '1' where idAnnonce = '".$idAnnonce."'";
                $r= $fm->requete($c,$qa);
            }
        $fm-> deconnect($c);
        return $ra;
    }
    public function getUserAnnonce($idAnnonce){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
            $quser="select idUser from annonce where idAnnonce = '".$idAnnonce."'";
            $riduser= $fm->requete($c,$quser);
            foreach ($riduser as $rid){
                $quser="select * from user where idUser = '".$rid['idUser']."'";
            }
            $ruser= $fm->requete($c,$quser);
            $fm-> deconnect($c);
            return $ruser;
    }

    public function getTrajetAnnonce($idAnnonce){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
            $qtrajet="select idTrajet from annonce where idAnnonce = '".$idAnnonce."'";
            $ridtrajet= $fm->requete($c,$qtrajet);
            foreach ($ridtrajet as $rid){
                $qtrajet="select * from trajet where idTrajet = '".$rid['idTrajet']."'";
            }
            $rtrajet= $fm->requete($c,$qtrajet);

            $fm-> deconnect($c);
            return $rtrajet;
    }
}