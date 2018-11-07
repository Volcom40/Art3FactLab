<?php
//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/documents-dao.php");
const INDEX = "../";

supprimerDocument($_POST["id"]);
unlink(__DIR__ . "/../" . $_POST["name"]);
header('Location: '. INDEX);

?>