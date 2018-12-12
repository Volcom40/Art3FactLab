<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Art3Fact Lab - Gestion du temps d'utilisation des machines</title>
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feuilles de style personnalisées -->
    <link href="css/style-app.css" rel="stylesheet">
    <link href="../css/style-index.css" rel="stylesheet">
    <link href="../css/font-responsive.css" rel="stylesheet">
</head>
<body>

    <?php
    require_once("./dao/appdao.php");
    $logged = false;
    session_start();
    if(isset($_SESSION["appLogged"]) &&  $_SESSION["appLogged"] === "yeah"){
        $logged = true;
        $user = fetchMembre($_SESSION["id"]);
        // $user["id_famille_membre"]; // = 1 2 3 ou 4
        // $user["Fnom"]; // = Gerant Administrateur etc...
    }

    include 'includes/header.php';

    if($logged){
        if(!$user["change_mdp"]){
            include 'includes/navbar.php';
            if(!isset($_POST["tab"]) || $_POST["tab"] === "f-machines"){
                include 'includes/f-machines.php';
            } else {
                switch ($_POST["tab"]) {
                    case 'userInfos':
                        include 'includes/userInfos.php';
                        break;
                    case 'gestionnaire' :
                        include 'includes/gestion.php';
                        break;
                    case 'administrateur' :
                        include 'includes/admin.php';
                        break;
                }
            }
        } else {
            include 'includes/changePass.php';
        }
        
        
        // $_SESSION["appLogged"] = null;
    } else {
        include 'includes/login.php';
    }

    include 'includes/footer.php';
    ?>

    <!-- Bootstrap JavaScript -->
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin for JavaScript -->
    <script src="../bootstrap/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>