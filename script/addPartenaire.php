<?php

//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/partenaires-dao.php");
require_once(__DIR__ . "/../modules/recupImage.php");
const INDEX = "../";

$target_dir = "../img/partenaires/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir)){
    $image       = $_FILES["fileToUpload"]["name"];
    $lien        = $_POST["lien"];


    ajouterPartenaire($image,$lien);
    header('Location: '. INDEX);
} else {
    echo "impossible d'envoyer à la bdd.";
}
?>