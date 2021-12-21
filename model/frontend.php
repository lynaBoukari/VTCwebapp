<?php
require_once('../controller/frontend.php');
class front_model {
    private $dbname ="tdwvtc";
    private $host="localhost";
    private $user="root";
    private $password="";

    private function connect($dbname, $host, $user, $password) {

        $dsn ="mysql : dbname=" . $dbname . ";host=" . $host .";";
        try{
            $c=new PDO($dsn, $user , $password);
        }
        catch(PDOException $e){
            printf(" Erreur lors de la connexion à la base de données : %s\n", $e->getMessage());
            exit();
        }
        return $c ;
       }

       private function deconnect (& $c) {
           $c =null;
       }

       private function requete ($c , $r){
           return $c->query($r);
       }

       private function filtrerAnnonce ($depart, $arrivee ) {
           $c->$this->connect($this->dbname, $this->host, $this->user, $this->password) ;
            $rfa=null;
           /* Recuperer l id du trajet correspondant aux destination du filtre */
          $idTrajet= $this->chercherTrajet($depart, $arrivee);

          if($idTrajet != null) {
           /* Recuperer toutes les annonces qui ont l'id du trajet*/
           
          $qfa= " select * from annonce where user.idTrajet='" .$idTrajet."'";
          $rfa= $this->requete($c,$qfa);
          }
          else{
                printf(" Aucune annonce correspond au trajet entré");
          }
          $this-> deconnect($c);
          return $rfa;
          
       }

private function chercherTrajet($depart, $arrivee){
    $c->$this->connect($this->dbname, $this->host, $this->user, $this->password) ;
     /* Recuperer l id du trajet correspondant aux destination du filtre */
    $qtrajet=$c->prepare("select trajet.idTrajet from trajet where trajet.depart = ? AND trajet.arrivee = ?");
           $qtrajet->bindParam(1, $depart);
           $qtrajet->bindParam(2, $arrivee);
           $rtrajet =  $qtrajet->execute();

           $this-> deconnect($c);
           return $rtrajet;
}
private function ajouterTrajet($depart, $arrivee)
{
     $c->$this->connect($this->dbname, $this->host, $this->user, $this->password) ;
     $idTrajet= $this->chercherTrajet($depart, $arrivee);
    if($idTrajet==null)
    {
        $qtrajet=$c->prepare("insert into trajet(depart,arrivee) values ('?','?')");
        $qtrajet->bindParam(1, $depart);
        $qtrajet->bindParam(2, $arrivee);
        $qtrajet->execute();
        $idTrajet= $this->chercherTrajet($depart, $arrivee);
        
    }
    $this-> deconnect($c);
    return $idTrajet;
}
       private function ajouterAnnonce($depart,$arrivee,$typeTransport,$poidInit,$poidFinal,$volumeInit,$volumeFinal,$moyenTransport,$image,$idUser,$titre)
       {
        $c->$this->connect($this->dbname, $this->host, $this->user, $this->password) ;

        /* recuperer l'id du trajet*/
            $idTrajet=$this->ajouterTrajet($depart,$arrivee);

            /* inserer les informations de l'annonce dans la bdd */
            $qa=$c->prepare("insert into annonce(idTrajet,titre,date,image,typeTransport,idUser,poidInit,poidFinal,volumeInit,volumeFinal,moyenTransport) values('?','?',NOW(),'?','?','?','?','?','?','?','?')");
            $qa->bindParam(1, $idTrajet);
            $qa->bindParam(2, $titre);
            $qa->bindParam(4, $image);
            $qa->bindParam(5, $typeTransport);
            $qa->bindParam(6, $idUser);
            $qa->bindParam(7, $poidInit);
            $qa->bindParam(8, $poidFinal);
            $qa->bindParam(9, $volumeInit);
            $qa->bindParam(10, $volumeFinal);
            $qa->bindParam(11, $moyenTransport);
            $qa->execute();

            $this-> deconnect($c);
       }








}