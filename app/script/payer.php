<?php

require_once(__DIR__ . "/../dao/appdao.php");
session_start();
const INDEX = "../";

etatPaye($_POST["machine"], $_POST["membre"], (isset($_POST["paye"]) && $_POST["paye"] =="payer") ? 1 : 0);
header('Location: '. INDEX);

?>