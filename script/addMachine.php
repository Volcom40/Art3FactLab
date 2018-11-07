<?php

//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/machines-dao.php");
require_once(__DIR__ . "/../modules/recupImage.php");
const INDEX = "../index-machines.php";

$target_dir = "../img/machines/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir)) {
    $image       = $_FILES["fileToUpload"]["name"];
    $nom         = $_POST["nom"];
    $description = $_POST["description"];
    $url         = $_POST["url"];


    ajouterMachine($image,$nom,$description,$url);
    header('Location: '. INDEX);
}
?>