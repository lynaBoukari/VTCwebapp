<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class ajouterAnnonce_view {
    public function affichFormAnnonce() {
    ?>
    <form action="" method="post">
    <div class="container inscription">
      <h1>Nouvelle Annonce</h1>
      <p>Veuillez remplir ce formulaire pour ajouter une nouvelle annonce.</p>
      <hr>
  
      <label for="titre"><b>Titre</b></label>
      <input type="text" placeholder="Titre de l'annonce" name="titre" id="titre" required>
  
      <label for="titre"><b>Description</b></label>
      <textarea style="width:100%" cols="80"   rows="4"  placeholder= "Description........" name="description"  required> </textarea>

<!--- Formulaire de choix de wiliaya---->

<label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b>Départ : </b></label>
<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="ajouterWilaya1">

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
<label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b>Arrivée : </b></label>
<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="ajouterWilaya2">

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


<!----- suite des informations ---->
      <label for="image"><b>Image </b></label>
      <input type="text" placeholder="Username 'john@doe103@@$' "  name="image"  >

      <label for="typeTransport"><b>Type de transport </b></label>
      <input type="text" placeholder="Ex : Colis de vetements...." name="typeTransport"  required>
  
      <label for="moyenTransport"><b>Moyen de transport </b></label>
      <input type="text" placeholder="Ex : Camion..." name="moyenTransport" required>
  
      <label for="poidInit"><b>Fourchette de poid (en Kg) &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="number" placeholder="0.5 "name="poidInit"  required  max="100" min="1">
      <label for="poidFinal"><b> - </b></label>
      <input type="number" placeholder="2"name="poidFinal"  required max="100" min="1">
  <p>
      </br>
  </p>
      <label for="volumeInit"><b>Fourchette de volume (en metre cube) &nbsp;&nbsp; </b></label>
      <input type="number" placeholder="0.5"name="volumeInit"  max="100" min="1" required>
      <label for="volumeFinal"><b> - </b></label>
      <input type="number" placeholder="2" name="volumeFinal"  required max="100" min="1">
      <hr>
      <button type="submit" class="registerbtn" name="submitAnnonce">Ajouter</button>
      </div>
     
    </div>
      </form>


 </body>
</html>
<?php
    }

    public function affichAjouterAnnonce(){
     $vf=new front_view();
    $vf->entetePage("Ajouter une annonce");
    $vf-> affichMenu();

    $this->affichFormAnnonce() ;

    if(isset($_POST['submitAnnonce'])){
        $c=new front_controller();
       $msg= $c->ajouterAnnonce($_POST['ajouterWilaya1'],$_POST['ajouterWilaya2'],$_POST['typeTransport'],$_POST['poidInit'],$_POST['poidFinal'],$_POST['volumeInit'],$_POST['volumeFinal'],$_POST['moyenTransport'],$_POST['image'],$_SESSION['id'],$_POST['titre'],$_POST['description']);
       echo $msg;
    }
    $vf-> affichFooter();
    }
}