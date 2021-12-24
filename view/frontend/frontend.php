<?php
require_once('./controller/frontend.php');
class front_view {
public function  entetePage($titre) {
?>
<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="./public/js/jquery-3.6.0.js"></script>    
        <script src="./public/js/script.js"></script>   
        <link href="./public/css/style.css" rel="stylesheet" /> 
        

        <!--- le titre de la page est specifié dynamiquement--->
        <title><?= $titre ?></title>
    </head>
<?php
}

  public function affichMenu(){

    ?>
    <!--Navigation BAR-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top"> 
    <div class="container-fluid">
 <a class="navbar-brand" href="#"> <img src="./public/images/vtcLogo.png" alt="Logo" style="width:100% ; height: 30px;"></a>
 <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" >
     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
             <li class="nav-item active ">
                 <a class="nav-link" href="./index.php?titre=Accueil">Accueil</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="./index.php?titre=Presentation">Présentation</a>
             </li> <li class="nav-item">
                 <a class="nav-link" href="./index.php?titre=News">News</a>
             </li> <li class="nav-item">
                 <a class="nav-link" href="./index.php?titre=Statistiques">Statistiques</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="./index.php?titre=Contact">Contact</a>
             </li>
             <li class="nav-item">
             <a type="button" class=" btn btn-primary nav-link" href="./index.php?titre=Seconnecter">Se connecter</a>
             </li>
             <li class="nav-item">
                 <a type="button" class=" btn btn-primary nav-link" href="./index.php?titre=Sinscrire">S'inscrire</a>
             </li>
            </ul>
         </div>
    </div>
</nav>

<?php 
  }
    public function affichDiaporama(){
        ?>

        <!------ diaporama-----> 
<div id="slides" class="carousel slide" data-ride="carousel" data-interval="3000" >
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1" ></li>
        <li data-target="#slides" data-slide-to="2" ></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="https://www.caat.dz/index.php/produits-et-services/entreprises/assurances-transports/assurances-terrestres/transport-privé.html">
           <img  class="img-fluid" src="./public/images/diapo1.jpg" alt="Transport">
           </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.tranfal.com">
           <img src="./public/images/diapo2.jpg" alt="Transport">
           </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.dhlexpress.fr/actualites/covid-19-dhl-express-continue-d-assurer-ses-operations">
           <img src="./public/images/diapo3.jpg" alt="Transport">
           </a>
        </div>
    </div>
    </div>

    <?php
    }

    public function affichFooter(){
        ?>
         <!--- The footer --->
  <footer>
      <div class="container-fluid padding">
          <div class="row text-center">
              <div class="col-md-4">
                  <img src="./public/images/vtcLogo.png" alt="Logo" style="width:30% ; " >
                  <hr class="light">
                  <p>+213-666-666-666</p>
                  <p>email@VTC.com</p>
                  <p>Oued Smar , Alger</p>
                  <p>Alger, Algerie.</p>
                  </div>

                  <div class="col-md-4">
                  <hr class="light">
                  <h5>Nos Horaires</h5>
                  <hr class="light">
                  <p>Dimanche : 10h - 15h</p>
                  <p>Mardi : 10h- 15h</p>
                  <p>Jeudi : 10h - 12h</p>
                 
                  </div>

                  <div class="col-md-4">
                  <hr class="light">
                  <h5>Menu</h5>
                  <hr class="light">
                  <a  href="./index.php?titre=Accueil">Acceuil</a> <br />
                  <a  href="./index.php?titre=Presentation">Présentation</a> <br />
                  <a href="#">News</a> <br />
                  <a href="#">Statistiques</a> <br />
                  <a href="#">Contact</a> <br />
                  </div>

                  <div class="col-12">
                      <hr class="light">
                      <h5>&copy; TDW projet ESI </h5>
                      <p>BOUKARI Lyna 2cssil1 </p>
                  </div>
          </div>
          </div>
  </footer>

  <?php
    }

