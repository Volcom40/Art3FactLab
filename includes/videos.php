<section id="Videos" class="container-bg<?=$sectionID?>">
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
            $zone = "videos";
            $texte = getTitres($zone);
            ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 col-12 text-center">
                <h3><?=$texte["titre"]?></h3>
                <h6 class="mb-5"><?=$texte["titreSecondaire"]?></h6>
                <?php 
                if($admin){
                ?>
                <button class="btn btn-success btn-sm m-3" type="button" data-toggle="modal" data-target="#titrevideos">Modifier texte</button>
                <?php
                }
                ?>
            </div>
            <!-- Input qui permet à un utilisateur de rechercher une/des video(s) par tag(s) -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 col-12">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Filtrer</span>
                    </div>
                    <input type="text" id="rechercheTagsVideos" class="form-control" placeholder="Filtrer les vidéos par tags..." aria-describedby="inputGroup-sizing-default" onkeyup="rechercheTagsVideos()">
                </div>
            </div>
            <!-- Fin de l'input -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-start">
        <?php 
        if($admin){
        ?>
          <!-- Début d'ajout d'une vidéo' -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 Filtrage-Video">
                <div class="video-container">
                    <div class="video-header">
                        <h6 class="text-dark">
                            Ajouter une vidéo
                        </h6>
                    </div>
                    <a data-toggle="modal" data-target="#VideoAddModal">
                    <div class="video-admin">
                        <img class="video-img-admin" src="img/admin/add.png">
                    </div>
                    </a>
                    <div class="video-caption text-center">
                        <a class="btn btn-primary btn-sm" href="" data-toggle="modal" data-target="#VideoAddModal" target="_blank" role="button">Ajouter une vidéo</a>
                    </div>
                    <div class="video-footer">
                    </div>
                </div>
            </div>
            <!-- Fin d'ajout d'une vidéo' -->
            <?php
            }
            ?>
            <?php
            $tab_videos = GetAllVideos();
                            
            foreach ($tab_videos as $key => $value) {
            $url = $value["url"];
            $titre = $value["titre"];
            $description = $value["description"];
            $tags = $value["tags"];
            ?>
            <!-- Début d'une vidéo' -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 Filtrage-Video">
                <div class="video-container">
                    <div class="video-header">
                        <h6 class="text-dark">
                            <?=$titre?>
                            <!-- Début boutton pour "épingler une vidéo" -->
                            <?php
                            if($admin){
                                ?>
                                <iframe name="falseFrame" style="display:none;"></iframe>
                                <form action="script/epinglerVideo.php" method="POST" target="falseFrame" id="formulaireEpingleVideo<?=$value["id"]?>">
                                    <label class="p-margin text-muted">
                                        <input type="checkbox" name="epingle" value="epingler" onclick="epingleVideos('<?=$value["id"] ?>')" <?=$value["epingle"] ?  "checked" : ""?>>
                                        Epinglé
                                    </label>
                                    <input type="hidden" name="id" value="<?=$value['id']?>">
                                </form>
                                <?php
                            } else {
                                echo $value["epingle"] ? '<button class="btn btn-danger btn-sm m-1 float-right"><img src="img/projets/pin.png" width="15rem"></button>' : "";
                            }
                            ?>
                            <!-- fin du boutton "épingler" -->
                        </h6>
                    </div>
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="<?=$url?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div class="video-caption">
                        <p><?=$description?></p>
                    </div>
                    <div class="video-footer">
                        <?php 
                        if($admin){
                        ?>
                        <form action="script/supprVideo.php" method="POST">
                            <input type="hidden" name="id" value="<?=$value["id"]?>">
                            <input type="hidden" name="nom" value="<?=$titre?>">
                            <?php
                                $text = "Etes vous sur de vouloir supprimer la vidéo '". $titre."' ?";
                            ?>
                            <button type="button" onclick="envoiFormConfirm(this.form,`<?=$text?>`)" class="btn btn-danger btn-sm" value="Delete Video">Supprimer</button>
                        </form>
                        <?php
                        }
                        ?>
                        <p class="text-right text-muted m-1 text-lowercase tagVidéo">tag(s) : <?=$tags?></p>
                    </div>
                </div>
            </div>
            <!-- Fin d'une vidéo' -->
            <?php
            }
            ?>
        </div>

    </div>
    <?php
    if($admin){
        include "includes/modaux/modalBackground.php";
        include "includes/modaux/modalTitres.php";
        include "includes/modaux/modalVideos.php";
    }
        ?>
</section>

<script>
    function epingleVideos(id){
    document.getElementById("formulaireEpingleVideo"+id).submit();
    }
    // Fonction pour rechercher une vidéo grâce à un tags précis
    function rechercheTagsVideos() {
    var input = document.getElementById("rechercheTagsVideos");
    var filter = input.value.toUpperCase();
    var tabBtnNoms = document.getElementsByClassName("Filtrage-Video");
    var tags = document.getElementsByClassName("tagVidéo");


        for (i = 0; i < tabBtnNoms.length; i++) {
            if (tags[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                tabBtnNoms[i].style.display = "";
            } else {
                tabBtnNoms[i].style.display = "none";
            }
        }
    }
</script>