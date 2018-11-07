<?php
//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/videos-dao.php");
const INDEX = "../";

supprimerVideo($_POST["id"]);
header('Location: '. INDEX);

?>