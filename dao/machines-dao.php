<?php

//Pour se connecter à la base de données
require_once(__DIR__ . '/../modules/bdd_util.php');

// Pour afficher toutes les machines de l'atelier
function getAllMachines (){
    $bdd = connectDBS();
    $query = "SELECT * FROM `machines`
                ORDER BY id DESC";
    $res = $bdd->prepare($query);
    $res->execute();
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $res->closeCursor();
    $bdd = NULL;
    return $tab; 
}
// Fonction qui permet d'ajouter une machine
function ajouterMachine($image,$nom,$description,$lien){
    $bdd = connectDBS();
    $inputs = array(':image'=>$image,':nom'=>$nom,':description'=>$description,':lien'=>$lien);
    $query = 'INSERT INTO machines(image,nom,description,lien) VALUES(:image,:nom,:description,:lien)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;
}
// Fonction qui permet de supprimer un projet
function supprimerMachine($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM machines WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;
}
?>