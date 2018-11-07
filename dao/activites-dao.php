<?php
require_once(__DIR__ . '/../modules/bdd_util.php');

// Fonction qui permet de récupérer toutes les activités
function getAllActivites(){
    $bdd = connectDBS();
    $query = 'SELECT * FROM activite ORDER BY id DESC';
    $res = $bdd->query($query);
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;
    return $tab;
}

// Fonction qui permet d'ajouter une activité
function ajouterActivite($image,$nom){
    $bdd = connectDBS();
    $inputs = array(':image'=>$image,':nom'=>$nom);
    $query = 'INSERT INTO activite(image,nom) VALUES(:image,:nom)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;

}

// Fonction qui permet de supprimer des activités
function supprimerActivite($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM activite WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;

}
?>