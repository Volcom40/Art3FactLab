<div class="container-app-bg2">
    <div class="container-fluid">
        <div class="row justify-content-center" id="familles">
        <?php
                foreach (fetchFamilleMachines() as $famille) {
                $path = "img/Machines/" . $famille["image"];
            ?>
            
                <div class="f-machines-container rounded">
                    <div class="f-machines-header text-center">
                        <h5><?=$famille["Fnom"]?></h5>
                        <div class="zoom">
                            <div class="image">
                                <img class="rounded f-machines-header-image" src="<?=$path?>" onclick="afficheFamille('<?=$famille["id"]?>')">
                            </div>
                        </div>
                    </div>
                    <div class="f-machines-footer text-center">
                        <h5 class="f-machines-footer-info">Informations</h5>
                        <hr>
                        <ul>
                            <?php
                                foreach(recupMachinefromFamille($famille["id"]) as $machine) {
                    
                            ?>
                            <li><p class="text-left"><?=$machine["nom"]?> : <b><?=$machine["Enom"]?></b></p></li>

                            <?php    
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            
            <?php
                }
            ?>
        </div>
        <?php
            foreach (fetchFamilleMachines() as $famille) {
        ?>
            <div class="row justify-content-center famille" id="famille<?=$famille["id"]?>" hidden>
                <?php
                    foreach(recupMachinefromFamille($famille["id"]) as $machine) {
                        $unUsed = isUsing($machine["id"], $user["id"]);
                ?>
                        <!-- jkhfisujcvgkrljhnj,vlvr,lfj bk,lfv bj,k bvdvdv,v vv ck, -->

                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-8">
            
                            <div class="f-machines-container rounded">
                                <div class="f-machines-header text-center">
                                    <h5><?=$machine["nom"]?></h5>
                                    <div class="zoom">
                                        <div class="image">
                                            <img class="rounded-circle f-machines-header-image" src="<?=$path?>" data-toggle="modal" data-target="#machine<?=$machine["id"]?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="f-machines-footer text-center">
                                    <h5 class="f-machines-footer-info">Informations</h5>
                                    <hr>
                                    <ul>
                                      
                                        <li><p class="text-left">Etat : <strong><?=$machine["Enom"]?></strong></p></li>
                                        <?php
                                            if($user["tarif_reduit"]){
                                        ?>
                                        <li><p class="text-left">Tarif reduit : <strong><?=$machine["tarif_horaire_reduit"]?> &euro; / H</strong></p></li>

                                        <?php
                                            } else {
                                        ?>
                                        <li><p class="text-left">Tarif normal : <strong><?=$machine["tarif_horaire_normal"]?> &euro; / H</strong></p></li>

                                        <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="machine<?=$machine["id"]?>" tabindex="-1" role="dialog" aria-labelledby="carouselLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <!-- Le titre du Modal :  -->
                                        <h5 class="modal-title" id="carouselLabel"><?=$machine["nom"]?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Retour">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <!-- BODY DU MODAL -->
                                    Voulez vous vraiment utiliser "<?=$machine["nom"]?>" de la famille "<?=$famille["Fnom"]?>" ? <br/>
                                    Tarif Normal : <?=$machine["tarif_horaire_normal"]?> &euro; / H <br/>
                                    Tarif Reduit : <?=$machine["tarif_horaire_reduit"]?> &euro; / H <br/>
                                    <!-- <iframe name="falseFrame" style="display:none;"></iframe> -->
                                    <!-- target="falseFrame" -->
                                        <form action="script/utiliserMachine.php" method="POST" >
                                            <input type="hidden" value="<?=$machine["id"]?>" name="idMachine">
                                            <button type="submit"><?=$unUsed ? "Utiliser" : "Arrêter"?></button>

                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                        <!-- Boutons du footer :  -->
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
        <!-- uhouignjhnbhjgbnhjbnh -->
                <?php
                    }
                ?>
                <button class="btn btn-secondary" onclick="retourFamilles()">Retour</button>
            </div>
            
        
        <?php
            }
        ?> 
        </div>
    </div>
</div>

<script>
function retourFamilles(){
    var zoneFamilles = document.getElementById("familles");
    var familles = document.getElementsByClassName("famille");
    for(var i = 0; i<familles.length; i++){
        familles[i].hidden = "hidden";
    }
    zoneFamilles.hidden = "";
}

function afficheFamille(id){
    var familles = document.getElementById("familles");
    var familleChoisie = document.getElementById("famille"+id);
    familles.hidden = "hidden";
    familleChoisie.hidden = "";

}

function chrono(){
    chronos = document.getElementsByClassName("time");

    for(var i = 0; i<chronos.length; i++){
        
    }
}
</script>