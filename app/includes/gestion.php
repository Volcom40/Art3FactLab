<iframe name="falseFrame" style="display:none;"></iframe>
<div class="container-app-bg1">
    <div class="container-fluid">
        <div class="row justify-content-start gestion-userInfos-margin">
            <div class="col-lg-12">
                <h5 class="text-left ml-5"><strong class="text-success">Gestion</strong> des utilisateurs</h5>
                <hr width="95%">
            </div>
            <div class="col-lg-3">
                <div class="form-group ml-5">
                    <input type="text" id="rechercheNom" class="form-control" placeholder="Rechercher un membre..." onkeyup="rechercheNom()">
                </div>
            </div>
            <div class="table-responsive bg-light mb-5"  id="tableHead">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th><h5>Nom</h5></th>
                            <th><h5>Prenom</h5></th>
                            <th><h5>Tarif</h5></th>
                            <th><h5>À régler</h5></th>
                            <th><h5>Détails</h5></th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="table-responsive2 bg-light" id="tableRecap">
                <table class="table table-hover table-striped" >
                    <tbody class="text-center">
                        <?php
                        foreach (getRecapUtilisations() as $ligne) {
                        ?>
                        <tr>
                            <td><h5><?=$ligne["nom"]?></h5></td>
                            <td><h5><?=$ligne["prenom"]?></h5></td>
                            <td><h5><?=$ligne["tarif_reduit"] ? "reduit" : "normal" ?></h5></td>
                            <td><h5><?=number_format($ligne["a_payer"], 2)?> &euro;</h5></td>
                            <td><h5><button class="btn btn-secondary" onclick="detail(<?=$ligne["id"]?>)">detail</button></h5></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

                <?php
                    foreach (getRecapUtilisations() as $ligne) {
                ?>
                <div id="tableHeadDetail<?=$ligne["id"]?>" class="table-responsive bg-light mb-5" hidden>
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th><h5>Date</h5></th>
                                <th><h5>Machine</h5></th>
                                <th><h5>Temps</h5></th>
                                <th><h5>Coût (<?= $ligne["tarif_reduit"] ? "reduit" : "normal" ?>)</h5></th>
                                <th><h5>Etat</h5></th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div id="tableDetail<?=$ligne["id"]?>" class="table-responsive2 bg-light mb-5" hidden>
                    <table class="table table-hover table-striped mb-5">
                        <tbody class="text-center">
                            <?php
                            foreach (getMemberUtilisation($ligne["id"]) as $utilisation) {
                                $tarif = $utilisation["tarif_reduit"] ? ( (int) $utilisation["tarif_horaire_reduit"] / 60) : ( (int) $utilisation["tarif_horaire_normal"] / 60);
                                $cout = (int) $utilisation["temps_utilisation"] * $tarif;
                                $cout = number_format($cout, 2);
                            ?>

                            <tr>
                                <td><h5><?=$utilisation["date_utilisation"]?></h5></td>
                                <td><h5><?=$utilisation["nom"]?> (<?=$utilisation["Fnom"]?>)</h5></td>
                                <td><h5><?=$utilisation["temps_utilisation"]?> min</h5></td>
                                <td><h5><?=$cout?>&euro;</h5></td>

                                <form target="falseFrame" action="script/payer.php" method="POST"  id="formPayer<?=$utilisation["id_membre"].$utilisation["id_machine"].$utilisation["date_utilisation"]?>">
                                    <input type="hidden" name="machine" value="<?=$utilisation["id_machine"]?>">
                                    <input type="hidden" name="membre" value="<?=$utilisation["id_membre"]?>">
                                    <td><h5>payé <input type="checkbox" name="paye" value="payer" onclick="payer('<?=$utilisation["id_membre"] . $utilisation["id_machine"] . $utilisation["date_utilisation"]?>')" <?=$utilisation["paye"] ?  "checked" : ""?>></h5></td>
                                </form>
                            </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
                    }
                ?>
        </div>
    </div>
</div>

<script>
function detail(id){
    if(id == -1){
        document.getElementById("tableHead").hidden = "";
        tablesDetail = document.getElementClassName("tableDetail");
        for(var i=0; i< tablesDetail.length; i++){
         tablesDetail.hidden = "hidden";   
        }
    } else {
        document.getElementById("tableHead").hidden = "hidden";
        document.getElementById("tableRecap").hidden = "hidden";
        document.getElementById("tableHeadDetail"+id).hidden = "";
        document.getElementById("tableDetail"+id).hidden = "";
    }
}
function payer(id){
    document.getElementById("formPayer"+id).submit();
}

function rechercheNom() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("rechercheNom");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableRecap");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td1 = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[1];
    console.log(td1.innerHTML.toUpperCase().indexOf(filter));
    console.log(td2.innerHTML.toUpperCase().indexOf(filter));
    if (td1 && td2) {
      if (td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1 ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>