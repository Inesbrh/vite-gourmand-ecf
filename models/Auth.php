<?php

require_once __DIR__ . '/../config/database.php';

class Auth {

    public static function register($data) {

        $db = Database::connect();

        $stmt = $db->prepare("
            INSERT INTO utilisateur (
                prenom,
                email,
                password,
                telephone,
                ville,
                pays,
                adresse_postale,
                role_id
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $stmt->execute([

            $data['prenom'],
            $data['email'],
            $data['password'],
            $data['telephone'],
            $data['ville'],
            $data['pays'],
            $data['adresse_postale'],
            2
        ]);
    }
}