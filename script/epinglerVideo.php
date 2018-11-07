<?php

require_once(__DIR__ . "/../dao/videos-dao.php");
session_start();
const INDEX = "../";

epinglerVideo($_POST["id"], (isset($_POST["epingle"]) && $_POST["epingle"] =="epingler") ? 1 : 0);
header('Location: '. INDEX);

?>