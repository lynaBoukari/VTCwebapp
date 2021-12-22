<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title><?= $title ?></title>
        <link href="../../public/css/style.css" rel="stylesheet" /> 
   
        <script src="../../public/js/jquery-3.6.0.js"></script>    
    </head>
        
    <body>
       <!--Navigation BAR-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top"> 
    <div class="container-fluid">
 <a class="navbar-brand" href="#"> <img src="../../public/images/vtcLogo.png" alt="Logo" style="width:100% ; height: 30px;"></a>
 <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" >
     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
             <li class="nav-item active ">
                 <a class="nav-link" href="#">Acceuil</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Présentation</a>
             </li> <li class="nav-item">
                 <a class="nav-link" href="#">News</a>
             </li> <li class="nav-item">
                 <a class="nav-link" href="#">Statistiques</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Contact</a>
             </li>
             <li class="nav-item">
             <a type="button" class=" btn btn-primary nav-link" href="#">Se connecter</a>
             </li>
             <li class="nav-item">
                 <a type="button" class=" btn btn-primary nav-link" href="#">S'inscrire</a>
             </li>
            </ul>
         </div>
    </div>
</nav>
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
           <img src="../../public/images/diapo1.jpg" alt="Transport">
           </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.tranfal.com">
           <img src="../../public/images/diapo2.jpg" alt="Transport">
           </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.dhlexpress.fr/actualites/covid-19-dhl-express-continue-d-assurer-ses-operations">
           <img src="../../public/images/diapo3.jpg" alt="Transport">
           </a>
        </div>
    </div>
    </div>
<!--- formulaire de recherche--->

<div class="container-fluid padding" >
    <div class="row">
      <h6> Veuillez spécifer les informations de recherche d'annonces :</h6>
    </div>
<form class="form-inline">

  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Départ :</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
  
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
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
  
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

  <button type="submit" class="btn btn-primary my-1">Recherche</button>
</form>
</div>
<!------ Cadres d'affichages------>

<div class="container-fluid padding">


<!------ Premiere ligne de cadres d'affichages avec 4 cadres------>
    <div class="row padding">
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="../../public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="../../public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="../../public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="../../public/images/colis.png" alt="Annonce image"></img>
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
                    <img class="card-img-top" src="../../public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="../../public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="../../public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="../../public/images/colis.png" alt="Annonce image"></img>
                    <div class="card-body">
                       <h4 class="card-title"> Titre annonce </h4>
                       <p class="card-text"> annonce de recherche d'une livraison pour un colis fragile...</p>
                       <a href="#" class="btn btn-outline-secondary">Voir la suite</a>
                    </div>
            </div>
        </div>
        
    </div>
</div>
<!---- Bouton comment cela fonctionne ---->
<div class="container-fluid padding">
   <div class="row text-center justify-content-center">
   <a href="#" class="btn btn-primary">Comment cela fonctionne ?</a>
   </div>
</div>
  <!--- The footer --->
  <footer>
      <div class="container-fluid padding">
          <div class="row text-center">
              <div class="col-md-4">
                  <img src="../../public/images/vtcLogo.png" alt="Logo" style="width:30% ; " >
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
                  <a  href="#">Acceuil</a> <br />
                  <a  href="#">Présentation</a> <br />
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
    </body>
</html>