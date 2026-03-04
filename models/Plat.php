<?php

require_once __DIR__ . '/../config/database.php';

class Plat {

    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM plat");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}