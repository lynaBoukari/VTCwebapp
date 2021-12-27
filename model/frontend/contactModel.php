<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');

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