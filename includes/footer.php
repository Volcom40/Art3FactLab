<footer id="Footer" class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-3 mt-4 text-center">
                <!-- Titre Footer1 -->
                <?php
                $zone = "footer1";
                $texte = getTitres($zone);
                ?>
                <?php
                if($admin){
                ?>
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#titreFooter1">Modifier titre</button>
                <?php
                }
                ?>
                <h5 class="font-weight-bold text-uppercase mb-5"><?=$texte["titre"]?></h5>
                <!-- Fin Titre Footer1 -->
                <?php
                if($admin){
                ?>
                <a href="" target="_blank" data-toggle="modal" data-target="#informationsAddModal" class="text-uppercase font-weight-bold"><p>Ajouter une information</p></a>
                <?php
                }
                ?>
                <!-- Début de toutes les informations à gauche dans le footer -->
                <?php
                $informations = getAllInformations();
                foreach ($informations as $key => $value) {
                $texte = $value["texte"];
                ?>
                <p><?=$texte?></p>
                <?php
                if($admin){
                ?>
                <form action="script/supprInformations.php" method="POST">
                    <input type="hidden" name="id" value="<?=$value["id"]?>">
                    <input type="hidden" name="nom" value="<?=$texte?>">
                    <?php
                        $text = "Etes vous sur de vouloir supprimer le réseau social '". $texte."' ?";
                    ?>
                    <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm m-0" value="Delete Information">X</button>
                </form>
                <?php
                }
                ?>
                <?php
                }
                ?>
                <!-- Fin de toutes les informations à gauche du footer -->
            </div>
            <div class="col-md-4 col-lg-3 mt-4 text-center">
                <!-- Titre Footer2 -->
                <?php
                $zone = "footer2";
                $texte = getTitres($zone);
                ?>
                <?php
                if($admin){
                ?>
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#titreFooter2">Modifier titre</button>
                <?php
                }
                ?>
                <h5 class="font-weight-bold text-uppercase mb-5"><?=$texte["titre"]?></h5>
                <!-- Fin Titre Footer2 -->
                <?php
                if($admin){
                ?>
                <a href="" target="_blank" data-toggle="modal" data-target="#reseausocialAddModal" class="text-uppercase font-weight-bold"><p>Ajouter un réseau social</p></a>
                <?php
                }
                ?>
                <!-- Début d'un réseau social -->
                <?php
                $documents = getAllRs();
                foreach ($documents as $key => $value) {
                $nom = $value["nom"];
                $lien = $value["lien"];
                ?>
                <a href="<?=$lien?>" target="_blank"><p><?=$nom?></p></a>
                <?php 
                if($admin){
                ?>
                <form action="script/supprreseausocial.php" method="POST">
                    <input type="hidden" name="id" value="<?=$value["id"]?>">
                    <input type="hidden" name="nom" value="<?=$nom?>">
                    <?php
                        $text = "Etes vous sur de vouloir supprimer le réseau social '". $nom."' ?";
                    ?>
                    <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm m-0" value="Delete RS">X</button>
                </form>
                <?php
                }
                ?>
                <?php
                }
                ?>
                <!-- Fin d'un réseau social -->
            </div>
            <div class="col-md-4 col-lg-3 mt-4 text-center">
                <!-- Titre Footer3 -->
                <?php
                $zone = "footer3";
                $texte = getTitres($zone);
                ?>
                <!-- Titre Footer3 -->
                <?php
                if($admin){
                ?>
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#titreFooter3">Modifier titre</button>
                <?php
                }
                ?>
                <h5 class="font-weight-bold text-uppercase mb-5"><?=$texte["titre"]?></h5>
                <?php
                if($admin){
                ?>
                <a href="" target="_blank" data-toggle="modal" data-target="#documentAddModal" class="text-uppercase font-weight-bold"><p>Ajouter un document</p></a>
                
                <?php
                }
                ?>
                <!-- Début d'un document -->
                <?php
                $documents = getAllDocuments();
                foreach ($documents as $key => $value) {
                $repertoire = "docs/" . $value["document"];
                $nom = $value["nom"];
                ?>
                <a href="<?=$repertoire?>" target="_blank"><p><?=$nom?></p></a>
                <?php 
                if($admin){
                ?>
                <form action="script/supprDocument.php" method="POST">
                    <input type="hidden" name="id" value="<?=$value["id"]?>">
                    <input type="hidden" name="nom" value="<?=$nom?>">
                    <?php
                        $text = "Etes vous sur de vouloir supprimer le document '". $nom."' ?";
                    ?>
                    <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm m-0" value="Delete Document">X</button>
                </form>
                <?php
                }
                ?>
                <?php
                }
                ?>
                <!-- Fin d'un document -->
            </div>
            <div class="col-md-11 col-lg-11 mt-4 mb-4 text-center">
                <hr>
                <p>Revenir en haut en cliquant sur la flêche</p>
                <a class="js-scroll-trigger" href="#Accueil">
                    <img src="img/footer/haut.png" class="img-footer" width="30rem">
                </a>
            </div>
            <?php
            if($admin){
            ?>
            <div class="col-md-11 col-lg-11 mt-4 mb-4 text-center">
                <hr>
                <p class="text-uppercase font-weight-bold"><a href="#" data-toggle="modal" data-target="#modifPass">Changer de mot de passe</a></p>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="footer-copyright text-center py-4">
        <!-- Texte du footer-copyright -->
        <?php
        $zone = "footer4";
        $texte = getTitres($zone);
        ?>
        <?php
        if($admin){
        ?>
        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#titreFooter4">Modifier titre</button>
        <?php
        }
        ?>
        <h6 class="font-weight-bold text-uppercase"><?=$texte["titre"]?></h6>
        <!-- Fin du texte du footer-copyright -->
    </div>
    <?php
    if($admin){
        include "includes/modaux/modalFooter.php";
    }
    ?>
</footer>