<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>inscription</title>
        <script src="./public/js/jquery-3.6.0.js"></script>    
        <link href="./public/css/style.css" rel="stylesheet" type="text/css"/> 
   
     
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
    <input type="text" placeholder="Entrez numéro de téléphone" name="phone" id="phone" required>

    <label for="adress"><b>Adresse</b></label>
    <input type="text" placeholder="Entrez adresse" name="adress" id="adress" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br/>

    <h6>Voulez vous devenir un transporteur chez nous ?</h6>
    <input type="radio" name="1" id="1" value="1">
    <label for="1"><b>Oui</b></label>
    <input type="radio" name="0" id="0" value="0">
    <label for="0"><b>Non</b></label>

    <hr>
    <button type="submit" class="registerbtn">S'inscrire</button>
  </div>
  
  <div class="container signin">
    <p>Vous avez déja un compte ? <a href="#">Connectez-vous.</a>.</p>
  </div>
</form>

</body>
</html>
