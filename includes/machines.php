<section id="Accueil" class="container-bg<?=$sectionID?>">
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
        <div class="row">
            <!-- On récupère dynamiquement le titre et le titre secondaire dans la base de données -->
            <?php
            $zone = "machines";
            $texte = getTitres($zone);
            ?>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-11 text-left">
                <h3><?=$texte["titre"]?></h3>
                <p><?=$texte["titreSecondaire"]?></p>
                <?php 
                if($admin){
                ?>
                <button class="btn btn-success btn-sm m-3" type="button" data-toggle="modal" data-target="#titremachines">Modifier texte</button>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-12">
                <hr>
            </div>
        </div>
        <?php 
        if($admin){
        ?>
        <!-- Début de l'ajout d'une machine -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-xl-4 col-lg-4 col-md-8">
                <a data-toggle="modal" data-target="#MachineAddModal">
                    <div class="img-machine-bg p-4">
                        <img src="img/admin/add.png" class="img-machine">
                    </div>
                </a>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="img-machine-desc-bg text-left">
                    <div class="img-machine-desc-header p-1">
                        <h6 class="font-weight-bold"><h6>
                    </div>
                    <div class="img-machine-desc-body p-1">
                    </div>
                    <div class="img-machine-desc-footer">
                        <a class="btn btn-primary btn-sm m-1" href="" data-toggle="modal" data-target="#MachineAddModal" target="_blank" role="button">Ajouter une machine</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de l'ajout d'une machine-->
        <?php
        }
        ?>
        <!-- Début d'une machine -->
        <?php
        $machines = getAllMachines();
        foreach ($machines as $key => $value) {
        $image = "img/machines/" . $value["image"];
        $nom = $value["nom"];
        $description = $value["description"];
        $lien = $value["lien"];
        ?>
        <div class="row justify-content-center text-center mb-5">
            <div class="col-xl-4 col-lg-4 col-md-8">
                <div class="img-machine-bg p-4">
                    <img src="<?=$image?>" class="img-machine">
                    <?php 
                    if($admin){
                    ?>
                    <form action="script/supprMachine.php" method="POST">
                        <input type="hidden" name="id" value="<?=$value["id"]?>">
                        <input type="hidden" name="nom" value="<?=$image?>">
                        <?php
                            $text = "Etes vous sur de vouloir supprimer cette machine ?";
                        ?>
                        <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm m-1" value="Delete Projet">Supprimer</button>
                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="img-machine-desc-bg text-left">
                    <div class="img-machine-desc-header p-1">
                        <h6 class="text-uppercase font-weight-bold"><?=$nom?><h6>
                    </div>
                    <div class="img-machine-desc-body p-1">
                        <p class="mb-3"><u>Description du matériel :</u><p>
                        <p><?=$description?></p>
                    </div>
                    <div class="img-machine-desc-footer">
                    <?php
                    //Boucle qui permet d'ajouter le boutton bleu "en savoir plus" en bas d'un projet
                    $lien = $value["lien"];
                    if(empty($lien)) {
                        echo '<button type="button" class="btn btn-sm btn-secondary m-1" disabled>En savoir plus...</button>';
                        } else{
                        echo '<a class="btn btn-info btn-sm m-1" href="' . $lien . '" target="_blank" role="button">En savoir plus...</a>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <!-- Fin d'une machine-->
    </div>
    <?php
    if($admin){
        include "includes/modaux/modalMachine.php";
        include "includes/modaux/modalTitres.php";
    }
    ?>
</section>