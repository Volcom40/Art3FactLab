<?php

require_once(__DIR__ . "/../dao/reseauxsociaux-dao.php");

const INDEX = "../";

ajouterRs($_POST["nom"],$_POST["url"]);
header('Location: '. INDEX);
?>