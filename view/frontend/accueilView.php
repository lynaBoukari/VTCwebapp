<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class accueil_view {


    
  // fonction qui affiche le diaporama de la page d'accueil
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

// fonction qui affiche le formulaire de recherche dans la page d'accueil
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
<?php
    if( isset($_SESSION['valide']) && $_SESSION['valide']=='oui'){
?>
<a class=" btn btn-primary my-1" href="./index.php?titre=ajouterAnnonce" style="margin-left:1rem;">Nouvelle Annonce</a>
<?php
    }
?>
</form>
</div>
<?php
}


// fonction qui affiche les 8 annonces aléatoires à la page d'accueil 
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

// fonction pour afficher le bouton qui mène vers la page presentation 
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

// Remplir les cartes d'annonces avec les resultat de la recherche pour les afficher 
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
                      <a href="./index.php?titre=DetailsAnnonce&id='.$rowfa['idAnnonce'].'" class="btn btn-outline-secondary">Voir la suite</a>
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

// Fonction pour afficher  les resultat de la recherche 
   public function affichResultatsRecherche(){
/*  $this->affichFormRecherche();*/
        if(isset($_POST['submit'])){
           $this->affichAnnonce($_POST['selectWilaya1'], $_POST['selectWilaya2']);
       }
   }
 


   // la main fonction qui affiche toute la page principale la page d'accueil

   public function affichPrincipal(){
       $vf=new front_view();
    $vf->entetePage("Accueil");
    ?>
    <body>
    <?php
   $vf-> affichMenu();
    $this-> affichDiaporama();
    $this-> affichFormRecherche();
    if(!isset($_POST['submit'])) {
    $this-> affichCadre();}
    else{
    $this->affichResultatsRecherche();
    }
    $this-> affichBoutonPresent();
     $vf-> affichFooter();
    ?>
     </body>
    </html>
    
    <?php
     }


}