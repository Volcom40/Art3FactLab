<?php

require_once(__DIR__ . "/../dao/admin-dao.php");
session_start();

const INDEX = "../";
if($_POST["newPass1"] === $_POST["newPass2"]){
    $hash = fetchAdminSite($_SESSION["login"])["pass"];
    // echo crypt($pass, $hash) . " " . $hash;

    echo $_SESSION["login"] . "<br/>";
    echo $_POST["originalPass"] . "<br/>";
    echo $hash . "<br/>";
    echo crypt($_POST["originalPass"],$hash) . "<br/>";



    if(crypt($_POST["originalPass"],$hash) === $hash){
        modificationPass($_SESSION["login"], $_POST["newPass1"]);
        header('Location: '. INDEX);
    } else {
        echo "mauvais mot de passe";
    }
} else {
    echo "mauvaise repetition des mots de passes";
}



?>