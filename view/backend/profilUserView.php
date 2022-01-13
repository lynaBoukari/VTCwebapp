<?php
require_once('./controller/backend.php');
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class profilUser_view {
    public function affichProfile($content){
    ?>

<div class="container-fluid  div-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="row menu-profile">
                <h2>Profile </h2>
                <hr class="dark">
                <a class="btn btn-profile" href="./dashboard.php?title=Profile/Informations&id=<?php echo$_GET["id"]; ?>&trans=<?php echo $_GET["trans"]; ?>"> <i class="fa fa-user"
                        aria-hidden="true"></i> Les informations</a>
                <a class="btn btn-profile" href="./dashboard.php?title=Profile/Annonces&id=<?php echo $_GET["id"]; ?>&trans=<?php echo $_GET["trans"]; ?>"><i class="fa fa-bullhorn"
                        aria-hidden="true"></i>Les annonces</a>
                <a class="btn btn-profile" href="./dashboard.php?title=Profile/Transactions&id=<?php echo $_GET["id"]; ?>&trans=<?php echo $_GET["trans"]; ?>"><i
                        class="fa fa-address-card" aria-hidden="true"></i>Les
                    transactions</a>
                <?php if($_GET['trans']=='1')  {?>
                <a class="btn btn-profile" href="./dashboard.php?title=Profile/Gains&id=<?php echo $_GET["id"]; ?>&trans=<?php echo $_GET["trans"]; ?>"><i class="fa fa-credit-card"
                        aria-hidden="true"></i>Les gains</a>
                <?php }?>
                <a class="btn btn-profile" href="./dashboard.php?title=Profile/Gerer&id=<?php echo$_GET["id"]; ?>&trans=<?php echo $_GET["trans"]; ?>"> <i class="fa fa-user"
                        aria-hidden="true"></i> Gerer l'utilisateur</a>
            </div>

        </div>
        <div class="col-md-8">
            <?php
                if($content==null){
                    echo '<div class="alert alert-info" > BIENVENUE DANS L\'ESPACE UTILISATEUR !</div>';
                }
                echo $content;
                           ?>
        </div>
    </div>
</div>

<?php
    
        }
    
    
        public function affichInformation($idUser){
            ob_start();
            $c=new front_controller();
            $info=$c->clientProfile_info($idUser);
            $infoT=$c->transProfile_info($idUser);
            
          
            foreach($info as $row){
            ?>
<form action="" method="post">
    <div class="container-fluid infoProfile">
        <h3>Les informations</h3>
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
                    echo"<h6>".$row['username']." est un transporteur chez nous. </h6> <p><br/></p> ";
                    foreach ($infoT as $rowT) {
                        if($rowT['statutCertif'] !=null){
                            ?>

        <h6 style="margin-bottom: .5rem;"> Un transporteur certifié ?</h6>
        <p> Le status du certificat : <b> <?=$rowT['statutCertif']?> </b> </p>

        <?php
            }
       }} else{
        echo"<h6>".$row['username']." n'est pas un transporteur chez nous. </h6><p><br/></p> ";
    }
    
            foreach ($infoT as $rowT) {
           
          ?>
        <!---Formulaire d'un transporteur--->
        <hr>
        <div class="container padding" id="WilayaTransporter">
            <div class="row">
                <h6 style="margin-bottom:  .5rem;">Les wilayas que le transporteur compte desservir : </h6>
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


                </div>
                <hr>
                
            </div>

</form>

<?php
    
            return ob_get_clean();
        }
    
    
        public function affichAnnonce($idUser) {
            ob_start();
            $c=new front_controller();
            $rfa=$c->getAnnonce_Info($idUser);
            if($rfa->num_rows ==0){
                echo '<div class="alert alert-secondary" role="alert">
               Vous n\'avez pas encore publier d\'annonces.
              </div>';
            }else{
                $i=0;$j=1;
                echo'<div class="row padding" >';
                foreach($rfa as $rowfa){ 
                    $valide ="non validee";
                    $archive="";
                    if ($rowfa['valide']=='1')
                    { 
                        $valide="validee";
                    }
                    if($rowfa['archive']=='1'){
                            $archive="Annonce archivee" ;
                    }
                     $description= substr($rowfa['description'],0,20);
                    $titre= substr($rowfa['titre'],0,15);
                    echo '
                    
                    <div class="col-md-4">
                    <div class="card">
                    
                            <img class="card-img-top" src="'.$rowfa['image'].'" alt="News image" style="width:100%; height:10rem"></img>
                            <div class="card-body">
                               <h5 class="card-title"> '.$titre.'...</h5>
                               <p class="card-text"> '. $description.' ...</p>
                               <a href="./index.php?titre=DetailsAnnonce&id='.$rowfa['idAnnonce'].'" class="btn btn-outline-secondary">Voir les détails</a>
                                 <div class="alert alert-info row" role="alert" style="margin-top: 1rem">
                                 
                                 <div class="col col-md-1" style="display: flex; align-items: center;" > <i class="fa fa-info" aria-hidden="true"></i></div>
                               <div class=" col col-md-11>
                               <p class="card-text" >Annonce '.$valide.' <br/> </p>
                               <p class="card-text">'.$archive.' </p>
                               </div>
                            
                               </div>
                               </div>
                    </div>
                     </div>'; 
                   
                     if($i==2 and $j<2){
                      
                        $i=0;
                        $j=$j+1;
        
                        echo ' </div><div class="row padding">';
                    }   
                   else{
                    if ($i==3 and $j==2){
                
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


        public function affichGererUser($idUser) {
                ob_start();
                $c=new front_controller();
                $info=$c->clientProfile_info($idUser);
                $infoT=$c->transProfile_info($idUser);
                foreach ($info as $row) {
                ?>
                        <div class="row padding">
                                <form method="post">
                                <div class="form-row align-items-center">
                                 <?php
                                 if ($row['isTransporter']=='1'){
                                     foreach ($infoT as $rowT){
                                         ?>
                                         <div class="col col-md-12">
                                         <?php
                                        if ($rowT['inscription']=='Non validee') {
                                        ?>
                                         <h4>L'inscription de <?= $row['username'] ?> est <?=  $rowT['inscription']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                         <button type="submit" class="btn btn-success mb-2" name="validerTransporter">Valider inscription &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i></button>
                                         <?php
                                      }else{
                                                        ?>
                                            <h4>L'inscription de <?= $row['username'] ?> est <?=  $rowT['inscription']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                            <button type="submit" class="btn btn-success mb-2" name="unvaliderTransporter">Unvalider inscription &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i></button>
                                                        <?php
                                        
                                      }
                                        ?> 
                                        </div>
                                         <?php
                                     }
                                 }
                                 ?>
                                    <div class="col col-md-12">
                                        <?php
                                        if ($row['ban']=='Non bannis') {
                                        ?>
                                   <h4>Bannir <?= $row['username'] ?> ? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4>
                                   <button type="submit" class="btn btn-danger mb-2" name="bannirUser">Bannir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-ban" aria-hidden="true"></i></button>
                                   <?php
                                        } else{
                                            ?>

                                        <h4>Enlever le bann de  <?= $row['username'] ?> ? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4>
                                       <button type="submit" class="btn btn-danger mb-2" name="unbannirUser">Enlever bann &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-ban" aria-hidden="true"></i></button>
                                         <?php
                                        }
                                        ?>
                                    </div>
                                    </div>
                                </form>
                        </div>
                <?php
                }
                return ob_get_clean();
        }

        public function affichClientProfile($content) {
            $vf=new front_view();
            $vf->entetePage("Profile Utilisateur");
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
