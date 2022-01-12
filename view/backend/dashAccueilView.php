<?php
require_once('./controller/backend.php');
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class dashAccueil_view {
   public function affichDashboard(){
    $vf=new front_view();
    $vf->entetePage("Dashboard");
    $vf-> affichMenu();
    ?>

<body>

<?php
    

   $vf-> affichFooter();
   ?>
</body>

</html>
<?php
   }
}