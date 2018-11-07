<section id="Partenaires" class="container-bg<?=$sectionID?>">
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
    <div class="container"> 
        <div class="row justify-content-center mb-5">
            <!-- Titre de cette section -->
            <?php
            $zone = "partenaires";
            $texte = getTitres($zone);
            ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 col-12 text-center">
                <h3><?=$texte["titre"]?></h3>
                <p><?=$texte["titreSecondaire"]?></p>
                <?php 
                if($admin){
                ?>
                <button class="btn btn-success btn-sm m-3" type="button" data-toggle="modal" data-target="#titrepartenaires">Modifier texte</button>
                <?php
                }
                ?>
            </div>
            <!-- Fin du titre de cette section -->
        </div>

        <div class="row justify-content-center">
            <?php 
            if($admin){
            ?>
            <!-- Début de l'ajout d'un partenaire -->
            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-2 col-3">
                <div class="partenaire-container text-center">
                    <!-- le header d'un partenaire contient uniquement une image -->
                    <a target="_blank" data-toggle="modal" data-target="#partenaireAddModal">
                        <div class="partenaire-header text-center">
                            <img src="img/admin/add.png" class="partenaire-img">
                        </div>
                    </a>
                    <a class="btn btn-primary btn-sm mt-1 mb-2" href="" data-toggle="modal" data-target="#partenaireAddModal" target="_blank" role="button">Ajouter</a>
                </div>
            </div>
            <!-- Fin de l'ajout d'un partenaire' -->
            <?php
            }
            ?>
            <?php
            $projets = getAllPartenaires();
            foreach ($projets as $key => $value) {
            $image = "img/partenaires/" . $value["image"];
            $lien = $value["lien"];
            ?>
            <!-- Début d'un partenaire -->
            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-2 col-3">
                <div class="partenaire-container">
                    <!-- le header d'un partenaire contient uniquement une image -->
                    <?php
                    $lien = $value["lien"];
                    if(empty($lien)) {
                        echo '<a>';
                        } else{
                        echo '<a href="' . $lien . '" target="_blank">';
                    }
                    ?>
                        <div class="partenaire-header text-center">
                            <img src="<?=$image?>" class="partenaire-img">
                        </div>
                    </a>
                    <?php 
                    if($admin){
                    ?>
                    <form action="script/supprPartenaire.php" class="text-center" method="POST">
                        <input type="hidden" name="id" value="<?=$value["id"]?>">
                        <input type="hidden" name="nom" value="<?=$image?>">
                        <?php
                            $text = "Etes vous sur de vouloir supprimer ce partenaire ?";
                        ?>
                        <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm mt-1 mb-2" value="Delete Partenaire">X</button>
                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- Fin d'un partenaire' -->
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    if($admin){

        include "includes/modaux/modalBackground.php";
        include "includes/modaux/modalTitres.php";
        include "includes/modaux/modalPartenaires.php";
    }
    ?>
</section>