<?php
namespace app\models;

use Flight;

class MvtTrajet {

    public static function getAllChauffeurs() {
        return Flight::db()->query("SELECT * FROM tbChauffeurs")->fetchAll();
    }

    public static function getAllVehicules() {
        return Flight::db()->query("SELECT * FROM tbVehicules")->fetchAll();
    }

    public static function getAllTrajets() {
        return Flight::db()->query("SELECT * FROM tbTrajets")->fetchAll();
    }

    public static function save($data) {
        $sql = "INSERT INTO tbMvtTrajet(dateDebut,dateFin,idChauffeur,idVehicule,idTrajet,montantRecette,montantCarburant,panne)
                VALUES (:dateDebut,:dateFin,:idChauffeur,:idVehicule,:idTrajet,:recette,:carburant,:panne)";

        $stm = Flight::db()->prepare($sql);
        return $stm->execute($data);
    }
}
