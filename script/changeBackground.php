<?php

require_once(__DIR__ . "/../dao/background-dao.php");
require_once(__DIR__ . "/../modules/recupImage.php");

const INDEX = "../";

$target_dir = "../img/background/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir)) {
    $background       = $_FILES["fileToUpload"]["name"];
    $id       = $_POST["id"];
    print_r($background);
    modificationBackground($id,$background);
    header('Location: '. INDEX);;
} else {
    echo "impossible d'envoyer à la bdd.";
}

?>