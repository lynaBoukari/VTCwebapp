<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
class stats_model {

public function updateStats() {

    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
    $check="select * from visiteur where session='" .$_SESSION['session']." ' ";
    $rcheck= $fm->requete($c,$check);
    if ($rcheck->num_rows ==0){
    $qstats= "insert into visiteur (session) values ('".$_SESSION["session"]."')";
    $rstats= $fm->requete($c,$qstats);
    }
    $fm-> deconnect($c);
    
}
    public function getUserStats(){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $check="select * from user ";
        $rcheck= $fm->requete($c,$check);
        $nbr = $rcheck->num_rows;
        
        $fm-> deconnect($c);
        return $nbr;
    }

    public function getTransStats(){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $check="select * from transporter";
        $rcheck= $fm->requete($c,$check);
        $nbr = $rcheck->num_rows;
        
        $fm-> deconnect($c);
        return $nbr;
    }

    public function getAnnonStats(){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $check="select * from annonce";
        $rcheck= $fm->requete($c,$check);
        $nbr = $rcheck->num_rows;
        
        $fm-> deconnect($c);
        return $nbr;
    }

    
    public function getVisitStats(){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $check="select * from visiteur";
        $rcheck= $fm->requete($c,$check);
        $nbr = $rcheck->num_rows;
        
        $fm-> deconnect($c);
        return $nbr;
    }

    public function getTopAnnonStats(){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $qa= "select * from annonce ORDER BY nbrVus DESC  LIMIT 8  ";
        $ra= $fm->requete($c,$qa);

        $fm-> deconnect($c);
        return $ra;
    }


}