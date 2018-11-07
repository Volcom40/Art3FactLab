<?php
require_once(__DIR__ . '/../modules/bdd_util.php');

// Fonction qui permet d'afficher tous les partenaires
function getAllPartenaires(){
    $bdd = connectDBS();
    $query = 'SELECT * FROM partenaire ORDER BY id DESC';
    $res = $bdd->query($query);
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;
    return $tab;
}


// Fonction qui permet d'ajouter un partenaire
function ajouterPartenaire($image,$lien){
    $bdd = connectDBS();
    $inputs = array(':image'=>$image,':lien'=>$lien);
    $query = 'INSERT INTO partenaire(image,lien) VALUES(:image,:lien)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;
}


// Fonction qui permet de supprimer un partenaire
function supprimerPartenaire($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM partenaire WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;

}
?>