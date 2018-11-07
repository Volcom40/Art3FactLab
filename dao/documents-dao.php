<?php
require_once(__DIR__ . '/../modules/bdd_util.php');

// Fonction qui permet d'afficher l'ensemble des documents
function getAllDocuments(){
    $bdd = connectDBS();
    $query = 'SELECT * FROM documents';
    $res = $bdd->query($query);
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;
    return $tab;
}

// Fonction qui permet d'ajouter un document
function ajouterDocument($nom,$doc){
    $bdd = connectDBS();
    $inputs = array(':nom'=>$nom,':doc'=>$doc);
    $query = 'INSERT INTO documents(nom, document) VALUES(:nom,:doc)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;
}

// Fonction qui permet de supprimer un document
function supprimerDocument($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM documents WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;
}
?>