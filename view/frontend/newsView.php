<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class news_view {


 public function affichCadreNews(){
?>
<div class="container-fluid padding">
    <div class=" row vtcDiapo">
        <img src="./public/images/vtc_news.jpg" alt="VTC News page"></img>
    </div>
</div>
<?php

     $c=new front_controller();
     $rfa=null;

     /**** recuperer les informations de news de la bdd */

    $rfa= $c->getNews();
    /* condition si le  news n'existe pas dans la BDD*/
    if ($rfa==null){
        echo '  <div class="row padding">
        <h5> Pas de news dans la BDD...</h5>
        </div>';}
        /* condition si le  news existe mais pas d'annonces correspendantes*/
        else{
    if ($rfa->num_rows ==0){
        echo '  <div class="row padding">
        <h5> Pas de news dans la BDD...</h5>
        </div>';
    }
    /*  dans le cas où si le  news existe et il ya des annonces*/
    else{
        echo '  <div class="row padding">';
        $i=0;
        $j=1;
     foreach ($rfa as $rowfa ){
            $description= substr($rowfa['description'],0,20);
            $titre= substr($rowfa['titre'],0,10);

            /**** afficher chaque nes sous forme de carte  */
            echo '<div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="'.$rowfa['image'].'" alt="News image" style="width:100%; height:10rem"></img>
                    <div class="card-body">
                       <h5 class="card-title"> '.$titre.'...</h5>
                       <p class="card-text"> '. $description.' ...</p>
                       <a href="./index.php?titre=DetailsNews&id='.$rowfa['idNews'].'" class="btn btn-outline-secondary">Voir les détails</a>
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
 }
}

/**** Main function to display the news page *** */
public function affichNewsPage(){
    $vf=new front_view();
    $vf->entetePage("News");
    $vf-> affichMenu();
    ?>

<body>
    <?php
    $this->affichCadreNews();
    $vf-> affichFooter();
    ?>
</body>

</html>
<?php

}

}