<?php

//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/activites-dao.php");
require_once(__DIR__ . "/../modules/recupImage.php");
const INDEX = "../";

$target_dir = "../img/activites/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir)) {
    $image       = $_FILES["fileToUpload"]["name"];
    $nom       = $_POST["nom"];


    ajouterActivite($image,$nom);
    header('Location: '. INDEX);
} else {
    echo "impossible d'envoyer à la bdd.";
}
?>