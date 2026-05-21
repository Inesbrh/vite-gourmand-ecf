<?php

require_once __DIR__ . '/../config/database.php';

class Horaire {

    public static function get() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT *
            FROM horaires
            LIMIT 1
        ");

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($contenu) {

        $db = Database::connect();

        $stmt = $db->prepare("
            UPDATE horaires
            SET contenu = ?
            WHERE horaires_id = 1
        ");

        $stmt->execute([$contenu]);
    }
}