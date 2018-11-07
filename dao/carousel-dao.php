<?php

//Pour se connecter à la base de données
require_once(__DIR__ . '/../modules/bdd_util.php');

// Pour afficher toutes les images du carousel ainsi que tous les différents éléments (titres et sous-titres)
function getAllCarousel(){
    $bdd = connectDBS();
    $query = "SELECT * FROM `carousel`";
    $res = $bdd->prepare($query);
    $res->execute();
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $res->closeCursor();
    $bdd = NULL;
    return $tab; 
}

/**
 * ajouter un projet
 * @param $image : adresse de l'image
 * @param $title : titre du projet
 * @param $description : description du projet
 */
function ajouterImgCarousel($image,$titre,$description){
    $bdd = connectDBS();
    $inputs = array(':image'=>$image,':titre'=>$titre,':description'=>$description);
    $query = 'INSERT INTO carousel(image,titre,description) VALUES(:image,:titre,:description)';
    $res = $bdd->prepare($query);
    $tab = $res->execute($inputs);
    $bdd = null;

}

/**
 * ajouter un projet
 * @param $url : url du projet
 */
function supprimerImgCarousel($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM carousel WHERE id = :id';
    $res = $bdd->prepare($query);
    $tab = $res->execute(array(':id'=>$id));
    $bdd = null;

}
?>