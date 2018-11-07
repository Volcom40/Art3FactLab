<section id="Equipe" class="container-bg<?=$sectionID?>">
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
            <?php
            $zone = "equipe";
            $texte = getTitres($zone);
            ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 col-12 text-center">
                <h3><?=$texte["titre"]?></h3>
                <p><?=$texte["titreSecondaire"]?></p>
                <?php 
                if($admin){
                ?>
                <button class="btn btn-success btn-sm m-3" type="button" data-toggle="modal" data-target="#titre<?=$zone?>">Modifier texte</button>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
            if($admin){
            ?>
            <!-- Ajout d'un membre' -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="equipe-container">
                    <!-- le header d'un membre contient uniquement une image -->
                    <div class="equipe-header text-center">
                        <a data-toggle="modal" data-target="#equipeAddModal">
                            <img src="img/admin/add.png" class="activite-img">
                        </a>
                    </div>
                    <!-- le equipe-caption contient les autres éléments d'un membre (nom et description) -->
                    <div class="equipe-caption text-center">
                        <a class="btn btn-primary btn-sm m-1" href="" data-toggle="modal" data-target="#equipeAddModal"target="_blank" role="button">Ajouter un membre</a>
                    </div>
                </div>
            </div>
            <!-- Fin ajout d'un membre' -->
            <?php
            }
            ?>
            <?php
            $activites = getAllMembre();
            foreach ($activites as $key => $value) {
            $image = "img/equipe/" . $value["image"];
            $nom = $value["nom"];
            $description = $value["description"];
            ?>
            <!-- Début d'un membre' -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="equipe-container">
                    <!-- le header d'un membre contient uniquement une image -->
                    <div class="equipe-header text-center">
                        <img src="<?=$image?>" class="activite-img">
                    </div>
                    <!-- le equipe-caption contient les autres éléments d'un membre (nom et description) -->
                    <div class="equipe-caption text-center">
                            <?php
                            $nom = $value["nom"];
                            $description = $value["description"];
                            if(empty($description)) {
                                echo '<blockquote class="blockquote">';
                                echo '<p class="mb-0">' . $nom . '</p>';
                                echo '</blockquote>';
                                } else{
                                echo '<blockquote class="blockquote">';
                                echo '<p class="mb-0">' . $nom . '</p>';
                                echo '<footer class="blockquote-footer">' . $description . '</footer>';
                                echo '</blockquote>';
                            }
                            ?>
                        <?php 
                        if($admin){
                        ?>
                        <form action="script/supprEquipe.php" method="POST">
                            <input type="hidden" name="id" value="<?=$value["id"]?>">
                            <input type="hidden" name="nom" value="<?=$image?>">
                            <?php
                                $text = "Etes vous sur de vouloir supprimer le membre '". $nom."' ?";
                            ?>
                            <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm m-1" value="Delete Membre">Supprimer</button>
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Fin d'un membre' -->
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    if($admin){

    include "includes/modaux/modalBackground.php";
    include "includes/modaux/modalTitres.php";
    include "includes/modaux/modalEquipe.php";
    }
?>
</section>