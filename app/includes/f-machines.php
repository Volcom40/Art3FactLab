<div class="container-app-bg2">
    <div class="container-fluid">
        <div class="row justify-content-center" id="familles">
            <div class="col-lg-12">
                <h5 class="ml-5">Veuillez <strong class="text-success">selectionner</strong> le <strong class="text-success">type de machine</strong> que vous recherchez...</h5>
                <hr width="95%">
            </div>
            <!-- Famille de machines -->
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
                </div>
                <div class="f-machines-footer-statut">
                    <?php
                        foreach(recupMachinefromFamille($famille["id"]) as $machine) {
                    ?>
                    <p class="text-left"><?=$machine["nom"]?> : <strong style="color: <?=$machine["color"]?>"><?=$machine["Enom"]?></strong></p>
                    <?php    
                        }
                    ?>
                </div>
            </div>
            <?php
                }
            ?>
            <!-- Fin Famille de machines -->
        </div>

            <!-- Machines disponible par famille -->
        <?php
        foreach (fetchFamilleMachines() as $famille) {
        ?>
        <div class="row justify-content-center famille" id="famille<?=$famille["id"]?>" hidden>
            <div class="col-lg-12 text-left">
                <h5 class="ml-5">Type de machine selectionnée : <strong class="text-danger"><?=$famille["Fnom"]?></strong></h5>
                <h5 class="ml-5">Veuillez maintenant <strong class="text-success">selectionner</strong> la <strong class="text-success">machine</strong> que vous <strong class="text-success">souhaitez utiliser...</strong></h5>
                <hr width="95%">
            </div>
            <?php
                foreach(recupMachinefromFamille($famille["id"]) as $machine) {
                    $path = "img/Machines/".$machine["image"];
                    $unUsed = isUsing($machine["id"], $user["id"]);
            ?>
                        <div class="f-machines-container rounded">
                            <div class="f-machines-header text-center">
                                <h5><?=$machine["nom"]?></h5>
                                <div class="zoom">
                                    <div class="image">
                                        <img class="rounded f-machines-header-image" src="<?=$path?>" data-toggle="modal" data-target="#machine<?=$machine["id"]?>">
                                    </div>
                                </div>
                            </div>
                            <div class="f-machines-footer text-center">
                                <h5 class="f-machines-footer-info">Informations</h5>
                            </div>
                            <div class="f-machines-footer-statut-bis">
                                    <p class="text-left">Etat : <strong style="color: <?=$machine["color"]?>"><?=$machine["Enom"]?></strong></p>
                                    <?php
                                        if($user["tarif_reduit"]){
                                    ?>
                                    <p class="text-left">Tarif reduit : <strong><?=$machine["tarif_horaire_reduit"]?> &euro; / H</strong></p>

                                    <?php
                                        } else {
                                    ?>
                                    <p class="text-left">Tarif normal : <strong><?=$machine["tarif_horaire_normal"]?> &euro; / H</strong></p>
                                    <?php
                                        }
                                    ?>
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
                                Voulez vous vraiment utiliser <strong class="text-success">"<?=$machine["nom"]?>"</strong> de la famille <strong class="text-primary">"<?=$famille["Fnom"]?>"</strong> ? <br/>
                                <br>
                                <strong>Tarif Normal : </strong><?=$machine["tarif_horaire_normal"]?> &euro; / H <br/>
                                <strong>Tarif Reduit : </strong><?=$machine["tarif_horaire_reduit"]?> &euro; / H <br/>
                                <br>
                                <p>Cliquez sur le <strong>bouton</strong> ci-dessous pour <strong>utiliser la machine</strong>...</p>
                                <!-- <iframe name="falseFrame" style="display:none;"></iframe> -->
                                <!-- target="falseFrame" -->
                                <?php
                                    if($machine["Eid"]== 1 ||  ($machine["Eid"] == 2 && !$unUsed)) {
                                ?>
                                    <form action="script/utiliserMachine.php" method="POST" >
                                        <input type="hidden" value="<?=$machine["id"]?>" name="idMachine">
                                        
                                        <button type="submit" class="btn btn-primary"><?=$unUsed ? "Utiliser" : "Arrêter"?></button>
                                <?php
                                    } else {
                                ?>
                                        <h5 style="color : red"> Machine indisponible pour le moment.</h5>
                                        <h5 style="color : red"> Actuellement <?=$machine["Enom"]?> <?=$machine["Eid"] == 2 ? "par <b style=\"color : black\">".quiUtilise($machine["id"])."</b>" : "" ?></h5>
                                <?php
                                    }
                                ?>

                                            
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
            <div class="col-lg-12 mt-2 text-center">
                <button class="btn btn-success" onclick="retourFamilles()">Revenir en arrière</button> 
            </div>
        </div>
        
        <?php
            }
        ?> 
        </div>
            <!-- Fin machine disponible par famille -->
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