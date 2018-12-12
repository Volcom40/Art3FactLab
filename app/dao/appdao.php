<?php
require_once(__DIR__. '/../../modules/bdd_util.php');


// Créer un nouvel utilisateur d’après un tableau associatif

function fetchAllMembres()
{
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT membre.*, famille_membre.Fnom FROM membre
                        JOIN famille_membre ON membre.id_famille_membre = famille_membre.id");
    $req->execute();
    $tab = $req->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;

    return $tab;
}

function fetchMembre($id)
{
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT membre.*, famille_membre.Fnom FROM membre
                        JOIN famille_membre ON membre.id_famille_membre = famille_membre.id
                        WHERE membre.id = :id");
    $req->execute(array(":id"=>$id));
    $tab = $req->fetch(PDO::FETCH_ASSOC);
    $bdd = null;

    return $tab;
}

function changeMDP($id, $mdp)
{
    $bdd = connectDBS();

    $inputs = array(':id'=>$id, ':mdp'=>$mdp);
    $query = 'UPDATE membre
              SET mdp = :mdp,
                  change_mdp = 0
              WHERE id = :id';
    $res = $bdd->prepare($query);
    $res->execute($inputs);

    $bdd = null;
}

function fetchFamilleMachines()
{
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT * FROM famille_machine");
    $req->execute();
    $tab = $req->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;

    return $tab;
}

function recupMachinefromFamille($idFamille)
{
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT machine.*, etat.Enom, etat.id AS Eid, etat.color FROM machine
                        JOIN famille_machine ON machine.id_famille_machine = famille_machine.id
                        JOIN etat ON machine.id_etat = etat.id
                        WHERE famille_machine.id = :id");
    $req->execute(array(":id" => $idFamille));
    $tab = $req->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;

    return $tab;
}

function setState($machine, $etat)
{
    $bdd = connectDBS();

    $inputs = array(':machine'=>$machine, ':etat' => $etat);
    $query = 'UPDATE machine
              SET id_etat = :etat
              WHERE id = :machine';
    $res = $bdd->prepare($query);
    $res->execute($inputs);

    $bdd = null;
}

function utiliser($user, $machine)
{
    $bdd = connectDBS();

    // ajoute la machine dans la table des utilisations en cours
    $inputs = array(':machine'=>$machine,':membre'=>$user, ':date'=>date("Y-m-j H:i:s"));
    $query = 'INSERT INTO utilisation(id_machine, id_membre, date_deb)
              VALUES(:machine,:membre,:date)';
    $res = $bdd->prepare($query);
    $res->execute($inputs);

    //change l'état de la machine à en utilisation
    setState($machine, 2);
    $bdd = null;
}

function isUsing($machine, $membre)
{
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT * FROM utilisation
                        WHERE id_machine = :machine AND id_membre = :membre");
    $req->execute(array(":machine"=>$machine, ":membre"=>$membre));
    $tab = $req->fetch(PDO::FETCH_ASSOC);
    $bdd = null;

    return $tab == null;
}

function finUtiliser($user, $machine)
{
    $bdd = connectDBS();

    $inputs = array(':machine'=>$machine,':membre'=>$user);
    // $query =   'INSERT INTO utiliser
    //             VALUES (:machine,
    //                     :membre,
    //                     (SELECT TIMESTAMPDIFF(MINUTE,
    //                                                 (SELECT date_deb FROM utilisation WHERE id_membre = :membre AND id_machine = :machine),
    //                                                 NOW()
    //                                          )
    //                     ),
    //                     (SELECT date_deb FROM utilisation WHERE id_membre = :membre AND id_machine = :machine)
    //                 )
    //             ';

    $query = '  INSERT INTO utiliser(id_machine, id_membre, temps_utilisation, date_utilisation)
                SELECT id_machine, id_membre, TIMESTAMPDIFF(minute, date_deb, now()), date_deb
                FROM `utilisation`
                WHERE utilisation.id_membre = :membre AND utilisation.id_machine = :machine';
    $res = $bdd->prepare($query);
    $res->execute($inputs);

    $query = '  DELETE FROM utilisation
                WHERE id_membre = :membre AND id_machine = :machine';
    $res = $bdd->prepare($query);
    $res->execute($inputs);
    
    //change l'état de la machine à en Disponible
    setState($machine, 1);

    $bdd = null;
}

function getMemberUtilisation($membre)
{
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT utiliser.*, machine.*, famille_machine.*, membre.tarif_reduit FROM utiliser
                        JOIN machine ON id_machine = machine.id
                        JOIN famille_machine on machine.id_famille_machine = famille_machine.id
                        JOIN membre ON id_membre = membre.id
                        WHERE id_membre = :membre
                        ORDER BY utiliser.date_utilisation DESC");
    $req->execute(array(":membre"=>$membre));
    $tab = $req->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;

    return $tab;
}

function getRecapUtilisations()
{
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT membre.id, membre.nom, membre.prenom, membre.tarif_reduit, 
    SUM(
        IF(utiliser.paye,
           0,
           (IF(membre.tarif_reduit,
               machine.tarif_horaire_reduit,
               machine.tarif_horaire_normal)
            / 60
           ) * utiliser.temps_utilisation)
    ) AS 'a_payer'

    FROM membre
    JOIN utiliser ON membre.id = utiliser.id_membre
    JOIN machine ON machine.id = utiliser.id_machine

    GROUP BY membre.id
    ORDER BY a_payer DESC");
    
    $req->execute();
    $tab = $req->fetchAll(PDO::FETCH_ASSOC);
    $bdd = null;

    return $tab;
}

function etatPaye($machine, $membre, $paye)
{
    $bdd = connectDBS();

    $inputs = array(':machine'=>$machine,':membre'=>$membre, ':paye' => $paye);
    $query = 'UPDATE utiliser
              SET paye = :paye
              WHERE id_machine = :machine AND id_membre = :membre';
    $res = $bdd->prepare($query);
    $res->execute($inputs);

    $bdd = null;
}

function quiUtilise($machine)
{
    $bdd = connectDBS();
    $req=$bdd->prepare("SELECT nom,prenom FROM membre
                        JOIN utilisation ON membre.id = utilisation.id_membre
                        WHERE id_machine = :machine");
    $req->execute(array(":machine"=>$machine));
    $tab = $req->fetch(PDO::FETCH_ASSOC);
    $bdd = null;

    return $tab["nom"] . " " . $tab["prenom"];
}
