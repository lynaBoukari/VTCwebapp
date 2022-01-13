<?php
require_once('./controller/backend.php');
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class dashAccueil_view {
   public function affichDashboard(){
    $vf=new front_view();
    $vf->entetePage("Dashboard");
    $vf-> affichMenu();
    ?>

<body>

    <?php
    
    $this->dashboard();
   $vf-> affichFooter();
   ?>
</body>

</html>
<?php
   }

   private function dashboard(){
    ?>
   
<div class="container-fluid padding dashboard">
    <?php
if(isset($_GET["title"] )&& $_GET["title"]=="gestionUtilisateurs"){
?>
        <center>
    <div class=" row dashRow">
    <div class="col col-md-6" >
                <figure>
                    <a href="./dashboard.php?title=gestionClients" style="color : #343a40;"><i
                            class="fa fa-users fa-10x" aria-hidden="true"></i></a>
                    <figcaption style="color:#343a40;"> <b> GESTION DES CLIENTS </b> </figcaption>
                </figure>
            </div>
        
    
            <div class="col col-md-6">
                <figure>
                    <a href="./dashboard.php?title=gestionTransporteurs" style="color : #343a40;"><i class="fa fa-truck fa-10x" aria-hidden="true"></i></a>
                    <figcaption style="color:#343a40;"> <b> GESTION DES TRANSPORTEURS </b> </figcaption>
                </figure>
            </div>
    </div>
        </center>

 <?php
}else{

?>
<center>
    <div class=" row dashRow">
    
            <div class="col col-md-6" >
                <figure>
                    <a href="./dashboard.php?title=gestionUtilisateurs" style="color : #343a40;"><i
                            class="fa fa-users fa-10x" aria-hidden="true"></i></a>
                    <figcaption style="color:#343a40;"> <b> GESTION DES UTILISATEURS </b> </figcaption>
                </figure>
            </div>
        
    
            <div class="col col-md-6">
                <figure>
                    <a href="./dashboard.php?title=gestionAnnonces" style="color : #343a40;"><i class="fa fa-bullhorn fa-10x" aria-hidden="true"></i></a>
                    <figcaption style="color:#343a40;"> <b> GESTION DES ANNONCES </b> </figcaption>
                </figure>
            </div>
        
   </div>
  
   <div class="row dashRow">
    
            <div class="col col-md-6">
                <figure>
                    <a href="./dashboard.php?title=gestionNews" style="color : #343a40;"><i class="fa fa-newspaper fa-10x" aria-hidden="true"></i></a>
                    <figcaption style="color:#343a40;"> <b> GESTION DES NEWS </b> </figcaption>
                </figure>
            </div>
        
    
            <div class="col col-md-6">
                <figure>
                    <a href="./dashboard.php?title=gestionContenu" style="color : #343a40;"><i class="fa fa-file  fa-10x" aria-hidden="true"></i></a>
                    <figcaption style="color:#343a40;"> <b> GESTION DU CONTENU </b> </figcaption>
                </figure>
            </div>
        
    </div>
 </center>
 <?php
}
?>
</div>
<?php

  
   }
}