<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class clientProfile_view {
   public function affichProfile(){

?>

<div class="container-fluid  div-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="row menu-profile">
                <h2>Mon Profile </h2>

                <h6> Bienvenue <?= $_SESSION['username'] ?></h6>
                <hr class="dark">
                <button class="btn-profile"> <i class="fa fa-user" aria-hidden="true"></i> Mes informations</button>
                <button class="btn-profile"><i class="fa fa-bullhorn" aria-hidden="true"></i>Mes annonces</button>
                <button class="btn-profile"><i class="fa fa-address-card" aria-hidden="true"></i>Mes
                    transactions</button>
                <?php if($_SESSION['user_type']=='transporter')  {?>
                <button class="btn-profile"><i class="fa fa-credit-card" aria-hidden="true"></i>Mes gains</button>
                <?php }?>
            </div>

        </div>
        <div class="col-md-8">
            <?php
                       $this-> affichInformation();
                       ?>
        </div>
    </div>
</div>

<?php

    }


    public function affichInformation(){
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

        <h6>Un transporteur chez nous ?</h6>
        <?php
            if ($row['isTransporter']=='0') {
            ?>
        <input type="radio" name="radioTransp" id="1" value="1" class="radioTransp" required>
        <label for="1"><b>Oui</b></label>
        <input type="radio" name="radioTransp" id="0" value="0" class="radioTransp" required checked="checked">
        <label for="0"><b>Non</b></label>
        <?php
         } else{
            ?>
        <input type="radio" name="radioTransp" id="1" value="1" class="radioTransp" required checked="checked">
        <label for="1"><b>Oui</b></label>
        <input type="radio" name="radioTransp" id="0" value="0" class="radioTransp" required>
        <label for="0"><b>Non</b></label>


        <!---Formulaire d'un transporteur--->
        <hr>
        <?php

    foreach ($infoT as $rowT) {
       
    ?>
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
                               }}
                            ?>
                    </ul>
                </div>
            </div>
            <div id="divTrajetProfile">
                <div class="row padding" id="profileTrans">
                </div>

                <button id="btnTrajet" type="button" class="btn btn-outline-secondary"
                    style="font-size :1.4rem;"><b>+</b></button>
            </div>

            <?php
                    
                    ?>




            <?php
                            if($rowT['statutCertif'] !=null){
                                ?>
            <hr>
            <h6 style="margin-bottom: .5rem;"> Un transporteur certifié ?</h6>
            <p> Le status de votre certificat : <b> <?=$rowT['statutCertif']?> </b> </p>
        </div>

        <?php
         }  } }
            ?>
        <hr>
        <button type="submit" class="modifProfile btn btn-primary" name="submitModifier">Modifier</button>
    </div>
    </div>
</form>

<?php
        } 
    }
    public function affichClientProfile() {
        $vf=new front_view();
        $vf->entetePage("Mon Profile");
        $vf-> affichMenu();
        ?>

<body>
    <?php
        $this->affichProfile();
    
       $vf-> affichFooter();
       ?>
</body>

</html>
<?php
            }
}