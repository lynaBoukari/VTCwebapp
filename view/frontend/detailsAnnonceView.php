<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class detailsAnnonce_view {

        public function affichDetails(){
            $c=new front_controller();
            if(isset($_GET['id'])){
              
                $idAnnonce=$_GET['id'];
              $details=  $c->detailsAnnonce($idAnnonce);
              $detailsUser= $c->detailsUserAnnonce($idAnnonce);
              $detailsTrajet= $c->detailsTrajetAnnonce($idAnnonce) ;
            }
             if ($details==null or $details->num_rows ==0){
                echo '  <div class="row padding">
                <h5> Erreur lors du chargement de la page ...</h5>
                </div>';
            }
            else{
                foreach ($details as $row ){
                    foreach ($detailsUser as $rowU ){
                        foreach ($detailsTrajet as $rowT ){
            
           echo'
                    <div class="container-fluid padding">
                            <div class="row padding" >
                           
                                <div class="col-md-4" style=" border-right: 0.11rem solid #c9c9c9;" >
                                    
                                    <img src="./public/images/colis.png" width="100%" alt="Product Image"></img>
                                    ';
                                    if( isset($_SESSION['valide']) && $_SESSION['valide']=='oui')
                                    { echo '
                                    <label>
                                    <h4> <br/><br/>A propos de l\'annonceur <br/></h4> 
                                                <h6><br/><b>Nom & Prénom : </b>  '. $rowU['lname'] .' '. $rowU['fname'] .' </h6>
                                                <p><br/><b>Adresse : </b>'. $rowU['adress'] .'</p>
                                                <p><br/><b> Contacts : </b> '. $rowU['phone'] .' '. $rowU['email'] .'</p>
                                       </label> ';
                                    }
                                    echo'
                                </div>
                                
                                <div class="col-md-8" style="padding-left: 2rem;">
                                        <div class="row nconnectedDetails" >
                                            <label>
                                                <h1> '.$row['titre'] .'<br/> </h1>
                                                <h6><br/><b>ID de l\'annonce :</b> '. $row['idAnnonce'] .'</h6>
                                                <p><br/><b>Description de l\'annonce : </b> <br/>'. $row['description'].' </p>
                                                <p><br/><b>Départ : </b> Wilaya N°'. $rowT['depart'] .'&nbsp;&nbsp;&nbsp;&nbsp;<b>Arrivée : </b>Wilaya N°'. $rowT['arrivee'] .'</p>
                                                <p><br/><b>Type de transport :</b>&nbsp;&nbsp;'. $row['typeTransport'] .'</p>
                                                <p><br/><b>Poids colis :</b>&nbsp;&nbsp;['. $row['poidInit'] .' -'.  $row['poidFinal'] .'] </p>
                                                <p><br/><b>Volume colis :</b> &nbsp;&nbsp;['. $row['volumeInit'] .' - '. $row['volumeFinal'].'] </p>
                                            </label>
                                            </div>
                                            ';
                                            if( isset($_SESSION['valide']) && $_SESSION['valide']=='oui')
                                            {
                                                echo '
                                        <div class="row connectedDetails">
                                            <label>
                                                <p><br/><b>Moyen de transport :</b>&nbsp;&nbsp;'. $row['moyenTransport'] .'</p>
                                                <p><br/><b>Date de l\'annonce :</b>&nbsp;&nbsp;'. $row['date'] .'</p>
                                                                                
                                                </label>
                                        </div>';
                                            } 
                                            echo'
                                </div>
                            </div> 
                    </div>

';

       
                }
            }
            }
            }
        }

    
    public function affichPageDetails() {
    $vf=new front_view();
    $vf->entetePage("Détails de l'annonce");
    $vf-> affichMenu();
    ?>
    <body>
    <?php
    $this->affichDetails();

   $vf-> affichFooter();
   ?>
    </body>
    </html>
    <?php
        }
}