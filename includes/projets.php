<section id="Projet" class="container-bg<?=$sectionID?>">
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
        <div class="row justify-content-center">
            <?php
            $zone = "projets";
            $texte = getTitres($zone);

            ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 col-12 text-center">
                <h3><?=$texte["titre"]?></h3>
                <h6 class="mb-5"><?=$texte["titreSecondaire"]?></h6>
                <?php 
                if($admin){
                ?>
                <button class="btn btn-success btn-sm m-3" type="button" data-toggle="modal" data-target="#titreprojets">Modifier texte</button>
                <?php
                }
                ?>
            </div>

            <!-- Input qui permet à un utilisateur de rechercher un/des projet(s) par tag(s) -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 col-12">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Filtrer</span>
                    </div>
                    <input type="text" id="rechercheTagsProjets" class="form-control" placeholder="Filtrer les projets par tags..." aria-describedby="inputGroup-sizing-default" onkeyup="rechercheTagsProjets()">
                </div>
            </div>
            <!-- Fin de l'input -->
        </div>
        <div class="row justify-content-center">
            <?php 
            if($admin){
            ?>
            <!-- Début pour ajouter un projet -->
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-10 col-12 Filtrage-Projet">
                <div class="projet-container text-center">
                    <!-- le header d'un projet contient uniquement une image -->
                    <div class="projet-header">
                        <a href="" data-toggle="modal" data-target="#ProjetAddModal" target="_blank" role="button">
                            <img src="img/admin/add.png" class="projet-img-admin">
                        </a>
                    </div>
                    <!-- le projet-caption contient les autres éléments d'un projet (texte, boutton, etc...) -->
                    <div class="projet-caption text-center">
                        <p></p>
                    </div>
                    <div class="projet-footer">
                        <a class="btn btn-primary btn-sm mt-1" href="" data-toggle="modal" data-target="#ProjetAddModal" target="_blank" role="button">Ajouter un projet</a>
                    </div>
                </div>
            </div>
            <!-- Fin pour ajouter un projet -->
            <?php
            }
            ?>

            <?php
            $projets = getAllProjets();
            foreach ($projets as $key => $value) {
            $image = "img/projets/" . $value["image"];
            $description = $value["description"];
            $lien = $value["lien"];
            $tags = $value["tags"];
            ?>
            <!-- Début du projet -->
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-10 col-12 Filtrage-Projet">
                <div class="projet-container">
                    <!-- le header d'un projet contient uniquement une image -->
                    <div class="projet-header">
                        <img src="<?=$image?>" class="projet-img">
                    </div>
                    <!-- le projet-caption contient les autres éléments d'un projet (texte, boutton, etc...) -->
                    <div class="projet-caption">
                        <p><?=$description?></p>
                    </div>
                    <div class="projet-footer">
                        <?php
                        //Boucle qui permet d'ajouter le boutton bleu "en savoir plus" en bas d'un projet
                        $lien = $value["lien"];
                        if(empty($lien)) {
                            echo '<button type="button" class="btn btn-sm btn-secondary m-1" disabled>En savoir plus...</button>';
                            } else{
                            echo '<a class="btn btn-info btn-sm m-1" href="' . $lien . '" target="_blank" role="button">En savoir plus...</a>';
                        }
                        ?>
                        <!-- Début boutton pour "épingler un projet" -->
                        <?php
                        if($admin){
                            ?>
                            <iframe name="falseFrame" style="display:none;"></iframe>
                            <form action="script/epinglerProjet.php" method="POST" target="falseFrame" id="formulaireEpingleProjet<?=$value["id"]?>">
                                <label class="p-margin text-muted">
                                    <input type="checkbox" name="epingle" value="epingler" onclick="epingleProjets('<?=$value["id"] ?>')" <?=$value["epingle"] ?  "checked" : ""?>>
                                    Epinglé
                                </label>
                                <input type="hidden" name="id" value="<?=$value['id']?>">
                            </form>
                            <?php
                        } else {
                            echo $value["epingle"] ? '<button class="btn btn-danger btn-sm m-1 float-right"><img src="img/projets/pin.png" width="16rem"></button>' : "";
                        }
                        ?>
                        <!-- fin du boutton "épingler" -->
                        <p class="text-center text-muted m-1 tagProjets">tag(s) : <?=$tags?></p>
                        <?php 
                        if($admin){
                        ?>
                        <form action="script/supprProjet.php" class="text-center" method="POST">
                            <input type="hidden" name="id" value="<?=$value["id"]?>">
                            <input type="hidden" name="nom" value="<?=$image?>">
                            <?php
                                $text = "Etes vous sur de vouloir supprimer ce projet ?";
                            ?>
                            <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm m-1" value="Delete Projet">Supprimer</button>
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Fin du projet -->
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    if($admin){
        include "includes/modaux/modalBackground.php";
        include "includes/modaux/modalTitres.php";
        include "includes/modaux/modalProjets.php";
    }
    ?>
</section>

<script>
    // Fonction pour épingler un projet en tête de liste
    function epingleProjets(id){
    document.getElementById("formulaireEpingleProjet"+id).submit();
    }

    // Fonction pour rechercher un projet grâce à un tags précis
    function rechercheTagsProjets() {
    var input = document.getElementById("rechercheTagsProjets");
    var filter = input.value.toUpperCase();
    var tabBtnNoms = document.getElementsByClassName("Filtrage-Projet");
    var tags = document.getElementsByClassName("tagProjets");


        for (i = 0; i < tabBtnNoms.length; i++) {
            if (tags[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                tabBtnNoms[i].style.display = "";
            } else {
                tabBtnNoms[i].style.display = "none";
            }
        }
    }
</script>