<!-- Modal titre footer 1 -->
<?php
    $zone = "footer1";
    $texte = getTitres($zone);
?>
<div class="modal fade" id="titreFooter1" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Modifier le titre gauche du footer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/changeTitre.php" method="POST">
                <input type="hidden" name="section" value="<?=$zone?>" >
                <textarea type="text" class="form-control" placeholder="Titre de la section <?=$zone?>" name="titre" required><?=$texte["titre"]?></textarea>
                <br/>
                <textarea type="text" class="form-control"  placeholder="Description de la section <?=$zone?>" name="sous-titre" hidden></textarea>
                


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


<!-- Modal ajout Informations -->
<div class="modal fade" id="informationsAddModal" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="information">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Ajouter une information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="script/addInformation.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="form-control" placeholder="Nom affiché ..." name="nom" required>
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


<!-- Modal titre Footer 2 -->
<?php
    $zone = "footer2";
    $texte = getTitres($zone);
?>
<div class="modal fade" id="titreFooter2" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Modifier le titre central du footer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/changeTitre.php" method="POST">
                <input type="hidden" name="section" value="<?=$zone?>" >
                <textarea type="text" class="form-control" placeholder="Titre de la section <?=$zone?>" name="titre" required><?=$texte["titre"]?></textarea>
                <br/>
                <textarea type="text" class="form-control"  placeholder="Description de la section <?=$zone?>" name="sous-titre" hidden></textarea>
                


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

<!-- Modal ajout Document -->
<div class="modal fade" id="documentAddModal" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Ajouter un Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/addDocument.php" method="POST" enctype="multipart/form-data">
                <label> Document : 
                    <div class="file-loading">
                        <input name="fileToUpload"  type="file" class="file" required>
                    </div>
                </label>
                <br/>
                <input type="text" class="form-control" placeholder="Nom affiché ..." name="nom" required>
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




<!-- Modal Titre footer 3 -->
<?php
    $zone = "footer3";
    $texte = getTitres($zone);
?>
<div class="modal fade" id="titreFooter3" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Modifier le titre droit du footer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/changeTitre.php" method="POST">
                <input type="hidden" name="section" value="<?=$zone?>" >
                <textarea type="text" class="form-control" placeholder="Titre de la section <?=$zone?>" name="titre" required><?=$texte["titre"]?></textarea>
                <br/>
                <textarea type="text" class="form-control"  placeholder="Description de la section <?=$zone?>" name="sous-titre" hidden></textarea>
                


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

<!-- Modal Titre footer 3 -->
<?php
    $zone = "footer4";
    $texte = getTitres($zone);
?>
<div class="modal fade" id="titreFooter4" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Modifier le titre droit du footer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/changeTitre.php" method="POST">
                <input type="hidden" name="section" value="<?=$zone?>" >
                <textarea type="text" class="form-control" placeholder="Titre de la section <?=$zone?>" name="titre" required><?=$texte["titre"]?></textarea>
                <br/>
                <textarea type="text" class="form-control"  placeholder="Description de la section <?=$zone?>" name="sous-titre" hidden></textarea>
                


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


<!-- Modal ajout Reseau Social -->
<div class="modal fade" id="reseausocialAddModal" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Ajouter un réseau social</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="script/addReseauSocial.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="form-control" placeholder="Nom affiché ..." name="nom" required>
                <input type="text" class="form-control" placeholder="Entrez l'url du réseau social..." name="url" required>
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


<!-- Modal Modif MDP admin -->
<div class="modal fade" id="modifPass" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Modifier votre mot de passe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="script/changePass.php" id="formChangePass" method="POST">
                <input type="hidden" name="login" value="<?=$user["login"]?>" >
                
                <input type="password" class="form-control" placeholder="Mot de Passe actuel" name="originalPass" required></input>
                <br/>
                <input type="password" class="form-control" placeholder="Nouveau Mot de Passe" name="newPass1"></input>
                <br/>
                <p id="errorPass" style="background: red;" hidden> Répétez le bon mot de passe <br/></p>
                <input type="password" class="form-control" placeholder="Repetez le nouveau Mot de Passe" name="newPass2"></input>

            </div>
            <div class="modal-footer">

                <!-- Boutons du footer :  -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                <button type="button" class="btn btn-primary" onclick="changePass();" >Sauvegarder</button>
            </div>
            </form>
        </div>
    </div>
    <script>

    function changePass(){
        var original = document.getElementsByName("originalPass")[0];
        var new1 = document.getElementsByName("newPass1")[0].value;
        var new2 = document.getElementsByName("newPass2")[0].value;

        var errorMess = document.getElementById("errorPass");
        var form = document.getElementById("formChangePass");

        errorMess.hidden = "hidden";
        if(new1 != new2){
            errorMess.hidden= "";
        } else {
            console.log("submit !");
            form.submit();
        }
    }

    </script>
</div>
<!-- Modal -->


<!-- Modal modif Logo -->
<div class="modal fade text-center" id="Logo" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Le titre du Modal :  -->
                <h5 class="modal-title" id="carouselLabel">Modifier le logo du site</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="script/modifLogo.php" method="POST" enctype="multipart/form-data">
                <div class="file-loading">
                    <input name="fileToUpload"  type="file" class="file" required>
                </div>
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
