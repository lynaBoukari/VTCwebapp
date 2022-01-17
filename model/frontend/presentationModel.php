<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
class presentation_model {

    public  static function getPresentation() {

        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
    
        $qfa= "select * from presentation";
        $rfa= $fm->requete($c,$qfa);
        $fm-> deconnect($c);
        return $rfa;
    }
    
}