    public function affichFormRecherche(){
        ?>
        <!--- formulaire de recherche--->

<div class="container-fluid padding" >
    <div class="row">
      <h6> Veuillez spécifer les informations de recherche d'annonces :</h6>
    </div>
<form class="form-inline" method="post" action="">

  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Départ :</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="selectWilaya1">
  
    <option value="1">1-	Adrar</option>
    <option value="2">2-	Chlef</option>
    <option value="3">3-	Laghouat</option>
    <option value="4">4-	Oum bouaghi</option>
    <option value="5">5-	Batna</option>
    <option value="6">6-	Bejaia</option>
    <option value="7">7-	Biskra</option>
    <option value="8">8-	Bechar</option>
    <option value="9">9-	Blida</option>
    <option value="10">10-	Bouira</option>
    <option value="11">11-	Tamanrasset</option>
    <option value="12">12-	Tebessa</option>
    <option value="13">13-	Tlemcen</option>
    <option value="14">14-	Tiaret</option>
    <option value="15">15-	Tizi ouzou</option>
    <option value="16">16-	Alger</option>
    <option value="17">17-	Djelfa</option>
    <option value="18">18-	Jijel</option>
    <option value="19">19-	Setif</option>
    <option value="20">20-	Saida</option>
    <option value="21">21-	Skikda</option>
    <option value="22">22-	Sidi Bel Abbes</option>
    <option value="23">23-	Annaba</option>
    <option value="24">24-	Guelma</option>
    <option value="25">25-	Constantine</option>
    <option value="26">26-	Medea</option>
    <option value="27">27-	Mostaganem</option>
    <option value="28">28-	M'sila</option>
    <option value="29">29-	Mascara</option>
    <option value="30">30-	Ouargla</option>
    <option value="31">31-	Oran</option>
    <option value="32">32-	El Baydh</option>
    <option value="33">33-	Illizi</option>
    <option value="34">34-	Bordj Bou Arreridj</option>
    <option value="35">35-	Boumerdes</option>
    <option value="36">36-	El Taref</option>
    <option value="37">37-	Tindouf</option>
    <option value="38">38-	Tissemsilt</option>
    <option value="39">39-	El Oued</option>
    <option value="40">40-	Khenchla</option>
    <option value="41">41-	Souk Ahrass</option>
    <option value="42">42-	Tipaza</option>
    <option value="43">43-	Mila</option>
    <option value="44">44-	Aïn Defla</option>
    <option value="45">45-	Nâama</option>
    <option value="46">46-	Aïn Temouchent</option>
    <option value="47">47-	Ghardaïa</option>
    <option value="48">48-	Relizane</option>

  </select>
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Arrivée :</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="selectWilaya2">
  
    <option value="1">1-	Adrar</option>
    <option value="2">2-	Chlef</option>
    <option value="3">3-	Laghouat</option>
    <option value="4">4-	Oum bouaghi</option>
    <option value="5">5-	Batna</option>
    <option value="6">6-	Bejaia</option>
    <option value="7">7-	Biskra</option>
    <option value="8">8-	Bechar</option>
    <option value="9">9-	Blida</option>
    <option value="10">10-	Bouira</option>
    <option value="11">11-	Tamanrasset</option>
    <option value="12">12-	Tebessa</option>
    <option value="13">13-	Tlemcen</option>
    <option value="14">14-	Tiaret</option>
    <option value="15">15-	Tizi ouzou</option>
    <option value="16">16-	Alger</option>
    <option value="17">17-	Djelfa</option>
    <option value="18">18-	Jijel</option>
    <option value="19">19-	Setif</option>
    <option value="20">20-	Saida</option>
    <option value="21">21-	Skikda</option>
    <option value="22">22-	Sidi Bel Abbes</option>
    <option value="23">23-	Annaba</option>
    <option value="24">24-	Guelma</option>
    <option value="25">25-	Constantine</option>
    <option value="26">26-	Medea</option>
    <option value="27">27-	Mostaganem</option>
    <option value="28">28-	M'sila</option>
    <option value="29">29-	Mascara</option>
    <option value="30">30-	Ouargla</option>
    <option value="31">31-	Oran</option>
    <option value="32">32-	El Baydh</option>
    <option value="33">33-	Illizi</option>
    <option value="34">34-	Bordj Bou Arreridj</option>
    <option value="35">35-	Boumerdes</option>
    <option value="36">36-	El Taref</option>
    <option value="37">37-	Tindouf</option>
    <option value="38">38-	Tissemsilt</option>
    <option value="39">39-	El Oued</option>
    <option value="40">40-	Khenchla</option>
    <option value="41">41-	Souk Ahrass</option>
    <option value="42">42-	Tipaza</option>
    <option value="43">43-	Mila</option>
    <option value="44">44-	Aïn Defla</option>
    <option value="45">45-	Nâama</option>
    <option value="46">46-	Aïn Temouchent</option>
    <option value="47">47-	Ghardaïa</option>
    <option value="48">48-	Relizane</option>
  </select>

  <button type="submit" class="btn btn-primary my-1" name="submit">Recherche</button>
</form>
</div>
<?php
    }

