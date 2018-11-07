<!-- Modal -->
<div class="modal fade" id="VideoAddModal" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Ajouter une Vidéo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="script/addVideo.php" method="POST">
                
                <iframe id="displayVideo" hidden class="embed-responsive-item" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <br/>

                <input id="urlDisplay" placeholder="Entrez le lien de la vidéo" class="form-control" type="text" name="baseUrl" onchange="displayVideo()" required>
                <input id="urlFinal" type="hidden" name="url">
                <script>
                    function displayVideo() {
                        var vid = document.getElementById("displayVideo");
                        var url = document.getElementById("urlDisplay").value.split("/");
                        var finalUrl = document.getElementById("urlFinal");

                        url = "https://www.youtube.com/embed/" + url[url.length-1];
                        vid.src = url;
                        finalUrl.value = url;
                        vid.hidden = false;
                    }
                </script>
                <br/>
                <textarea type="text" class="form-control" name="titre" placeholder="Entrez un titre" required></textarea>
                <br/>
                <textarea type="text" class="form-control" name="description" placeholder="Entrez une description" required></textarea>
                <br/>
                <input type="text" class="form-control" name="tags" placeholder="Entrez des tags" required>


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