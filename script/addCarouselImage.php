<?php

//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/carousel-dao.php");
require_once(__DIR__ . "/../modules/recupImage.php");
const INDEX = "../";

$target_dir = "../img/carousel/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir)) {
    ajouterImgCarousel($_FILES["fileToUpload"]["name"], $_POST["titre"], $_POST["description"]);
    header('Location: '. INDEX);
}
?>