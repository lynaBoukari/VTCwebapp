<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class login_view {



public function affichLogin() {
    ?>
   <div id="Loginmodal" class="modal">
  
  <form class="modal-content animate" id ="loginForm" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('Loginmodal').style.display='none' " class="close" title="Close Modal">&times;</span>
    <img src="./public/images/avatar.png" alt="Avatar" class="avatar"> 
    </div>

    <div class="container containerLogin">

      <label for="username"><b>Username </b></label>
      <input  placeholder="Entrez username" name="usernameLogin" type="text" required style="width:100%;padding:0.5rem;margin: 0.5rem 0 0.5rem 0; display: inline-block; border:none;background:#f1f1f1; ">

      <label for="password"><b>Mot de passe </b></label>
      <input type="password" placeholder="Entrez mot de passe" name="passwordLogin" required>
        
      <button id ="btnLogin" type="submit" form="loginForm" name="submitLogin">Se connecter</button>
     
    </div>
    <div class="container signin">
      <p>Vous n'avez pas un compte ? </p > <a href="./index.php?titre=Sinscrire"> Inscrivez-vous. </a>
    </div>
    
  </form>
</div>
<?php
$c=new front_controller();
if(isset($_POST['submitLogin'])){
        if(isset($_POST['usernameLogin'])){
            if(isset($_POST['passwordLogin'])){
                $msg= $c->login($_POST['usernameLogin'],$_POST['passwordLogin']) ;
                echo ' <script> 
                alert("\n \n ' .$msg .' ! \n \n ");
                        </script> ';
                ?>
               
                <?php
            }
        }
}

}
}