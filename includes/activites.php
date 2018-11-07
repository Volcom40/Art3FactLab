<section id="Activites" class="container-bg<?=$sectionID?>">
    <?php
    if($admin) {
    ?>
        <div class="container-fluid">
            <div class="col-lg-12 text-right">
                <button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#ChangeBackground<?=$sectionID?>">Modifier image background</button>
            </div>
        </div>   
    <?php
    }
    ?>
    <div class="container"> 
        <div class="row justify-content-center mb-5">
            <?php
            $zone = "activites";
            $texte = getTitres($zone);
            ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 col-12 text-center">
                <h3><?=$texte["titre"]?></h3>
                <h6 class="mb-5"><?=$texte["titreSecondaire"]?></h6>
                <?php 
                if($admin){
                ?>
                <button class="btn btn-success btn-sm m-3" type="button" data-toggle="modal" data-target="#titreactivites">Modifier texte</button>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
            if($admin){
            ?>
            <!-- Section ajouter une activité' -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="activite-container">
                    <!-- le header d'une activité contient uniquement une image -->
                    <div class="activite-header text-center">
                        <a data-toggle="modal" data-target="#ActiviteAddModal">
                            <img src="img/admin/add.png" class="activite-img">
                        </a>
                    </div>
                    <!-- le activite-caption contient les autres éléments d'une activité (nom et description) -->
                    <div class="activite-caption text-center">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ActiviteAddModal">Ajouter une activité</button>
                    </div>
                </div>
            </div>
            <!-- Fin de la section ajouter une activité' -->
            <?php
            }
            ?>
            <?php
            $activites = getAllActivites();
            foreach ($activites as $key => $value) {
            $image = "img/activites/" . $value["image"];
            $nom = $value["nom"];
            ?>
            <!-- Début d'une activité' -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="activite-container">
                    <!-- le header d'une activité contient uniquement une image -->
                    <div class="activite-header text-center">
                        <img src="<?=$image?>" class="activite-img">
                    </div>
                    <!-- le activite-caption contient les autres éléments d'une activité (nom et description) -->
                    <div class="activite-caption text-center">
                        <h6 class="text-dark"><?=$nom?></h6>
                        <?php 
                        if($admin){
                        ?>
                        <form action="script/supprActivite.php" method="POST">
                            <input type="hidden" name="id" value="<?=$value["id"]?>">
                            <input type="hidden" name="nom" value="<?=$image?>">
                            <?php
                                $text = "Etes vous sur de vouloir supprimer l'activite '". $nom."' ?";
                            ?>
                            <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm m-1" value="Delete Activité">Supprimer</button>
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                    
                </div>
            </div>
            <!-- Fin d'une activité' -->
            <?php
            }
            ?>
        </div>
    </div>
    <?php
        if($admin){
        include "includes/modaux/modalBackground.php";
        include "includes/modaux/modalTitres.php";
        include "includes/modaux/modalActivite.php";
        }
    ?>
</section>