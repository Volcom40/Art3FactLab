<section id="Accueil">
    <div id="carousel" class="carousel slide" data-interval="3000" data-ride="carousel">

        <!-- Petits indicateurs en bas des images -->
        <ul class="carousel-indicators">
            <?php
            $num=0;
            // On récupère toutes les images du carousel dans la base de données.
            $tab_carousel = getAllCarousel();
            foreach ($tab_carousel as $key => $value) {
            ?>
            <li data-target="#carousel" data-slide-to="<?=$num?>" <?php if($num==0){echo 'class="active"';} ?>></li>
            <?php
            $num=$num+1;
            }
            ?>
        </ul>

        <!-- Eléments du carousel (image et textes) -->
        <div class="carousel-inner">
            <?php
            $num = 0;
            foreach ($tab_carousel as $key => $value) {
            $id = $value["id"]; 
            $image = 'img/carousel/' . $value["image"];
            $titre = $value["titre"];
            $description = $value["description"]; 
            ?>

            <div class=<?php echo "'carousel-item"; if($num===0 ){echo ' active';} echo "'" ?>>
                <img src="<?=$image?>" alt="carousel" class="img-fluid" <?php if($admin){?> data-toggle="modal" data-target="#carouselModifModal<?=$num?>" <?php } ?>>
                <?php
                //Boucle qui permet d'ajouter une couleur de fond au texte d'une image si il y a bien du contenu.
                $titre = $value["titre"];
                $description = $value["description"];
                if(empty($titre . $description)) {
                    echo '<div class="carousel-caption">';
                    } else{
                    echo '<div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.3); border-radius: 2rem">';
                }
                ?>
                    <h4 class="carousel-caption-size"><?=$titre?></h4>
                    <h5 class="carousel-caption-size"><?=$description?></h5>
                </div>
            </div>
            <?php
            $num=$num+1;
            }
            if($admin){
            ?>
            <div class=<?php echo "'carousel-item text-center"; if($num===0 ){echo ' active';} echo "'" ?>>
                    <img src="img/admin/add.png" alt="Slide" class="ajout-carousel" data-toggle="modal" data-target="#carouselAddModal">
                    <div class="carousel-caption">
                        <button class="btn btn-primary">Ajouter une image</button>
                    </div>
                </div>
                
            <?php
            }
            ?>
        </div>

        <!-- Selecteur (flêche gauche) -->
        <a class="carousel-control-prev" href="#carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <!-- Selecteur (flêche droite) -->
        <a class="carousel-control-next" href="#carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <?php
        if($admin){
            include "includes/modaux/modalCarousel.php";
        }
    ?>
</section>