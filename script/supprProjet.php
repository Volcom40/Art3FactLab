<?php
//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/projets-dao.php");
const INDEX = "../";

supprimerProjet($_POST["id"]);
unlink(__DIR__ . "/../" . $_POST["name"]);
header('Location: '. INDEX);

?>