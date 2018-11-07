<?php

require_once(__DIR__ . "/../dao/projets-dao.php");
session_start();
const INDEX = "../";

epingleProjets($_POST["id"], (isset($_POST["epingle"]) && $_POST["epingle"] =="epingler") ? 1 : 0);
header('Location: '. INDEX);

?>