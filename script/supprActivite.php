<?php
//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/activites-dao.php");
const INDEX = "../";

supprimerActivite($_POST["id"]);
unlink(__DIR__ . "/../" . $_POST["nom"]);
header('Location: '. INDEX);

?>