<?php
require_once(__DIR__ . "/../dao/reseauxsociaux-dao.php");
const INDEX = "../";

supprimerRs($_POST["id"]);
header('Location: '. INDEX);

?>