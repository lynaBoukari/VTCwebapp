<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class inscription_view {



public function affichInscription() {
    $vf = new front_view();
    $vf->entetePage("Inscription");
?>

<body>
    <?php
$vf-> affichMenu();
    ?>
    <form action="" method="post">
        <div class="container inscription">
            <h1>Inscription</h1>
            <p>Veuillez remplir ce formulaire pour créer votre compte.</p>
            <hr>

            <label for="fname"><b>Prénom</b></label>
            <input type="text" placeholder="Entrez prénom" name="fname" id="fname" required>

            <label for="lname"><b>Nom</b></label>
            <input type="text" placeholder="Entrez nom" name="lname" id="lname" required>

            <label for="lname"><b>Username</b></label>
            <input type="text" placeholder="Username 'john@doe103@@$' " name="username" id="username" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Entrez email" name="email" id="email" required>

            <label for="phone"><b>Téléphone</b></label>
            <input type="text" placeholder="Entrez numéro de téléphone '05-45-67-17-27' " name="phone" id="phone"
                required>

            <label for="adress"><b>Adresse</b></label>
            <input type="text" placeholder="Entrez adresse" name="adress" id="adress" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required><br />

            <h6>Voulez vous devenir un transporteur chez nous ?</h6>
            <input type="radio" name="radioTrans" id="1" value="1" class="radioTrans" required>
            <label for="1"><b>Oui</b></label>
            <input type="radio" name="radioTrans" id="0" value="0" class="radioTrans" required>
            <label for="0"><b>Non</b></label>


            <!---Formulaire d'un transporteur--->
            <hr>
            <div class="container inscription padding" id="transDivInscr">
                <h4 class="text-center"> Plus que quelques étapes encore !</h4>
                <h6 class="text-center" style="margin-bottom:  2.5rem;"> Veuillez entrez les wilayas que vous comptez
                    desservir.</h6>

                <div class="row padding" id="inscriptionTrans">
                </div>

                <button id="btnTrajet" type="button" class="btn btn-outline-secondary"style="font-size :1.4rem;"><b>+</b></button>

                <h6 class="text-center" style="margin-bottom: .5rem;"> Voulez vous devenir un transporteur certifié ?
                </h6>
                <input type="radio" name="radioTransCertif" id="1" value="'1'" class="radioTransCertif">
                <label for="1"><b>Oui</b></label>
                <input type="radio" name="radioTransCertif" id="0" value="'0'" class="radioTransCertif">
                <label for="0"><b>Non</b></label>
            </div>

            <hr>
            <button type="submit" class="registerbtn" name="submit">S'inscrire</button>
        </div>

        <div class="container signin">
            <a onclick="document.getElementById('Loginmodal').style.display='block'">
                <p>Vous avez déja un compte ? </p> <u> Connectez-vous. </u>
            </a>
        </div>
    </form>


</body>

</html>

<?php
  $c=new front_controller();
   if(isset($_POST['submit'])){
       if(isset($_POST['depart'])){
         
  $r=  $c->inscriptionComplete($_POST['username'],$_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['password'],$_POST['phone'],$_POST['adress'],$_POST['radioTrans'],$_POST['depart'],$_POST['arrivee']);
    
     }
      else{
            $r=$c->inscription($_POST['username'],$_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['password'],$_POST['phone'],$_POST['adress'],$_POST['radioTrans']);
     
        }
  
  if($r){
            ?>
<script>
alert(
    "\n \n MERCI DE NOUS AVOIR REJOINT <?php  echo $_POST['username']?> ! \n \n Votre inscription a bien été enregistrée."
    );
</script>
<?php
        }else{
            ?>
<script>
alert("\n \n ERREUR ! \n \n Veuillez réesseyer un autre email ou username.");
</script>
<?php
        }}

    $vf-> affichFooter();
}

}