<?php
require_once('./controller/backend.php');
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class gestAnnon_view {

public function gestAnnonce() {
    $c = new Back_controller();
    $annonce= $c->getAnnonceFiltred();
    $cf=new front_controller();
 
    ?>
<div class="container-fluid padding">
    <div class="row padding">
        <form method="post">
            <div class="form-row align-items-center">
                <h6>Filter les client par :</h6>
                <div class="col-auto">

                    <select class="custom-select my-1 " id="inlineFormCustomSelectPref" name="filtreAnnonce" required>
                        <option selected value="username">Username</option>
                        <option value="fname">Prenom</option>
                        <option value="lname">Nom</option>
                        <option value="email">Email</option>
                        <option value="phone">Telephone</option>
                        <option value="ban">Bannis / Non bannis</option>
                        <option value="user">Client / Transporteur</option>
                        <option value="archive">Annonce archivée (oui/non)</option>
                        <option value="valide">Annonce validée (oui/non)</option>
                        <option value="status">Statut Annonce (enCours / Terminee)</option>
                    </select>
                </div>
                <div class="col-auto">

                    <input type="text" class="form-control" name="filtreAnnonceValue" placeholder="john@doe"
                        id="inputFiltre" required></input>
                </div>
                <div class="col-auto">

                <select class="custom-select my-1 " id="inlineFormCustomSelectPref" name="trierAnnonce" required>
                <option selected value="DESC">Plus récentes</option>
                        <option value="ASC">Plus anciennes</option>
                </select>
                </div>
                <div class="col-auto">

                    <button type="submit" class="btn btn-primary mb-2" name="filtrerAnnonce">Filtrer <i
                            class="fa fa-filter" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
        <form method="post">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <button type="submit" class="btn " name="resetFiltreAnnonce" style="margin-left: 3rem"><i
                            class="fa fa-undo fa-lg" aria-hidden="true"></i></button>
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
                            <th>Nom & Prénom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Client / Transporteur</th>
                            <th>Bannis</th>
                            <th>Titre annonce</th>
                            <th>Description annonce</th>
                            <th>Date d'annonce</th>
                            <th>Détails annonce</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
         
              if($annonce!=null) {
            foreach ($annonce as $row) {
                $user="Client" ;
             if($row['isTransporter']=='1'){
                 $user="Transporteur" ;
             }
          echo '
                         
                                <tr>
                                <td>'.$row['idUser'].'</td>
                                <td>'.$row['username'].'</td>
                                <td>'.$row['fname'].' '.$row['lname'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td>'.$user.'</td>
                                <td>'.$row['ban'].'</td>
                                <td>'.$row['titre'].'</td>
                                <td>'.$row['description'].'</td>
                                <td>'.$row['date'].'</td>
                                <td><a href="./index.php?titre=DetailsAnnonce&id='.$row['idAnnonce'].'"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></td>
                               
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

public function affichGestTrans() {
    $vf=new front_view();
    $vf->entetePage("Gestion des annonces");
    $vf-> affichMenu();
    ?>

<body>

    <?php
    $this->gestAnnonce();

   $vf-> affichFooter();
   ?>
</body>

</html>
<?php
        }


}