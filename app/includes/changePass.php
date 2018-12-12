
<div class="container-app-bg3">
    <div class="container-fluid">
        <div class="row justify-content-start gestion-userInfos-margin">
            


            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center">
            <h1>Changer de mot de passe</h1>
                <div class="numeric-pad text-center rounded">
                    <form action="script/changeMDP.php" id="formLogin" method="POST">
                        <input name="id" type="hidden" value="<?=$user["id"]?>">
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
                            <td><button onclick="numpad(-1)" type="button" class="btn btn-danger rightside-btn-size">Effacer</button></td>
                        </tr>
                    </table>
                </div>
            </div>
            
            

        </div>
    </div>
</div>


<script>

function numpad(num) {
    var input = document.getElementById("password");
    var form = document.getElementById("formLogin");

    if(num == -1){
        input.value = "";
    } else {
        if (input.value.length >= 3) {
            input.value += num;
            input.disabled = false;
            form.submit();
        } else if(input.value.length <4){
            input.value += num;
        }
    }

    
}



</script>