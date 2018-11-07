<?php

require_once(__DIR__ . "/../dao/logo.php");
require_once(__DIR__ . "/../modules/recupImage.php");

const INDEX = "../";

$target_dir = "../img/Logos/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir)) {
    $logo       = $_FILES["fileToUpload"]["name"];
    $id       = $_POST["id"];

    modifLogo($logo);
    header('Location: '. INDEX);;
} else {
    echo "impossible d'envoyer à la bdd.";
}

?>