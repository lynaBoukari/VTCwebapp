<?php
require_once('./controller/frontend.php');
class front_model {
    public $dbname ="tdw_vtc";
    public $host="localhost";
    public $user="root";
    public $password="";

    public function connect($dbname, $host, $user, $password) {

        $c = mysqli_connect($host, $user, $password, $dbname);
 
        // Vérifier la connexion
        if($c === false){
            die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
        }
        return $c ;
       }

       public function deconnect (& $c) {
           $c =null;
       }

       public function requete ($c , $r){
           return mysqli_query($c,$r);
       }

public function chercherTrajet($depart, $arrivee){
    $c=$this->connect($this->dbname, $this->host, $this->user, $this->password) ;
     /* Recuperer l id du trajet correspondant aux destination du filtre */
     $rtrajet=null ;
     $qtrajet=null ;
           $qtrajet="select idTrajet from trajet where depart = '".$depart."' AND arrivee ='".$arrivee."'";
           $rtrajet = $this-> requete($c,$qtrajet);
           $this-> deconnect($c);
           return $rtrajet;
}
public function ajouterTrajet($depart, $arrivee)
{
     $c=$this->connect($this->dbname, $this->host, $this->user, $this->password) ;
     $idTrajet= $this->chercherTrajet($depart, $arrivee);
     if($idTrajet->num_rows ==0)
    {
        $qtrajet="insert into trajet(depart,arrivee) values ('".$depart."','".$arrivee."')";
            /*$qtrajet->bindParam(1, $depart);
        $qtrajet->bindParam(2, $arrivee);*/
        $this-> requete($c,$qtrajet);
        $idTrajet= $this->chercherTrajet($depart, $arrivee);
        
    }
    $this-> deconnect($c);
    return $idTrajet;
}
     

        public function ajouterAnnonce($depart,$arrivee,$typeTransport,$poidInit,$poidFinal,$volumeInit,$volumeFinal,$moyenTransport,$image,$idUser,$titre)
       {
        $c=$this->connect($this->dbname, $this->host, $this->user, $this->password) ;

        /* recuperer l'id du trajet*/
            $idTrajet=$this->ajouterTrajet($depart,$arrivee);

            /* inserer les informations de l'annonce dans la bdd */
            $qa=$c->prepare("insert into annonce(idTrajet,titre,description,date,image,typeTransport,idUser,poidInit,poidFinal,volumeInit,volumeFinal,moyenTransport) values('?','?','?',NOW(),'?','?','?','?','?','?','?','?')");
            $qa->bindParam(1, $idTrajet);
            $qa->bindParam(2, $titre);
            $qa->bindParam(2, $description);
            $qa->bindParam(5, $image);
            $qa->bindParam(6, $typeTransport);
            $qa->bindParam(7, $idUser);
            $qa->bindParam(8, $poidInit);
            $qa->bindParam(9, $poidFinal);
            $qa->bindParam(10, $volumeInit);
            $qa->bindParam(11, $volumeFinal);
            $qa->bindParam(12, $moyenTransport);
            $qa->execute();

            $this-> deconnect($c);
       }

         public function getTarifAnnonce($idAnnonce) {
            $c=$this->connect($this->dbname, $this->host, $this->user, $this->password) ;

            /*Recuperer id du trajet de cette annonce*/
            $idTrajet=$c->prepare("select annonce.idTrajet from annonce where idAnnonce=?");
            $idTrajet->bindParam(1, $idAnnonce);
            $idTrajet =  $idTrajet->execute();
            /* Recuperer la tarif du transport de cette annonce*/
            $tarifTransport=$c->prepare("select transport.tarif from transport where idTrajet=?");
            $tarifTransport->bindParam(1, $idTrajet);
            $tarifTransport =  $tarifTransport->execute();

            $this-> deconnect($c);
            return $tarifTransport;
        }

        public function getTransporterAnnonce($idAnnonce){
            $c=$this->connect($this->dbname, $this->host, $this->user, $this->password) ;

            /* Recuperer id du trajet de cette annonce*/
            $idTrajet=$c->prepare("select annonce.idTrajet from annonce where idAnnonce=?");
            $idTrajet->bindParam(1, $idAnnonce);
            $idTrajet =  $idTrajet->execute();

            /* Recuperer les transporteur de ce trajet */
            $rTransporter=$c->prepare("select * from transporter where idTrajet=?");
            $rTransporter->bindParam(1, $idTrajet);
            $rTransporter =  $rTransporter->execute();

            $this-> deconnect($c);
            return $rTransporter;
        }
         
      
                

}