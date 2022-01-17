<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class detailsNews_view {

public function affichDetails(){
    $c=new front_controller();

    /*** recuperer l'id du news à partir de l'url de la varible GET */

    if(isset($_GET['id'])){
                $idNews=$_GET['id'];
                $details=  $c->getNews_details($idNews);
                if ($details==null or $details->num_rows ==0){
                    echo '  <div class="row padding">
                    <h5> Erreur lors du chargement de la page ...</h5>
                    </div>';
                }
                else{
                    foreach ($details as $row ){
                            ?>
<div class="container-fluid padding">
    <div class=" row vtcDiapo">
        <img src="./public/images/vtc_news.jpg" alt="VTC News page"></img>
    </div>
    <div class="container-fluid  detailsNews padding">
    <div class="row padding">
        <h1> <b> <?= $row['titre'] ?> </b></h1>
        <p> <br /></p>
    </div>
   
        <div class="row padding">
            <div class="col-md-4">
                <img src=" <?= $row['image'] ?>" alt="Image VTC News">
            </div>
            <div class="col-md-8">
                <p>
                    <?= $row['description'] ?>
                    <br />
                </p>
            </div>
        </div>
        <div class="row padding">
            <div class="col-md-4">
                <h6> Pour plus de details, <a href="<?= $row['lien'] ?>" _blank> suivez le lien suivant !</a> </h6>
            </div>
            <div class="col-md-8">
                <img src=" <?= $row['image2'] ?>" alt="Image VTC News">
            </div>
        </div>
    </div>
</div>

<?php

                    }
    }
}
}

/*** la main fonction qui affiche la page des news  */
public function affichNewsDetails(){
    $vf=new front_view();
    $vf->entetePage("Détails du news");
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