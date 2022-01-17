<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');
class ajouterAnnonce_model {


    public function ajouterAnnonce($depart,$arrivee,$typeTransport,$poidInit,$poidFinal,$volumeInit,$volumeFinal,$moyenTransport,$idUser,$titre,$description)
    {
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;

     /* recuperer l'id du trajet*/
         $idTrajet=$fm->ajouterTrajet($depart,$arrivee);
         foreach ($idTrajet as $row ){
             $idTrajet=$row['idTrajet'];
         }
         $image=$this->ajouterImage();
         /* inserer les informations de l'annonce dans la bdd */
         $qa="insert into annonce(idTrajet,titre,description,date,image,typeTransport,idUser,poidInit,poidFinal,volumeInit,volumeFinal,moyenTransport) values('".$idTrajet."','".$titre."','".$description."',NOW(),'".$image." ',' ".$typeTransport."','".$idUser."','".$poidInit."','".$poidFinal."','".$volumeInit."','".$volumeFinal."','".$moyenTransport."')";
         $ra= $fm->requete($c,$qa);
         if($ra==false){
             echo  " <script> alert('erreur lors de la création' );</script>";
         }else{
            echo  " <script> alert('Annonce bien ajoutée!' );</script>";
            
         }
         $fm-> deconnect($c);
         return $idTrajet;
    }

      

   
      
     public function ajouterImage() {
        $fm=new front_model();
        

       
            $var1 = rand(1111,9999);  // generate random number in $var1 variable
            $var2 = rand(1111,9999);  // generate random number in $var2 variable
            
            $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
            $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number
        
            $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
            $dst = "./public/userImages/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
            $dst_db = "./public/userImages/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name
        
            move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {userImages} folder with 32 characters hex number and image name

        return $dst_db;
    }

     
}