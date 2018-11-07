<?php
require_once(__DIR__ . '/../modules/bdd_util.php');


// Va chercher l'ensemble des admins présent dans la table administrateur-site 
function fetchAdminSite($login){
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT * FROM administrateur_site WHERE login= :login");
    $req->execute(array(':login' => $login ));
    $reponse = $req->fetch(PDO::FETCH_ASSOC);
    $bdd = NULL;

    if($reponse !== null){
        return $reponse;
    } else {
        return false;
    }  
}
// Fonction qui permet d'ajouter un compte administrateur
function insertionAdmin($log,$pass){
    $salt = "AGfioeqhgjvi5gs654kvh8uxvk;h:"; //random_bytes(20);
    $hash = crypt($pass,$salt);

    $bdd = connectDBS();
    $req=$bdd->prepare("INSERT INTO administrateur_site(login,pass) VALUES (:log,:pass)");
    $req->execute(array(":log" => $log, ":pass" => $hash));
    $bdd = NULL;
}

// Fonction qui permet de modifier son mot de passe
function modificationPass($log, $newPass){

    $salt = "svkgjbclkv;:'çzèitughckqz(-wet845dh12"; //random_bytes(20);
    $hash = crypt($newPass,$salt);

    $bdd = connectDBS();
    $req=$bdd->prepare("UPDATE administrateur_site SET pass = :pass WHERE login = :log");
    $req->execute(array(":log" => $log, ":pass" => $hash));
    $bdd = NULL;
}