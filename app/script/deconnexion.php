<?php
session_start();
const INDEX = "../";
$admin = false;
if(isset($_SESSION["appLogged"]) &&  $_SESSION["appLogged"] === "yeah"){
    $_SESSION["appLogged"] = null;
}
header('Location: '. INDEX);
?>