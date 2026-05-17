<?php

require_once __DIR__ . '/../config/database.php';

class Menu {

    public static function getAll() {

        $db = Database::connect();

        $stmt = $db->query("SELECT * FROM menu");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {

    $db = Database::connect();

    $stmt = $db->prepare("
        SELECT *
        FROM menu
        WHERE menu_id = ?
    ");

    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}