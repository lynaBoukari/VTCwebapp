<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');

/***
 * 
 *  cette classe gere le processus d'inscription et l'insertion d'un nouveau client ou transporter
 */
class inscription_model {

    public function insertTrajets($idTransporter,$departs,$arrivees) {
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $long=count((array)$departs);
        if($long>0){
              for($i=0; $i<$long; $i++){
                    $idTrajet=$fm->ajouterTrajet($departs[$i], $arrivees[$i]);
              
                     if($idTrajet->num_rows >0) {
                       while ($row = mysqli_fetch_assoc($idTrajet)){
                             $qtrajets="insert into trajets(idTransporter,idTrajet) values ('".$idTransporter."','".$row['idTrajet'] ."' )";
                           $r=  $fm-> requete($c,$qtrajets);          
        }
     }
    }
   }
        $fm-> deconnect($c);
        return $r;
    }


    public function inscriptionTransporter($idUser,$departs,$arrivees) {
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $qtrans="insert into transporter(idUser) values ('".$idUser."' )";
        $r= $fm-> requete($c,$qtrans);
        $idTransporter=  $c -> insert_id;

        $rtrajet= $this->insertTrajets($idTransporter,$departs,$arrivees);
        $fm-> deconnect($c);
        return ($rtrajet && $r);
    }

    public function inscriptionComplete($username,$fname, $lname, $email, $password, $phone, $adress, $isTransporter,$departs,$arrivees){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $quser="insert into user(username,fname,lname,email,password,phone,adress,isTransporter) values ('".$username."','".$fname."','".$lname."','".$email."','".$password."','".$phone."','".$adress."','".$isTransporter."' )";
        $r=  $fm-> requete($c,$quser);
        $idUser= $c -> insert_id;
        if($isTransporter=='1'){
           $rtrans= $this->inscriptionTransporter($idUser,$departs,$arrivees);
        }
        $fm-> deconnect($c);
        return ($r && $rtrans);
    }

    public function inscription($fname, $lname, $email, $password, $phone, $adress, $isTransporter){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        $quser="insert into user(fname,lname,email,password,phone,adress,isTransporter) values (' ".$username. "','".$fname."','".$lname."','".$email."','".$password."','".$phone."','".$adress."','".$isTransporter."' )";
        $r=  $fm-> requete($c,$quser);
        $fm-> deconnect($c);
        return $r ;
    }



}