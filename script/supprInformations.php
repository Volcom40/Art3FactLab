<?php
require_once(__DIR__ . "/../dao/informations-dao.php");
const INDEX = "../";

supprimerInformation($_POST["id"]);
header('Location: '. INDEX);

?>