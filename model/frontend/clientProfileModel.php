<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
class clientProfile_model {

    public function getClientInfo() {
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
                $idUser=$_SESSION['id'];
                    $qi=" select * from user where idUser = '".$idUser."'";
                    $ri= $fm->requete($c,$qi);
                    $fm-> deconnect($c);
        return $ri;
    }

    public function getTransInfo() {
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
                $idUser=$_SESSION['id'];
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
public function getAnnonceInfo() {
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
               $idUser=$_SESSION['id'];
                $qi=" select * from annonce where annonce.idUser = '".$idUser."'";
                $ri= $fm->requete($c,$qi);
                $fm-> deconnect($c);
    return $ri;
}

}