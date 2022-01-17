<?php
require_once('./controller/backend.php');
require_once('./model/frontend/frontend.php');

/****************************************************************
 * 
 * cette classe permet de recuperer et modifier les donnees des utilisateues qui seront affichés dans la partie dashboard
 */
class gestClient_model {


    public function filtrerClients () {
        $rc=null;
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
         
                if(isset($_POST['filtrerClient'])){
                    if(isset($_POST['filtreClient'])){
                        switch ($_POST['filtreClient']) {
                                case 'username' :
                                    $qc="select * from user where username = '".$_POST['filtreClientValue']."' and isTransporter = '0'  and isAdmin ='0'";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                        break;
                                case 'fname':
                                    $qc="select * from user where fname = '".$_POST['filtreClientValue']."' and isTransporter = '0'  and isAdmin ='0'";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;
                                case 'lname':
                                    $qc="select * from user where lname = '".$_POST['filtreClientValue']." ' and isTransporter = '0'  and isAdmin ='0'";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;
                                 case 'email':
                                    $qc="select * from user where email = '".$_POST['filtreClientValue']."' and isTransporter = '0'  and isAdmin ='0'";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;
                                  case 'phone':
                                    $qc="select * from user where phone = '".$_POST['filtreClientValue']."' and isTransporter = '0' and isAdmin ='0' ";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                     break;                      

                        }
                        
                    }
              
                }else{

                    $qc="select * from user where isTransporter = '0'  and isAdmin ='0'";
                      $rc= $fm->requete($c,$qc);
                     return $rc;
                }
                if(isset($_POST['resetFiltreClient'])){
                    $qc="select * from user where isTransporter = '0'  and isAdmin ='0'";
                      $rc= $fm->requete($c,$qc);
                     return $rc;
                }

          $fm-> deconnect($c);
        
    }
    public function filtrerTrans () {
        $rc=null;
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
         
                if(isset($_POST['filtrerTrans'])){
                    if(isset($_POST['filtreTrans'])){
                        switch ($_POST['filtreTrans']) {
                                case 'username' :
                                    $qc="select * from user where username = '".$_POST['filtreClientValue']."' and isTransporter = '1'  and isAdmin ='0'";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                        break;
                                case 'fname':
                                    $qc="select * from user where fname = '".$_POST['filtreClientValue']."' and isTransporter = '1'  and isAdmin ='0'";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;
                                case 'lname':
                                    $qc="select * from user where lname = '".$_POST['filtreClientValue']." ' and isTransporter = '1'  and isAdmin ='0'";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;
                                 case 'email':
                                    $qc="select * from user where email = '".$_POST['filtreClientValue']."' and isTransporter = '1'  and isAdmin ='0'";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;
                                  case 'phone':
                                    $qc="select * from user where phone = '".$_POST['filtreClientValue']."' and isTransporter = '1' and isAdmin ='0' ";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                     break;  
                                     case 'ban':
                                        $qc="select * from user where ban = '".$_POST['filtreClientValue']."' and isTransporter = '1' and isAdmin ='0' ";
                                            $rc= $fm->requete($c,$qc);
                                            return $rc;
                                         break;    
                                         case 'inscription':
                                                 $qc="select * from user inner join transporter on user.idUser=transporter.idUser  where user.isTransporter = '1' and user.isAdmin ='0'  and  transporter.inscription = '".$_POST['filtreClientValue']."'";
                                                $rc= $fm->requete($c,$qc);
                                                return $rc;
                                             break;                    

                        }
                        
                    }
              
                }else{

                    $qc="select * from user where isTransporter = '1'  and isAdmin ='0'";
                      $rc= $fm->requete($c,$qc);
                     return $rc;
                }
                if(isset($_POST['resetFiltreTrans'])){
                    $qc="select * from user where isTransporter = '1'  and isAdmin ='0'";
                      $rc= $fm->requete($c,$qc);
                     return $rc;
                }

          $fm-> deconnect($c);
        
    }

    public function gererUser($idUser){
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
        if(isset($_POST['bannirUser'])){

            $qi=" update user set ban = 'Bannis' where idUser = '".$idUser."'";
            $ri= $fm->requete($c,$qi);
           if($ri){
               echo " <script> alert('L\'utilisateur a été bannis.') </script>
               ";
           }

        }
        if(isset($_POST['unbannirUser'])){

            $qi=" update user set ban = 'Non bannis' where idUser = '".$idUser."'";
            $ri= $fm->requete($c,$qi);
            if($ri){
                echo " <script> alert('L\'utilisateur a été un-bannis.') </script>
                ";
            }
        }
        if(isset($_POST['validerTransporter'])){

            $qi=" update transporter set inscription = 'Validee' where idUser = '".$idUser."'";
            $ri= $fm->requete($c,$qi);
            if($ri){
                echo " <script> alert('L\'inscription du transporteur a été validée.') </script>
                ";
            }
        }
        if(isset($_POST['unvaliderTransporter'])){

            $qi=" update transporter set inscription = 'Non validee' where idUser = '".$idUser."'";
            $ri= $fm->requete($c,$qi);
            if($ri){
                echo " <script> alert('L\'inscription du transporteur a été un-validée.') </script>
                ";
            }
        }
    }



}