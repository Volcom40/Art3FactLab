<?php

//require_once(__DIR__ . "/../dao/titres.php");
require_once(__DIR__ . "/../dao/equipe-dao.php");
require_once(__DIR__ . "/../modules/recupImage.php");
const INDEX = "../";

$target_dir = "../img/equipe/";
// Check if $uploadOk is set to 0 by an error
if (recupImage($target_dir)) {
    $image       = $_FILES["fileToUpload"]["name"];
    $nom        = $_POST["nom"];
    $description       = $_POST["description"];


    ajouterMembre($image,$nom,$description);
    header('Location: '. INDEX);
} else {
    echo "impossible d'envoyer à la bdd.";
}
?>