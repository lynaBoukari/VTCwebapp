<?php
require_once('./controller/backend.php');
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');
/***
 * 
 * 
 * cette classe a pour but d'afficher la liste des client et les trier a partir du dashboard 
 */
class gestClient_view {

public function gestClient() {
    $c = new Back_controller();
    $clients = $c->getClientFiltred();
   
   
    ?>
<div class="container-fluid padding">
 <!--<div class="row">
    <form method="post">
        <div class="form-row align-items-center">
            <h6>Filter les client par :</h6>
            <div class="col-auto">

                <select class="custom-select my-1 " id="inlineFormCustomSelectPref" name="filtreClient" required>
                    <option selected value="username">Username</option>
                    <option value="fname">Prenom</option>
                    <option value="lname">Nom</option>
                    <option value="email">Email</option>
                    <option value="phone">Telephone</option>
                </select>
            </div>
            <div class="col-auto">

                <input type="text" class="form-control" name="filtreClientValue" placeholder="john@doe" id="inputFiltre"
                    required></input>
            </div>
            <div class="col-auto">

                <button type="submit" class="btn btn-primary mb-2" name="filtrerClient">Filtrer <i class="fa fa-filter"
                        aria-hidden="true"></i></button>
            </div>
        </div>
    </form>
    <form method="post" >
     <div class="form-row align-items-center">
    <div class="col-auto">
    <button type="submit" class="btn "name="resetFiltreClient" style="margin-left: 3rem"><i class="fa fa-undo fa-lg" aria-hidden="true"></i></button>
    </div>
    </div>
</form>
</div> -->
    <div class="row">
        <div class="col col-md-12">
            <center>
                <table class="table table-striped tableUsers" id="dtBasicExample">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Client</th>
                            <th>Username</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Addresse</th>
                            <th>Bannis</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
     
          if($clients!=null) {
        foreach ($clients as $row) {

      echo '
                     
                            <tr>
                            <td>'.$row['idUser'].'</td>
                            <td>'.$row['username'].'</td>
                            <td>'.$row['fname'].'</td>
                            <td>'.$row['lname'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['phone'].'</td>
                            <td>'.$row['adress'].'</td>
                            <td>'.$row['ban'].'</td>
                            <td><a href="./dashboard.php?title=profileClient&id='.$row['idUser'].'&trans=0"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></td>
                           
                        </tr>
                        ';
                    } } 
                        ?>

                    </tbody>
                </table>
                
            </center>
        </div>
    </div>
</div>


<?php
}

public function affichGestClient() {
    $vf=new front_view();
    $vf->entetePage("Gestion des clients");
    $vf-> affichMenu();
    ?>

<body>

    <?php
    $this->gestClient();

   $vf-> affichFooter();
   ?>
</body>

</html>
<?php
        }

}