<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
/**
 * 
 * cette classe a pour but de recuperer les donnes de contacts de la bdd
 */
class contact_model {

    public function contact(){

        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;

                $qcont="select * from contact";
                $contacts=$fm-> requete($c,$qcont);
        $fm-> deconnect($c);
        return $contacts;
    }
}