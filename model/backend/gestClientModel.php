<?php
require_once('./controller/backend.php');
require_once('./model/frontend/frontend.php');
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
}