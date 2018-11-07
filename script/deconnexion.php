<?php
session_start();
const INDEX = "../";
$admin = false;
if(isset($_SESSION["logged"]) &&  $_SESSION["logged"] === "yeah"){
    $_SESSION["logged"] = null;
    $_SESSION["login"] = "";
}
header('Location: '. INDEX);
?>