<section id="Contact" class="container-bg<?=$sectionID?>">
    <?php
    if($admin) {
    ?>
        <div class="container-fluid">
            <div class="col-lg-12 text-right">
                <button class="btn btn-warning btn-sm mb-5 mr-5" type="button" data-toggle="modal" data-target="#ChangeBackground<?=$sectionID?>">Modifier image background</button>
            </div>
        </div>

            
    <?php
    }
    ?>
    <div class="container-fluid">
        <div class="contact-form">
            <!-- Titre de cette section  -->
            <?php
            $zone = "contact";
            $texte = getTitres($zone);
            ?>
            <div class="row justify-content-center text-center mt-2">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                    <img src="img/contact/contact.png" class="contact-image" width="150rem">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-11">
                    <h3><?=$texte["titre"]?></h3>
                    <p><?=$texte["titreSecondaire"]?></p>
                    <?php 
                    if($admin){
                    ?>
                    <button class="btn btn-success btn-sm m-3" type="button" data-toggle="modal" data-target="#titrecontact">Modifier texte</button>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- Fin du titre de cette section -->
            <hr class="col-xl-8 col-lg-11 col-md-10 col-sm-10 col-10 mb-5">
            <!-- Formulaire de contact -->
            <form method="POST" action="modules/sendmail.php">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-11 col-11">
                        <div class="form-group">
                            <input type="text" name="txtName" id="name" class="form-control" placeholder="Votre nom *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" id="email" class="form-control" placeholder="Votre adresse mail *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" id="phone" class="form-control" placeholder="Votre numéro de téléphone *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" id="sendMessageButton" name="btnSubmit" class="btn btn-info btn-md" value="Envoyer" />
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-11 col-11">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Votre message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Fin du formulaire de contact -->
        </div>
    </div>
    <?php
    if($admin){

        include "includes/modaux/modalBackground.php";
        include "includes/modaux/modalTitres.php";
        include "includes/modaux/modalContact.php";
    }
    ?>
</section>