<?php

require_once(__DIR__ . '/../modules/bdd_util.php');

// Fonction qui récupère l'image en arrière plan d'une section
function getBackground($id){

    $bdd = connectDBS($id);
    $query = 'SELECT background FROM titres
              WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(":id" => $id));
    $tab = $res->fetch(PDO::FETCH_ASSOC);
    $bdd = null;
    return $tab;
}

// Fonction qui permet de modifier une image d'arrière plan d'une section
function modificationBackground($id,$background){

    echo "$id et $background";
    $bdd = connectDBS();
    $query = 'UPDATE titres
              SET background = :background
              WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(":background" => $background, ":id" => $id));
    $bdd = null;
}

?>