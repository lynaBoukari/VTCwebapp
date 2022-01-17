<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
require_once('./model/frontend/inscriptionModel.php');

/***
 * 
 * 
 * cette c a pour but de recuperer les donnees necessaires à l'affichage des informations du profile utilisateurs
 */
class clientProfile_model {

    public function getClientInfo($idUser) {
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
             //   $idUser=$_SESSION['id'];
                    $qi=" select * from user where idUser = '".$idUser."'";
                    $ri= $fm->requete($c,$qi);
                    $fm-> deconnect($c);
        return $ri;
    }

    public function getTransInfo($idUser) {
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
          //      $idUser=$_SESSION['id'];
                    $qi=" select * from transporter where transporter.idUser = '".$idUser."'";
                    $ri= $fm->requete($c,$qi);
                    $fm-> deconnect($c);
        return $ri;
}
public function getTrajetsInfo($idTransporter) {
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
            $idUser=$_SESSION['id'];
                $qi=" select * from trajets where trajets.idTransporter = '".$idTransporter."'";
                $ri= $fm->requete($c,$qi);
                $fm-> deconnect($c);
    return $ri;
}

public function getTrajetInfo($idTrajet) {
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
            $idUser=$_SESSION['id'];
                $qi=" select * from trajet where trajet.idTrajet = '".$idTrajet."'";
                $ri= $fm->requete($c,$qi);
                $fm-> deconnect($c);
    return $ri;
}
public function getAnnonceInfo($idUser) {
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
               //$idUser=$_SESSION['id'];
                $qi=" select * from annonce where annonce.idUser = '".$idUser."'";
                $ri= $fm->requete($c,$qi);
                $fm-> deconnect($c);
    return $ri;
}

public function updateUser($fname, $lname,$username, $email, $password, $phone, $adress, $isTransporter){
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
               $idUser=$_SESSION['id'];
               $qi=" update user set fname ='".$fname."', lname='".$lname."', username='".$username."', email='".$email."', password='".$password."' , adress='".$adress."', isTransporter='".$isTransporter."'  where  user.idUser = '".$idUser."'";
               $ri= $fm->requete($c,$qi);

                 $this->updateTrans($idUser,$isTransporter);
               
                if($ri){
                    $msg="Votre profil a bien été modifié ";
                }else{
                    $msg="Erreur lors de la modification, veuillez réesseyer";
                }
               $fm-> deconnect($c);
               return $msg;
}

        public function updateTrans($idUser,$isTransporter){
            $fm=new front_model();
            $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
            $qt= " select * from transporter where transporter.idUser = '".$idUser."'";
            $rt= $fm->requete($c,$qt);

            if($rt->num_rows !=0) {
            foreach ($rt as $row) {
                $idTransporter =$row['idTransporter'];
            }

            if($isTransporter=='0'){
                $qt= "delete from transporter where idTransporter = '".$idTransporter."'";
                $rt= $fm->requete($c,$qt);
                $qt= "delete from trajets where idTransporter = '".$idTransporter."'";
                $rt= $fm->requete($c,$qt);

            }else{
               
                if(isset($_POST['depart'])){
                    $qt= "delete from trajets where idTransporter = '".$idTransporter."'";
                    $rt= $fm->requete($c,$qt);
                    $this->insertTrajets($idTransporter, $_POST['depart'],$_POST['arrivee']);
                    }
            }
           
        }else{
                if($isTransporter=='1'){
                    if(isset($_POST['depart'])){
                        $mi=new inscription_model();
                        $mi->inscriptionTransporter($idUser,$_POST['depart'],$_POST['arrivee']) ;
                    }
                }

        }
          
          $fm-> deconnect($c);
        }


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


    
}