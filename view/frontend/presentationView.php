<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class presentation_view {


    // fonction main qui affiche toute la page presentation


    public function affichPresentation(){
        $c=new front_controller();
        $info=$c->getPresentation();
        $vf = new front_view();
        $vf->entetePage("Presentation");
        $vf-> affichMenu();
        foreach ($info as $row) {

        
        ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <img id="imagePresentation" class="img-fluid" src="./public/images/diapo1.jpg" alt="VTC Company">
        </div>
        <div class="row padding">
            <div class="col-md-6 padding">
                <h3><?= $row['titre1'] ?></h3>
                <p>
                <?= $row['description1'] ?>
                </p>
            </div>
            <div class="col-md-6 padding">
                <img id="imagePresentation" class="img-fluid" src="./public/images/diapo2.jpg" alt="VTC Company">
            </div>
        </div>
        <div class="row padding">
            <h3><?= $row['titre2'] ?> </h3>
            <div class="col-md-8">

                <iframe width="100%" height="315" src="<?= $row['lienVideo'] ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <p> <?= $row['description2'] ?>
                </p>
            </div>
        </div>
    </div>
    <?php
      
    break;
}
        $vf-> affichFooter();
        }
        

}