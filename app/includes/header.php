<header>
    <div class="container-fluid bg-light header-border header-padding">
        <div class="row justify-content-end">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 text-center">
                <div class="zoom">
                    <div class="image">
                        <img src="../img/Logos/LogoArt3Fact.png" class="img-fluid" width="50%">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 align-items-end text-right">
                <?php
                if($logged){
                ?>
                <p class="mr-2 user-log"><?=$user["prenom"] . " " . $user["nom"]?><p>
                <form action="script/deconnexion.php" method="POST">
                        <button type="submit" class="btn btn-danger mt-2" value="Deco" name="submit">Deconnexion</button>
                </form>
                <?php      
                }
                ?>
            </div>
        </div>
    </div>
    
</header>