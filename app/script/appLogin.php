<?php
require_once(__DIR__ . "/../dao/appdao.php");
echo $_POST["id"] . "<br/>";
$membre = fetchMembre($_POST["id"]);

const INDEX = "../";
session_start();

if($membre["mdp"] == $_POST["pass"]){
    $_SESSION["appLogged"] = "yeah";
    $_SESSION["id"] = $_POST["id"];
    header('Location: '. INDEX);
} else {
    $_SESSION["appLogged"] = "nope";
    $_SESSION["id"] = $_POST["id"];
    header('Location: '. INDEX);
}

?>