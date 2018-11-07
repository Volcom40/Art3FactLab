<?php
require_once(__DIR__ . '/../modules/bdd_util.php');

// Fonction qui récupère tous les membres de l'équipe
function getAllMembre(){
    $bdd = connectDBS();
    $query = 'SELECT * FROM equipe';
    $res = $bdd->query($query);
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;
    return $tab;
}
// Fonction qui permet d'ajouter un membre dans l'équipe
function ajouterMembre($image,$nom,$description){
    $bdd = connectDBS();
    $inputs = array(':image'=>$image,':nom'=>$nom,':description'=>$description);
    $query = 'INSERT INTO equipe(image,nom,description) VALUES(:image,:nom,:description)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;
}

// Fonction qui permet de supprimer un membre de l'équipe
function supprimerMembre($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM equipe WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;
}
?>