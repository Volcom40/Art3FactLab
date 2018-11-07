<!DOCTYPE html>

<html lang="fr">

<head>
    <?php
    include '../includes/header-admin.php';
    ?>
</head>

<body>
    <div class="container-fluid container-bg-login bg-info">
        <div class="row justify-content-center login-padding">
            <div class="col-11 col-sm-6 col-md-5 col-lg-3 col-xl-2 login-item col-login bg-light text-center">
                <img class="mt-3" src="../img/Logos/LogoArt3Fact.png" width="150rem">
                <form class="form-signin" method="POST" action="../connexion-admin/connexion.php">
                    <?php
                    session_start();

                    if(isset($_SESSION["logged"]) &&  $_SESSION["logged"] === "nope"){
                        echo '<div class="col-lg-12 bg-danger rounded mt-3 text-white">';
                        echo "Connexion impossible, l'identifiant et/ou le mot de passe est/sont invalide(s) !";
                        echo '</div>';
                        $_SESSION["logged"] = null;
                    }
                    ?>
                    <input type="text" name="log" class="form-control item-margin" placeholder="Identifiant" required autofocus>
                    <input type="password" name="pass" class="form-control item-margin" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block item-margin" type="submit">Se connecter</button>
                    <label class="checkbox pull-left">
                </form>
            </div>
        </div>
    </div>

    <?php
    include '../includes/end-body-admin.php';
    ?>

</body>



</html>