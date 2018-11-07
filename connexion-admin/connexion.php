<?php
    require_once(__DIR__.'/../dao/admin-dao.php');
    $log = $_POST["log"];
    $pass = $_POST["pass"];

    const LOGIN = "../admin/";
    const INDEX = "../";

    session_start();
    // insertAdmin($log,$pass);
    // insertAdmin($log,$pass);
    $hash = fetchAdminSite($log)["pass"];
    // echo crypt($pass, $hash) . " " . $hash;
    if(crypt($pass,$hash) === $hash){
        $_SESSION["logged"] = "yeah";
        $_SESSION["login"] = $_POST["log"];
        header('Location: '. INDEX);
    } else {
        $_SESSION["login"] = "";
        $_SESSION["logged"] = "nope";
        header('Location: '. LOGIN);
    }


?>