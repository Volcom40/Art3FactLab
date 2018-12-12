<div class="container-app-bg3">
    <div class="container-fluid">
        <div class="row justify-content-start userInfos-margin">
            <div class="col-lg-12 text-center pr-5 pl-5">
                <h5>Vos informations personnelles</h5>
                <hr>
            </div>

            <div class="table-responsive bg-light mb-5">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th><h5>Date</h5></th>
                            <th><h5>Machine</h5></th>
                            <th><h5>Temps</h5></th>
                            <th><h5>Coût (<?= $user["tarif_reduit"] ? "reduit" : "normal" ?>)</h5></th>
                            <th><h5>Etat</h5></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="table-responsive2 bg-light">
                <table class="table table-hover table-striped">
                    <tbody class="text-center">
                        <?php
                        foreach (getMemberUtilisation($user["id"]) as $utilisation) {
                            $tarif = $utilisation["tarif_reduit"] ? ( (int) $utilisation["tarif_horaire_reduit"] / 60) : ( (int) $utilisation["tarif_horaire_normal"] / 60);
                            $cout = (int) $utilisation["temps_utilisation"] * $tarif;
                            $cout = number_format($cout, 2);
                        ?>

                        <tr>
                            <td><h5><?=$utilisation["date_utilisation"]?></h5></td>
                            <td><h5><?=$utilisation["nom"]?> (<?=$utilisation["Fnom"]?>)</h5></td>
                            <td><h5><?=$utilisation["temps_utilisation"]?> min</h5></td>
                            <td><h5><?=$cout?>&euro;</h5></td>
                            <td><h5><?=$utilisation["paye"] ?  "<div class='text-success'>payé</div>" : "<div class='text-danger'>non payé</div>"?></h5></td>
                        </tr>

                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>

        </div>

    </div>

</div>
