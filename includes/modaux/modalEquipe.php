<!-- Modal Ajout Equipe -->
<div class="modal fade" id="equipeAddModal" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Ajouter un membre d'équipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/addEquipe.php" method="POST" enctype="multipart/form-data">
                <label> Image : 
                    <div class="file-loading">
                        <input name="fileToUpload"  type="file" class="file" required>
                    </div>
                </label>
                <br/>
                <textarea type="text" class="form-control" placeholder="Nom et prénom" name="nom" required></textarea>
                <br/>
                <textarea type="text" class="form-control" placeholder="devise, poste, autre..." name="description"></textarea>
                


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
