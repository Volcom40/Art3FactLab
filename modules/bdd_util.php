<?php

require_once(__DIR__.'/../config/config.php');

function connectDBS() {
    //Connexion a la base
    //On test les paramètres entrés dans le fichier config.php
    try {
        $bdd = new PDO('mysql:host='. DBS_HOST .'; dbname='. DBS_BASE . ';charset=utf8', DBS_USER, DBS_PASS, 
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    ); 
        //Si les paramètres du fichier config.php sont bons, on accède à la bdd
        return $bdd;
    //Si les paramètres ne sont pas bons, on envoie un message d'erreur.
    } catch (PDOException $err) {
        $msg = 'ERREUR PDO dans ' . $err->getFile() . ' L.' . $err->getLine() . ' : ' . $err->getMessage(); 
        // die($msg);
        
    }
}

?>