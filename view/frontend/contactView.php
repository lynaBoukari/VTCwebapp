<?php
require_once('./controller/frontend.php');
require_once('./view/frontend/frontend.php');

class contact_view {

public function affichContact(){
    
    $vf = new front_view();
    $c=new front_controller();
    $vf->entetePage("Contact");
    ?>

<body>

    <?php
$vf-> affichMenu();
    ?>

    <div class=" container-fluid padding">
        <div class="row">
            <img id="imagePresentation" class="img-fluid" src="./public/images/diapo1.jpg" alt="VTC Company">
        </div>
        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez nous</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Vous avez des questions ? N'hesitez pas à nous contacter
                directement. Notre équipe s'occupera de vous trés prochainement.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <label for="name" class="">Votre nom</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control" required>
                                    <label for="email" class="">Votre email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                    <label for="subject" class="">Objet/ Sujet</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2"
                                        class="form-control md-textarea" required></textarea>
                                    <label for="message">Votre message </label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" name="submitContact" type="submit">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
                <?php
        $contacts = $c->contact();
        foreach ($contacts as $contact){
        echo '  
        <!--Grid column-->
        <div class="col-md-3 text-center padding">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>'.$contact['adress'].'</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>'.$contact['phone'].'</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>'.$contact['email'].'</p>
                </li>
            </ul>
        </div>
' ;
        
        }
        ?>
                <!--Grid column-->

            </div>

        </section>
    </div>
    <!--Section: Contact v.2-->

    <?php
if(isset( $_POST['submitContact'])) {
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient =$contacts[1]['email'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email envoyé!";
}

 $vf-> affichFooter();
}


}