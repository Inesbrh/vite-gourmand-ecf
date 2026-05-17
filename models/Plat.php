<?php

require_once __DIR__ . '/../config/database.php';

class Plat {

    public static function getByMenu($menu_id) {

        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT p.*
            FROM plat p
            JOIN menu_plat mp ON p.plat_id = mp.plat_id
            WHERE mp.menu_id = ?
        ");

        $stmt->execute([$menu_id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}