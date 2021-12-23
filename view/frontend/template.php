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

  <?= $content ?>
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
          </div>
          </div>
  </footer>
    </body>
</html>