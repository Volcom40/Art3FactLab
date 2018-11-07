<?php
//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/carousel-dao.php");
const INDEX = "../";

supprimerImgCarousel($_POST["id"]);
unlink(__DIR__ . "/../" . $_POST["name"]);
header('Location: '. INDEX);

?>