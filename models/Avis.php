<?php

require_once __DIR__ . '/../config/database.php';

class Avis {

    public static function getAllValides() {

        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM avis WHERE statut = 1");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}