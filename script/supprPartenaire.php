<?php
//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/partenaires-dao.php");
const INDEX = "../";

supprimerPartenaire($_POST["id"]);
unlink(__DIR__ . "/../" . $_POST["name"]);
header('Location: '. INDEX);

?>