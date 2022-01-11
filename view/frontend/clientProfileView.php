<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class clientProfile_view {
   public function affichProfile($content){

?>

<div class="container-fluid  div-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="row menu-profile">
                <h2>Mon Profile </h2>

                <h6> Bienvenue <?= $_SESSION['username'] ?></h6>
                <hr class="dark">
                <a class="btn btn-profile"  href="./index.php?titre=Profile/MesInformations"> <i class="fa fa-user" aria-hidden="true"></i> Mes informations</a>
                <a class="btn btn-profile" href="./index.php?titre=Profile/MesAnnonces"><i class="fa fa-bullhorn" aria-hidden="true"></i>Mes annonces</a>
                <a class="btn btn-profile" href="./index.php?titre=Profile/MesTransactions"><i class="fa fa-address-card" aria-hidden="true" ></i>Mes
                    transactions</a>
                <?php if($_SESSION['user_type']=='transporter')  {?>
                <a class="btn btn-profile" href="./index.php?titre=Profile/MesGains"><i class="fa fa-credit-card" aria-hidden="true" ></i>Mes gains</a>
                <?php }?>
            </div>

        </div>
        <div class="col-md-8">
            <?php
            echo $content;
                       ?>
        </div>
    </div>
</div>

<?php

    }


    public function affichInformation(){
        ob_start();
        $c=new front_controller();
        $info=$c->clientProfile_info();
        $infoT=$c->transProfile_info();
        
      
        foreach($info as $row){
        ?>
<form action="" method="post">
    <div class="container-fluid infoProfile">
        <h3>Mes informations</h3>
        <hr>

        <label for="fname"><b>Prénom</b></label>
        <input type="text" value="<?=$row['fname']?>" name="fname" id="fname" required>

        <label for="lname"><b>Nom</b></label>
        <input type="text" value="<?=$row['lname']?>" name="lname" id="lname" required>

        <label for="lname"><b>Username</b></label>
        <input type="text" value="<?=$row['username']?>" name="username" id="username" required>

        <label for="email"><b>Email</b></label>
        <input type="email" value="<?=$row['email']?>" name="email" id="email" required>

        <label for="phone"><b>Téléphone</b></label>
        <input type="text" value="<?=$row['phone']?>" name="phone" id="phone" required>

        <label for="adress"><b>Adresse</b></label>
        <input type="text" value="<?=$row['adress']?>" name="adress" id="adress" required>

        <label for="psw"><b>Password</b></label>
        <input type="text" value="<?=$row['password']?>" name="password" id="password" required><br />

        <hr>
        <?php
            if ($row['isTransporter']=='1') {
                echo"<h6>Vous etes un transporteur chez nous. </h6> <p><br/></p> ";
                foreach ($infoT as $rowT) {
                    if($rowT['statutCertif'] !=null){
                        ?>

        <h6 style="margin-bottom: .5rem;"> Un transporteur certifié ?</h6>
        <p> Le status de votre certificat : <b> <?=$rowT['statutCertif']?> </b> </p>

        <?php
        }
   }} else{
    echo"<h6>Vous n'etes pas un transporteur chez nous. </h6><p><br/></p> ";
}
 ?>
        <hr>
        <div class="row">
            <h6>Voulez vous changer votre situation ? </h6>
            <div class="col-md-12 ">
                <input type="radio" name="radioTransp" id="1" value="1" class="radioTransp" required>
                <label for="1"><b>Transporteur</b></label>
                <input type="radio" name="radioTransp" id="0" value="0" class="radioTransp" required>
                <label for="0"><b>Client</b></label>
            </div>
        </div>

        <?php
        foreach ($infoT as $rowT) {
       
      ?>
        <!---Formulaire d'un transporteur--->
        <hr>
        <div class="container padding" id="WilayaTransporter">
            <div class="row">
                <h6 style="margin-bottom:  2.5rem;">Les wilayas que vous comptez desservir : </h6>
                <div class="col-md-12">
                    <ul>
                        
                        <?php

                             $infoTrajets=$c->getTrajets_Info($rowT['idTransporter']);
                             foreach($infoTrajets as $rowTrajets) {
                                $infoTrajet=$c->getTrajet_Info($rowTrajets['idTrajet']);
                               foreach ($infoTrajet as $rowTrajet) {
                               
                            ?>
                        <li>
                            Départ : Wilaya N°<?=$rowTrajet['depart']?> &nbsp;&nbsp;&nbsp; Arrivée : Wilaya N°
                            <?=$rowTrajet['arrivee']?>
                        </li>
                        <?php
                               }} }}
                            ?>
                    </ul>


                    <div class="container-fluid padding" id="addTrajet">

                        <div class="row padding">
                            <div class="col-md-12" id="profileTrans">

                            </div>
                        </div>
                        <center>
                            <button id="btnTrajetP" type="button" class="btn btn-outline-secondary" style="font-size :1.4rem; width:50%" onclick="addInput()"><b>+</b></button>
                        </center>
                    </div>


                </div>
                <hr>
                <button type="submit" class="modifProfile btn btn-primary" name="submitModifier">Modifier</button>
            </div>

</form>

<?php
        return ob_get_clean();
    }


    public function affichAnnonce() {
        ob_start();
        $c=new front_controller();
        $rfa=$c->getAnnonce_Info();
        if($rfa->num_rows ==0){
            echo '<div class="alert alert-secondary" role="alert">
           Vous n\'avez pas encore publier d\'annonces.
          </div>';
        }else{
            $i=0;$j=1;
            echo'<div class="row padding" >';
            foreach($rfa as $rowfa){ 
                 $description= substr($rowfa['description'],0,20);
                $titre= substr($rowfa['titre'],0,15);
                echo '
                
                <div class="col-md-3">
                <div class="card">
                        <img class="card-img-top" src="'.$rowfa['image'].'" alt="News image" style="width:100%; height:10rem"></img>
                        <div class="card-body">
                           <h5 class="card-title"> '.$titre.'...</h5>
                           <p class="card-text"> '. $description.' ...</p>
                           <a href="./index.php?titre=DetailsAnnonce&id='.$rowfa['idAnnonce'].'" class="btn btn-outline-secondary">Voir les détails</a>
                        </div>
                </div>
                 </div>'; 
               
                 if($i==3 and $j<2){
                  
                    $i=0;
                    $j=$j+1;
    
                    echo ' </div><div class="row padding">';
                }   
               else{
                if ($i==4 and $j==2){
            
                    break;
                } 
              }
                $i=$i+1; 
             
            }
            echo '</div>';


        }
        ?>
   
        <?php
        return ob_get_clean();
    }
    public function affichClientProfile($content) {
        $vf=new front_view();
        $vf->entetePage("Mon Profile");
        $vf-> affichMenu();
        ?>

<body>

    <?php
        $this->affichProfile($content);
    
       $vf-> affichFooter();
       ?>
</body>

</html>
<?php
            }
}