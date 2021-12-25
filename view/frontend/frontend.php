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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
             <button type="button" class=" btn btn-primary nav-link"  onclick="document.getElementById('Loginmodal').style.display='block'" >Se connecter</button>
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
   }