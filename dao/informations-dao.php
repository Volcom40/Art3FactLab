<?php
require_once(__DIR__ . '/../modules/bdd_util.php');

// Fonction qui permet d'afficher l'ensemble des informations du footer
function getAllInformations(){
    $bdd = connectDBS();
    $query = 'SELECT * FROM informations';
    $res = $bdd->query($query);
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;
    return $tab;
}

// Fonction qui permet d'ajouter une information dans le footer
function ajouterInformation($texte){
    $bdd = connectDBS();
    $inputs = array(':texte'=>$texte);
    $query = 'INSERT INTO informations(texte) VALUES(:texte)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;
}

// Fonction qui permet de supprimer une information dans le footer
function supprimerInformation($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM informations WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;
}
?>