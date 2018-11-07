<!-- Modal Ajout Machine -->
<div class="modal fade text-center" id="MachineAddModal" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Ajouter une machine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="script/addMachine.php" method="POST" enctype="multipart/form-data">
                <label> Image : 
                    <div class="file-loading">
                        <input name="fileToUpload"  type="file" class="file" required>
                    </div>
                </label>
                <br/>
                <br/>
                <input type="text" class="form-control" placeholder="Nom du matériel" name="nom" required>
                <br/>
                <textarea type="text" class="form-control" placeholder="Description du matériel" name="description" required></textarea>
                <br/>
                <input type="text" class="form-control" placeholder="Entrez l'url..." name="url">
                


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