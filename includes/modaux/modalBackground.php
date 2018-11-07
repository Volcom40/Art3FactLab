<!-- Modal -->
<div class="modal fade" id="ChangeBackground<?=$sectionID?>" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Modifier l'image en arrière plan de cette section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/changeBackground.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$sectionID?>">
                <label> Image : 
                    <div class="file-loading">
                        <input name="fileToUpload" id="fileToUpload" type="file" class="file" required>
                    </div>
                </label>
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