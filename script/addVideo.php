<?php

//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/videos-dao.php");
const INDEX = "../";

// Check if $uploadOk is set to 0 by an error
$url          = $_POST["url"];
$titre        = $_POST["titre"];
$description  = $_POST["description"];
$tags         = $_POST["tags"];

ajouterVideo($url,$titre,$description,$tags);
header('Location: '. INDEX);

?>