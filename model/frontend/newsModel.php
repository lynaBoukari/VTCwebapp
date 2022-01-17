<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
/***
 * 
 * cette classe  permet de recuperer les donnes des news de la bdd
 */
class news_model {


public function getNewsInfo($idNews){
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;

    $qfa= "select * from news where idNews='".$idNews. "'";
    $rfa= $fm->requete($c,$qfa);
    $fm-> deconnect($c);
    return $rfa;
}

public function  getNews(){
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;

    $qfa= "select * from news ORDER BY RAND ( )  LIMIT 8  ";
    $rfa= $fm->requete($c,$qfa);
    $fm-> deconnect($c);
    return $rfa;
}
}