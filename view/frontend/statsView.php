<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class stats_view {


    
  // fonction qui affiche  les statistiques
  public function affichStats(){
    $c=new front_controller();

    /***** recuperer toutes les informations necessaires de la bdd */
    $nbrVisit=$c->getVisitStats();
    $nbrUser=$c->getUserStats();
    $nbrTrans=$c->getTransStats();
    $nbrAnnon=$c->getAnnonStats();
    $topAnnon=$c->getTopAnnonStats();
        ?>

<div class="container-fluid padding statsDiv">


<hr>
    
    <div class="row padding text-center">
        <div class="col-md-12 ">
            <h1> LES STATISTIQUES DU SITE </h1>
          
        </div>
    </div>
    <div class=" container-fluid rondStats ">
        <div class="row">

            <div class="col-md-1">
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3 oval">
                <h5> <i class="fa fa-eye" aria-hidden="true"></i> &nbsp;&nbsp; Nos visiteurs <?=  $nbrVisit?> </h5>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-2">
            </div>


        </div>
        <div class="row padding">

            <div class="col-md-1">
            </div>
            <div class="col-md-3 oval text-center">
                <h5><i class="fa fa-users" aria-hidden="true"></i> &nbsp;&nbsp; <?=  $nbrUser?> Utilisateurs </h5>
            </div>
            <div class="col-md-3 oval">
                <h5><i class="fa fa-bullhorn" aria-hidden="true"></i> &nbsp;&nbsp; <?=  $nbrAnnon?> Annonces </h5>
            </div>
            <div class="col-md-3 oval">
                <h5><i class="fa fa-truck" aria-hidden="true"></i> &nbsp;&nbsp; <?=  $nbrTrans?> Transporteurs</h5>
            </div>
            <div class="col-md-2">
            </div>

        </div>
    </div>
<hr>
    <div class="row padding text-center">
        <div class="col-md-12 padding">
            <h2 style="padding-bottom: 1rem;">Les top annonces les plus visitées</h2>
        </div>
        <?php
         if ($topAnnon==null){
                echo '  <div class="row padding">
                <h5> Pas d\'annonces...</h5>
                </div>';}
            else{
                $i=0;
                $j=1;
            foreach ($topAnnon as $rowfa) {
                if($rowfa['valide']=='1' && $rowfa['archive']!='1') {
                $description= substr($rowfa['description'],0,20);
                $titre= substr($rowfa['titre'],0,30);
                echo '<div class="col-md-3">
                <div class="card">
                        <img class="card-img-top" src="'.$rowfa['image'].'" alt="Annonce image" style="width:100%; height:10rem"></img>
                        <div class="card-body">
                        <h5 class="card-title"> '.$titre.'... </h5>
                        <p class="card-text"> '. $description.' ...</p>
                        <a href="./index.php?titre=DetailsAnnonce&id='.$rowfa['idAnnonce'].'" class="btn btn-outline-secondary">Voir la suite</a>
                        </div>
                </div>
                </div>'; 
            
                if($i==3 and $j<2){
              
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
             
            } }
            echo '</div>';
            
            }

    ?>
    </div>
</div>
</div>
<?php
        }


        /*** la main function qui affiche la page des statistiques */
public function affichStatsPage(){

    $vf=new front_view();
    $vf->entetePage("Statistiques");
    
    ?>

<body>
    <?php
   $vf-> affichMenu();
    $this->affichStats();


   $vf-> affichFooter();
 ?>
</body>

</html>

<?php
}
}