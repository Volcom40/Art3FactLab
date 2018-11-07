<?php

//Pour se connecter à la base de données
require_once(__DIR__ . '/../modules/bdd_util.php');

// Pour afficher tous les projets de l'atelier
function getAllProjets (){
    $bdd = connectDBS();
    $query = "SELECT * FROM `projets`
                ORDER BY epingle DESC, id DESC";
    $res = $bdd->prepare($query);
    $res->execute();
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $res->closeCursor();
    $bdd = NULL;
    return $tab; 
}
// Fonction qui permet d'ajouter un projet
function ajouterProjet($image,$description,$lien,$tags){
    $bdd = connectDBS();
    $inputs = array(':image'=>$image,':description'=>$description,':lien'=>$lien,':tags'=>$tags);
    $query = 'INSERT INTO projets(image,description,lien,tags) VALUES(:image,:description,:lien,:tags)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;
}
// Fonction qui permet de supprimer un projet
function supprimerProjet($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM projets WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;
}

// Fonction qui permet d'épingler un projet en tête de liste
function epingleProjets($id, $epingle){

    $bdd = connectDBS();
    $query = 'UPDATE projets
                SET epingle = :epingle
                WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(":epingle" => $epingle, ":id" => $id));
    $bdd = null;
}

?>