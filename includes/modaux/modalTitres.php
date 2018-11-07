<!-- Modal -->
<div class="modal fade" id="titre<?=$zone?>" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Modifier les titres de la section <?=$zone?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/changeTitre.php" method="POST">
                <input type="hidden" name="section" value="<?=$zone?>" >
                <textarea type="text" class="form-control" placeholder="Titre de la section <?=$zone?>" name="titre" required><?=$texte["titre"]?></textarea>
                <br/>
                <textarea type="text" class="form-control" placeholder="Description de la section <?=$zone?>" name="sous-titre"><?=$texte["titreSecondaire"]?></textarea>
                <br/>


            </div>
            <div class="modal-footer">

                <!-- Boutons du footer :  -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                <button type="submit" class="btn btn-primary" value="Upload Activite" name="submit" >Sauvegarder</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->