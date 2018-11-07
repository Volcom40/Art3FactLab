<?php
require_once(__DIR__ . '/../modules/bdd_util.php');

// fonction qui permet d'afficher l'ensemble des vidéos
function GetAllVideos(){
    $bdd = connectDBS();
    $query = 'SELECT * FROM video
              ORDER BY epingle DESC, id DESC';
    $res = $bdd->query($query);
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;
    return $tab;
}

// Fonction qui permet d'ajouter des vidéos
function ajouterVideo($url,$titre,$description,$tags){
    $bdd = connectDBS();
    $inputs = array(':url'=>$url,':titre'=>$titre,':description'=>$description,':tags'=>$tags);
    $query = 'INSERT INTO video(url,titre,description,tags) VALUES(:url,:titre,:description, :tags)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    $bdd = null;
}

// Fonction qui permet de supprimer des vidéos
function supprimerVideo($id){
    $bdd = connectDBS();
    $query = 'DELETE FROM video WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(':id'=>$id));
    $bdd = null;
}

// Fonction qui permet d'éplinger des vidéos en tête de liste
function epinglerVideo($id, $epingle){

    $bdd = connectDBS();
    $query = 'UPDATE video
                SET epingle = :epingle
                WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute(array(":epingle" => $epingle, ":id" => $id));
    $bdd = null;
    
}
?>