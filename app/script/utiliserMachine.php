<?php
require_once(__DIR__ . "/../dao/appdao.php");
session_start();
const INDEX = "../";

$unUsed = isUsing( $_POST["idMachine"], $_SESSION["id"]);

if($unUsed){
    utiliser($_SESSION["id"], $_POST["idMachine"]);
} else {
    finUtiliser($_SESSION["id"], $_POST["idMachine"]);
}

header('Location: '. INDEX);

?>