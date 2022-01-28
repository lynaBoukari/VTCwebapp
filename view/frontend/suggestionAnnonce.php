<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class suggestionAnnonce_view {

public function suggestion($idTrajet){
    $c= new front_controller();
    /*****  recuperer le tarif de l'annonce */
   $suggestion = $c->suggestionAnnonce($idTrajet);
   $tarif=$c->getTarif($idTrajet);
  
   ?>
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col col-md-12 center-text padding">
                        <h5>Le tarif fixé par l'entreprise pour ce trajet est de : <?= $tarif ?>Da.</h5>
                </div>
                <?php
                 if($suggestion->num_rows ==0) {
                                echo "   <h5>Pas encore de transporteurs diponible pour ce trajet.</h5>";
                }
                   if($suggestion->num_rows >0) {
                ?>
                <div class="col col-md-12 center-text padding">
                        <h5 class="padding">Notre suggestion de transporteurs :</h5>

                        <table class="table table-striped tableUsers table-bordered table-sm padding" id="dtBasicExample">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Client</th>
                            <th>Username</th>
                            <th>Nom & Prénom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Certificat</th>
                            <th>Contacter</th>
                            </tr>
                        </thead>

                       
                        <tbody>
                      <?php
                         foreach($suggestion as $rowTrans) {
                             /**** recuperer les informations des transporteurs compatibles */
                            $info=$c->getTransSugg($rowTrans['idTransporter']);
                            foreach($info as $row) {
                        echo'
                        <tr>
                            <td> ' .$row['idUser']. '</td>
                            <td>'. $row['username'].'</td>
                            <td>'.$row['fname'], $row['lname'] .'</td>
                            <td>'. $row['email'] .'</td>
                            <td>'. $row['phone'] .'</td>
                            <td>'. $row['statutCertif'] .'</td>
                            <td> <center><a href="mailto:'.$row['email'].'"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a> </center></td>

                        
                        </tr> 
                            ' ;
                            } }
                            ?>
                    
                        </tbody>
                            </table>
                        <?php
                }
                        ?>
                </div>
            </div>

        </div>

     <?php 

}
 /**** la main function qui affiche la page des suggestions */
public function affichSuggestion($idTrajet){

    $vf=new front_view();
    $vf->entetePage("Suggestions de transporteurs");
    
    ?>

<body>
    <?php
   $vf-> affichMenu();
    $this->Suggestion($idTrajet);


   $vf-> affichFooter();
 ?>
</body>

</html>

<?php
}

}