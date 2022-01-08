<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class presentation_view {


    // fonction main qui affiche toute la page presentation


    public function affichPresentation(){
        $vf = new front_view();
        $vf->entetePage("Presentation");
        $vf-> affichMenu();
        ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <img id="imagePresentation" class="img-fluid" src="./public/images/diapo1.jpg" alt="VTC Company">
        </div>
        <div class="row padding">
            <div class="col-md-6 padding">
                <h3>Qui somme nous ?</h3>
                <p>VTC Transports est un service destiné à vous accompagner dans vos déplacements en région parisienne.
                    <br /> Nous mettons à votre disposition une équipe de chauffeurs expérimentés, des véhicules adaptés
                    à vos besoins et avons une formule simple : « Vous êtes le client, nous vous emmenons d'un point A
                    au point B, au meilleur tarif. »

                    <br /> VTC Transports est différent d'un service de taxi classique. Nous ne venons vous chercher que
                    sur rendez-vous et suivons d'autres règlements qui nous sont propres. En revanche, la location de
                    nos voitures se fait toujours avec chauffeur.
                </p>
            </div>
            <div class="col-md-6 padding">
                <img id="imagePresentation" class="img-fluid" src="./public/images/diapo2.jpg" alt="VTC Company">
            </div>
        </div>
        <div class="row padding">
            <h3>Voici une vidéo présentant nos objectifs : </h3>
            <div class="col-md-8">

                <iframe width="100%" height="315" src="https://www.youtube.com/embed/gp51XI3DdKU"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <p> Que faire si mon vol est retardé ? <br /> <br />
                    N'ayez aucune inquiétude ! Nos chauffeurs sont tous équipés d'une application qui les informe en
                    temps réel de l'état du trafic aérien. Ils seront là au bon moment pour vous accueillir en toute
                    sérénité.

                    <br /> <br />Dois-je donner un pourboire au chauffeur ? <br /> <br />
                    Vous n'êtes pas obligé de donner un pourboire au chauffeur. Il est laissé à votre entière
                    appréciation.
                </p>
            </div>
        </div>
    </div>
    <?php
        
        $vf-> affichFooter();
        }
        

}