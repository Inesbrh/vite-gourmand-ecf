<?php

require_once __DIR__ . '/../config/database.php';

class Auth {

    public static function register($data) {

        $db = Database::connect();

        // HASH MOT DE PASSE

        $password = password_hash(
            $data['password'],
            PASSWORD_DEFAULT
        );

        $stmt = $db->prepare("
            INSERT INTO utilisateur (
                nom,
                prenom,
                email,
                password,
                telephone,
                ville,
                pays,
                adresse_postale,
                role_id
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $stmt->execute([

            $data['nom'],
            $data['prenom'],
            $data['email'],
            $password,
            $data['telephone'],
            $data['ville'],
            $data['pays'],
            $data['adresse_postale'],
            2
        ]);

        // EMAIL DE BIENVENUE

        $to = $data['email'];

        $subject =
            "Bienvenue chez Vite Gourmand";

        $message = "
Bonjour " . $data['prenom'] . ",

Votre compte a bien été créé sur Vite Gourmand.

Merci pour votre inscription et à bientôt !
";

        $headers =
            "From: vitegourmand@gmail.com";

        mail(
            $to,
            $subject,
            $message,
            $headers
        );
    }
}