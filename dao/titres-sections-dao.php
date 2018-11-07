<?php

require_once(__DIR__ . '/../modules/bdd_util.php');

//Fonction qui récupère les titres et les titres secondaire de chaque section
function getTitres($section){

$bdd = connectDBS();
$query = 'SELECT * FROM titres
          WHERE section = :section';
$res = $bdd->prepare($query);
$res->execute(array(":section" => $section));
$tab = $res->fetch(PDO::FETCH_ASSOC);
$bdd = null;
return $tab;
}

// Fonction qui permet de modifier les titres et les titres secondaire de chaque section.
function modificationTitres($section,$titre,$titreSecondaire){

$bdd = connectDBS();
$query = 'UPDATE titres
          SET titre = :titre, titreSecondaire = :titreSecondaire 
          WHERE section = :section';
$res = $bdd->prepare($query);
$res->execute(array(":section" => $section, ":titre" => $titre, ":titreSecondaire" => $titreSecondaire));
$bdd = null;
}
?>