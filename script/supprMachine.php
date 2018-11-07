<?php
//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/machines-dao.php");
const INDEX = "../index-machines.php";

supprimerMachine($_POST["id"]);
unlink(__DIR__ . "/../" . $_POST["name"]);
header('Location: '. INDEX);

?>