    public function affichCadre(){
        ?>

        <!------ Cadres d'affichages------>

<div class="container-fluid padding">


<!------ Premiere ligne de cadres d'affichages avec 4 cadres------>
    <div class="row padding">
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        
    </div>

<!------ deuxieme ligne de cadres d'affichages avec 4 cadres------>

    <div class="row padding">
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        
    </div>
</div>

<?php
    }

    public function affichBoutonPresent(){
        ?>
        <!---- Bouton comment cela fonctionne ---->
<div class="container-fluid padding">
   <div class="row text-center justify-content-center">
   <a href="./index.php?titre=Presentation" class="btn btn-primary">Comment cela fonctionne ?</a>
   </div>
</div>
<?php
    }

 public function affichPrincipal($titre){
$this->entetePage($titre);
?>
<body>
<?php
$this-> affichMenu();
$this-> affichDiaporama();
$this-> affichFormRecherche();
if(!isset($_POST['submit'])) {
$this-> affichCadre();}
else{
$this->affichResultatsRecherche();
}
$this-> affichBoutonPresent();
$this-> affichFooter();
?>
 </body>
</html>

<?php
 }

 public function affichAnnonce($depart, $arrivee) {
     $c=new front_controller();
     $rfa=null;
    $rfa= $c->afficher_annonces($depart, $arrivee);
    /* condition si le trajet n'existe pas dans la BDD*/
    if ($rfa==null){
        echo '  <div class="row padding">
        <h5> Aucune annonce correspond aux criteres entrées ...</h5>
        </div>';}
        /* condition si le trajet existe mais pas d'annonces correspendantes*/
        else{
    if ($rfa->num_rows ==0){
        echo '  <div class="row padding">
        <h5> Aucune annonce correspond aux criteres entrées ...</h5>
        </div>';
    }
    /*  dans le cas où le trajet existe et il ya des annonces*/
    else{
        echo '  <div class="row padding">';
        $i=0;
        $j=1;
     foreach ($rfa as $rowfa ){
            $description= substr($rowfa['description'],0,20);
            echo '<div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="./public/images/'.$rowfa["image"].'" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> '.$rowfa['titre'].' </h4>
                       <p class="card-text"> '. $description.' ...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
             </div>'; 
           
             if($i==4 and $j<2){
                 echo '</div>';
                 $i=0;
                 $j=$j+1;
                 echo '  <div class="row padding">';
             }       elseif ($i==4 and $j==2){
                echo '</div>';
                 break;
             }   
             $i=$i+1; 
          
         }
    }
}
 }
    public function affichResultatsRecherche(){
/*  $this->affichFormRecherche();*/
         if(isset($_POST['submit'])){
            $this->affichAnnonce($_POST['selectWilaya1'], $_POST['selectWilaya2']);
        }
    }


public function affichPresentation(){
$this->entetePage("Presentation");
$this-> affichMenu();
?>
<body>
     <div class="container-fluid">
        <div class="row">
                <img  id="imagePresentation"  class="img-fluid"  src="./public/images/diapo1.jpg" alt="VTC Company">
        </div>
        <div class="row padding">
                <div class="col-md-6 padding">   
            <h3>Qui somme nous ?</h3>
            <p>VTC Transports est un service destiné à vous accompagner dans vos déplacements en région parisienne.    <br/>  Nous mettons à votre disposition une équipe de chauffeurs expérimentés, des véhicules adaptés à vos besoins et avons une formule simple : « Vous êtes le client, nous vous emmenons d'un point A au point B, au meilleur tarif. »

                       <br/> VTC Transports est différent d'un service de taxi classique. Nous ne venons vous chercher que sur rendez-vous et suivons d'autres règlements qui nous sont propres. En revanche, la location de nos voitures se fait toujours avec chauffeur.   </p>
             </div>
             <div class="col-md-6 padding">   
             <img  id="imagePresentation"  class="img-fluid"  src="./public/images/diapo2.jpg" alt="VTC Company">
                 </div>
        </div>
        <div class="row padding">
        <h3>Voici une vidéo présentant nos objectifs : </h3>
        <div class="col-md-8">   
          
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/gp51XI3DdKU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-4"> 
                <p> Que faire si mon vol est retardé ?   <br/>   <br/>
                            N'ayez aucune inquiétude ! Nos chauffeurs sont tous équipés d'une application qui les informe en temps réel de l'état du trafic aérien. Ils seront là au bon moment pour vous accueillir en toute sérénité.

                            <br/>   <br/>Dois-je donner un pourboire au chauffeur ?   <br/>   <br/>
                            Vous n'êtes pas obligé de donner un pourboire au chauffeur. Il est laissé à votre entière appréciation.</p>  
             </div>
        </div>
     </div>
    <?php

$this-> affichFooter();
}

public function affichInscription() {
    $this->entetePage("Inscription");
?>
<body>
<?php
$this-> affichMenu();
    ?>
    <form action="" method="post">
    <div class="container inscription">
      <h1>Inscription</h1>
      <p>Veuillez remplir ce formulaire pour crerer votre compte.</p>
      <hr>
  
      <label for="fname"><b>Prénom</b></label>
      <input type="text" placeholder="Entrez prénom" name="fname" id="fname" required>
  
      <label for="lname"><b>Nom</b></label>
      <input type="text" placeholder="Entrez nom" name="lname" id="lname" required>
  
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Entrez email" name="email" id="email" required>
  
      <label for="phone"><b>Téléphone</b></label>
      <input type="text" placeholder="Entrez numéro de téléphone '05-45-67-17-27' "name="phone" id="phone" required>
      
      <label for="adress"><b>Adresse</b></label>
      <input type="text" placeholder="Entrez adresse" name="adress" id="adress" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br/>
  
      <h6>Voulez vous devenir un transporteur chez nous ?</h6>
      <input type="radio" name="radioTrans" id="1" value="1" class ="radioTrans" required>
      <label for="1"><b>Oui</b></label>
      <input type="radio" name="radioTrans" id="0" value="0"  class ="radioTrans" required >
      <label for="0"><b>Non</b></label>
  

        <!---Formulaire d'un transporteur--->
        <hr>
                    <div class="container inscription padding" id="transDivInscr">
                        <h4 class="text-center"> Plus que  quelques étapes encore !</h4>
                        <h6 class="text-center" style="margin-bottom:  2.5rem;"> Veuillez entrez les wilayas que vous comptez desservir.</h6>
                        <div class="row padding"  id="inscriptionTrans">

                               <!-- <label for="depart"><b>Départ :</b></label>
                                <input type="number"  min="1"max="48" placeholder="1" name="depart" id="depart-0" required>

                                <label for="arrivee"><b>Arrivée :</b></label>
                                <input type="number"  min="1"max="48" placeholder="1" name="arrivee" id="arrivee-0" required> -->
                        </div>
                        <button id="btnTrajet" type="button" class="btn btn-outline-secondary" style="font-size :1.4rem;"><b>+</b></button>
                        <h6 class="text-center" style="margin-bottom: .5rem;"> Voulez vous devenir un transporteur certifié ?</h6>
                                <input type="radio" name="radioTransCertif" id="1" value="1" class ="radioTransCertif" required>
                                <label for="1"><b>Oui</b></label>
                                <input type="radio" name="radioTransCertif" id="0" value="0"  class ="radioTransCertif" required >
                                <label for="0"><b>Non</b></label>
                    </div>

      <hr>
      <button type="submit" class="registerbtn">S'inscrire</button>
    </div>
    
    <div class="container signin">
      <p>Vous avez déja un compte ? <a href="./index.php?titre=Seconnecter">Connectez-vous.</a>.</p>
    </div>
  </form>


 </body>
</html>

  <?php
    $this-> affichFooter();
}
}