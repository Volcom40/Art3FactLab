<?php
require_once(__DIR__ . '/../modules/bdd_util.php');

// Fonction qui permet d'afficher l'ensemble des réseauxsociaux
function getAllRs(){
    $bdd = connectDBS();
    $query = 'SELECT * FROM reseauxsociaux';
    $res = $bdd->query($query);
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;
    return $tab;
}

// Fonction qui permet d'ajouter un réseau social
function ajouterRs($nom,$lien){
    $bdd = connectDBS();
    $inputs = array(':nom'=>$nom,':lien'=>$lien);
    $query = 'INSERT INTO reseauxsociaux(nom, lien) VALUES(:nom,:lien)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;
}

// Fonction qui permet de supprimer un réseau social
function supprimerRs($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM reseauxsociaux WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;
}
?>