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
     

       
      
                

}