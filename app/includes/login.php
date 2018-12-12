<div class="container-app-bg1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
                <div class="login-container rounded">
                    <div class="login-leftside">
                        <input type="text" id="rechercheNom" class="form-control" placeholder="Rechercher mon identifiant..." onkeyup="rechercheNom()">
                        </br>
                        <p class="text-center"><strong>Liste utilisateurs :</strong></p>
                        <div class="leftside-btn-container rounded">
                            <?php
                                require_once("./dao/appdao.php");
                                foreach (fetchAllMembres() as $membre) { ?>
                                    <button onclick="afficheMembre(<?=$membre["id"]?>)" class="btn btn-success nom leftside-btn-size">
                                <?=$membre["prenom"] . " " . $membre["nom"]?>
                            </button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="login-rightside">
                        <div class="row p-1">
                            <div class="p-0 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <?php
                                    foreach (fetchAllMembres() as $membre) { ?>
                                    <div id="info<?=$membre["id"]?>" class="infoMembre" hidden>
                                        <div class="info-user rounded">
                                            <ul>
                                                <li>
                                                    <p>
                                                        <strong>Nom : </strong>
                                                        <?=$membre["nom"]?>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <strong>Prénom : </strong>
                                                        <?=$membre["prenom"]?>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <strong>Société : </strong>
                                                        <?=$membre["societe"]?>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <strong>Mail : </strong>
                                                        <?=$membre["mail"]?>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <strong>Rôle : </strong>
                                                        <?=$membre["Fnom"]?>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="p-0 col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="numeric-pad text-center rounded">
                                    <form action="script/appLogin.php" id="formLogin" method="POST">
                                        <input name="id" type="hidden" id="currentMembre">
                                        <input maxlength="4" name="pass" type="password" id="password" class="form-control login-password-input" placeholder="Mot de passe" disabled>
                                    </form>
                                    <table>
                                        <tr>
                                            <td><button onclick="numpad(1)" type="button" class="btn btn-primary rightside-btn-size">1</button></td>
                                            <td><button onclick="numpad(2)" type="button" class="btn btn-primary rightside-btn-size">2</button></td>
                                            <td><button onclick="numpad(3)" type="button" class="btn btn-primary rightside-btn-size">3</button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="numpad(4)" type="button" class="btn btn-primary rightside-btn-size">4</button></td>
                                            <td><button onclick="numpad(5)" type="button" class="btn btn-primary rightside-btn-size">5</button></td>
                                            <td><button onclick="numpad(6)" type="button" class="btn btn-primary rightside-btn-size">6</button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="numpad(7)" type="button" class="btn btn-primary rightside-btn-size">7</button></td>
                                            <td><button onclick="numpad(8)" type="button" class="btn btn-primary rightside-btn-size">8</button></td>
                                            <td><button onclick="numpad(9)" type="button" class="btn btn-primary rightside-btn-size">9</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><button onclick="numpad(0)" type="button" class="btn btn-primary rightside-btn-size">0</button></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function rechercheNom() {

    var input = document.getElementById("rechercheNom");
    var filter = input.value.toUpperCase();
    var tabBtnNoms = document.getElementsByClassName("nom");


    for (i = 0; i < tabBtnNoms.length; i++) {
        if (tabBtnNoms[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            tabBtnNoms[i].style.display = "";
        } else {
            tabBtnNoms[i].style.display = "none";
        }
    }
}

function numpad(num) {
    var input = document.getElementById("password");
    var form = document.getElementById("formLogin");
    if (input.value.length >= 3) {
        input.value += num;
        input.disabled = false;
        form.submit();
    } else {
        input.value += num;
    }
}

function afficheMembre(id) {
    var membre = document.getElementById("info" + id);
    var membres = document.getElementsByClassName("infoMembre");
    document.getElementById("currentMembre").value = id;
    for (var i = 0; i < membres.length; i++) {

        membres[i].hidden = "hidden";
    }

    membre.hidden = "";
}
</script>