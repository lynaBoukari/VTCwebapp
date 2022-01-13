<?php
require_once('./controller/backend.php');
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class gestTrans_view {

public function gestTrans() {
    $c = new Back_controller();
    $clients = $c->getTransFiltred();
    $cf=new front_controller();
 
    ?>
    <div class="container-fluid padding">
    <div class="row">
        <form method="post">
            <div class="form-row align-items-center">
                <h6>Filter les client par :</h6>
                <div class="col-auto">
    
                    <select class="custom-select my-1 " id="inlineFormCustomSelectPref" name="filtreTrans" required>
                        <option selected value="username">Username</option>
                        <option value="fname">Prenom</option>
                        <option value="lname">Nom</option>
                        <option value="email">Email</option>
                        <option value="phone">Telephone</option>
                        <option value="ban">Bannis</option>
                        <option value="inscription">Inscription</option>
                    </select>
                </div>
                <div class="col-auto">
    
                    <input type="text" class="form-control" name="filtreClientValue" placeholder="john@doe" id="inputFiltre"
                        required></input>
                </div>
                <div class="col-auto">
    
                    <button type="submit" class="btn btn-primary mb-2" name="filtrerTrans">Filtrer <i class="fa fa-filter"
                            aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
        <form method="post" >
         <div class="form-row align-items-center">
        <div class="col-auto">
        <button type="submit" class="btn "name="resetFiltreTrans" style="margin-left: 3rem"><i class="fa fa-undo fa-lg" aria-hidden="true"></i></button>
        </div>
        </div>
    </form>
    </div>
        <div class="row">
            <div class="col col-md-12">
                <center>
                    <table class="table table-striped tableUsers">
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
                                <th>Inscription</th>
                                <th>Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
         
              if($clients!=null) {
            foreach ($clients as $row) {
                $infoT=$cf->transProfile_info($row['idUser']);
                foreach ($infoT as $rowT) {
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
                                <td>'.$rowT['inscription'].'</td>
                                <td><a href="./dashboard.php?title=profileClient&id='.$row['idUser'].'&trans=1"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></td>
                               
                            </tr>
                            ';
                        } } }
                            ?>
    
                        </tbody>
                    </table>
                    
                </center>
            </div>
        </div>
    </div>
    
    
    <?php

}

public function affichGestTrans() {
    $vf=new front_view();
    $vf->entetePage("Gestion des transporteurs");
    $vf-> affichMenu();
    ?>

<body>

    <?php
    $this->gestTrans();

   $vf-> affichFooter();
   ?>
</body>

</html>
<?php
        }


}