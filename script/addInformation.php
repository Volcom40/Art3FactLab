<?php

require_once(__DIR__ . "/../dao/informations-dao.php");

const INDEX = "../";

ajouterInformation($_POST["nom"],$_POST["url"]);
header('Location: '. INDEX);
?>