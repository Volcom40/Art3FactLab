<?php

//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/documents-dao.php");
require_once(__DIR__ . "/../modules/recupImage.php");
const INDEX = "../";

$target_dir = "../docs/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir,true)) {
    $doc       = $_FILES["fileToUpload"]["name"];
    $nom        = $_POST["nom"];



    ajouterDocument($nom,$doc);
    header('Location: '. INDEX);
} else {
    echo "impossible d'envoyer à la bdd.";
}
?>