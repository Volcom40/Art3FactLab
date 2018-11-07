<?php

//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/projets-dao.php");
require_once(__DIR__ . "/../modules/recupImage.php");
const INDEX = "../";

$target_dir = "../img/projets/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir)) {
    $image       = $_FILES["fileToUpload"]["name"];
    $description = $_POST["description"];
    $lien        = $_POST["lien"];
    $tags        = $_POST["tags"];


    ajouterProjet($image,$description,$lien,$tags);
    header('Location: '. INDEX);
}
?>