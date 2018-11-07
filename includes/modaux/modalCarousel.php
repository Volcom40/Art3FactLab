<!-- Modal ajout Carousel -->
<div class="modal fade text-center" id="carouselAddModal" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Ajouter une image au carousel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="script/addCarouselImage.php" method="POST" enctype="multipart/form-data">
                <div class="file-loading">
                    <input name="fileToUpload"  type="file" class="file" required>
                </div>
                <br/>
                <input type="text" class="form-control" placeholder="Titre" name="titre">
                <br/>
                <input type="text" class="form-control" placeholder="Description" name="description">
            </div>
            <div class="modal-footer">
                <!-- Boutons du footer :  -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                <button type="submit" class="btn btn-primary" value="Upload Image" name="submit" >Sauvegarder</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->


<?php
$num = 0;
$tab_slides = getAllCarousel();
foreach ($tab_slides as $key => $value) {
    $id = $value["id"]; 
    $path = 'img/Carousel/' . $value["image"];
    $title = $value["titre"];
    $description = $value["description"]; 
?>

<!-- Modal suppression carousel-->
<div class="modal fade" id="carouselModifModal<?=$num?>" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Supprimer une image du carousel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modifCarousel<?=$num?>" action="script/modifCarouselImage.php" method="POST">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <label> Titre :
                        <?=$title?>
                    </label>
                    <br/>
                    <label> Description : 
                        <?=$description?>
                    </label>

                </form>

                <form id="deleteCarousel<?=$num?>" action="script/supprCarouselImage.php" method="POST">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" name="name" value="<?=$path?>">
                </form>

            </div>
            <div class="modal-footer">

                <!-- Boutons du footer :  -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                <button type="submit" class="btn btn-danger" value="Delete Image" name="submit" form="deleteCarousel<?=$num?>">Supprimer</button>
            </div>
            
        </div>
    </div>
</div>
<!-- Modal -->

<?php
$num++;
}

?>