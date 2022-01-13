<?php
require_once('./controller/backend.php');
require_once('./model/frontend/frontend.php');
class gestAnnonce_model {



    public function filtrerAnnonce() {
        $rc=null;
        $fm=new front_model();
        $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;
         
                if(isset($_POST['filtrerAnnonce'])){
                    if(isset($_POST['filtreAnnonce'])){
                        if(isset($_POST['trierAnnonce'])) {
                        switch ($_POST['filtreAnnonce']) {
                                case 'username' :
                                    $qc="select * from annonce inner join user on annonce.idUser = user.idUser  where user.username = '".$_POST['filtreAnnonceValue']."' and isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']."";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                        break;

                                case 'fname':
                                    $qc="select * from annonce inner join user on annonce.idUser = user.idUser where user.fname = '".$_POST['filtreAnnonceValue']."' and isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']."";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;

                                case 'lname':
                                    $qc="select * from annonce inner join user on annonce.idUser = user.idUser where user.lname = '".$_POST['filtreAnnonceValue']." ' and  isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']."";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;

                                 case 'email':
                                    $qc="select * from annonce inner join user on annonce.idUser = user.idUser where user.email = '".$_POST['filtreAnnonceValue']."' and  isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']."";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                    break;
                                
                                 case 'phone':
                                    $qc="select * from annonce inner join user on annonce.idUser = user.idUser where user.phone = '".$_POST['filtreAnnonceValue']."' and isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']."";
                                        $rc= $fm->requete($c,$qc);
                                        return $rc;
                                     break;   
                                    
                                 case 'user':
                                        $user="1";
                                        if(isset($_POST['filtreAnnonceValue'])&& ($_POST['filtreAnnonceValue']=='client'or $_POST['filtreAnnonceValue']=='Client')){
                                            $user="0";
                                        }
                                        $qc="select * from annonce inner join user on annonce.idUser = user.idUser where user.isTransporter = '".$user."' and isAdmin ='0'  order by annonce.date ".$_POST['trierAnnonce']."";
                                            $rc= $fm->requete($c,$qc);
                                            return $rc;
                                         break;

                                    case 'archive':
                                            $user="0";
                                        if(isset($_POST['filtreAnnonceValue'])&&( $_POST['filtreAnnonceValue']=='OUI' or $_POST['filtreAnnonceValue']=='oui')){
                                            $user="1";
                                        }
                                            $qc="select * from annonce inner join user on annonce.idUser = user.idUser where annonce.archive= '".$user."' and isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']." ";
                                                $rc= $fm->requete($c,$qc);
                                                return $rc;
                                             break;
                                            
                                             case 'ban' :
                                                $qc="select * from annonce inner join user on annonce.idUser = user.idUser where user.ban = '".$_POST['filtreAnnonceValue']."' and isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']." ";
                                                    $rc= $fm->requete($c,$qc);
                                                    return $rc;
                                                 break;
                                        
                                     case 'valide':
                                                $user="0";
                                                if(isset($_POST['filtreAnnonceValue'])&&( $_POST['filtreAnnonceValue']=='OUI' or $_POST['filtreAnnonceValue']=='oui')){
                                                    $user="1";
                                                }
                                                $qc="select * from annonce inner join user on annonce.idUser = user.idUser where annonce.valide = '".$user."' and isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']."";
                                                    $rc= $fm->requete($c,$qc);
                                                    return $rc;
                                                 break;                 
                                                 
                                     case 'status':
                                                    $user="0";
                                                    if(isset($_POST['filtreAnnonceValue'])&& $_POST['filtreAnnonceValue']=='enCours'){
                                                        $user="1";
                                                    }
                                                    $qc="select * from annonce inner join user on annonce.idUser = user.idUser where annonce.status = '".$user."' and isAdmin ='0' order by annonce.date ".$_POST['trierAnnonce']."";
                                                        $rc= $fm->requete($c,$qc);
                                                        return $rc;
                                                     break;  
                            

                        }
                        
                    } }
              
                }else{

                    $qc="select * from annonce inner join user on annonce.idUser = user.idUser where isAdmin ='0' ";
                      $rc= $fm->requete($c,$qc);
                     return $rc;
                }
                if(isset($_POST['resetFiltreAnnonce'])){
                    $qc="select * from annonce inner join user on annonce.idUser = user.idUser where isAdmin ='0'";
                      $rc= $fm->requete($c,$qc);
                     return $rc;
                }

          $fm-> deconnect($c);
        
    }

}