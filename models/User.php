<?php

require_once __DIR__ . '/../config/database.php';

class User {

    public static function findByEmail($email) {

        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM utilisateur WHERE email = ?");
        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}