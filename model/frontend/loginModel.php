<?php
require_once('./controller/frontend.php');
require_once('./model/frontend/frontend.php');

/***
 * cette classe permet de gerer le processus de login 
 */
class login_model {
   
    public function login($username,$password){
     
    $fm=new front_model();
    $c=$fm->connect($fm->dbname, $fm->host, $fm->user, $fm->password) ;

        // prevent sql injections/ clear user invalid inputs
        $username= trim($username);
        $username = strip_tags($username);
        $username = htmlspecialchars($username);

        $password = trim($password);
        $password = strip_tags($password);
        $password = htmlspecialchars($password);
        
        // check if the username is exists and password is correct 
        $qlogin="select * from user where username = '".$username."'";
        $rlogin = $fm-> requete($c,$qlogin);
        $err=" Aucun traitement en cours.";
            if($rlogin->num_rows==0){
                    $err=" Ce username n'existe pas ! revoyez le ou inscrivez vous si vous ne l'avez pas fait." ;
            }else{
                while ($row = mysqli_fetch_assoc($rlogin)) {
                    if($row['password']!=$password){

                            $err = " Mot de passe erroné! revoyez le ou inscrivez vous si vous ne l'avez pas fait. ";
                    } else {
                            if($row['isAdmin'] =='1') {
                                if(!isset($_SESSION)){
                                    session_start();
                                }
                                $_SESSION['id'] = $row['idUser'];	
                                $_SESSION['user_type']="admin";
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['valide']='oui';
                                $err=' Bienvenu chers Admin :'.   $_SESSION['username']. '' ;
                            }else {
                                if($row['isTransporter'] ==1) {
                                    if(!isset($_SESSION)){
                                        session_start();
                                    }
                                $_SESSION['id'] = $row['idUser'];	
                                $_SESSION['user_type']="transporter";
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['valide']='oui';
                                $err=' Bienvenu chers Transporteur :'.   $_SESSION['username']. ' ' ;
                                }else{
                                    if(!isset($_SESSION)){
                                        session_start();
                                    }
                                    $_SESSION['id'] = $row['idUser'];	
                                    $_SESSION['user_type']="client";
                                    $_SESSION['username'] = $row['username'];
                                    $_SESSION['valide']='oui';
                                    $err=' Bienvenu chers Client :'.   $_SESSION['username']. ' ' ;

                                }
                            }
                    }

                }
            }
        $fm-> deconnect($c);
        return $err;
    }

 public function logout()
    {
        if(isset($_SESSION)){
         $_SESSION['valide']='non';
        session_unset();
        session_destroy();
        }
    }

}