<?php

require_once __DIR__ . '/../config/database.php';

class User {

    public static function findByEmail($email) {

        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT *
            FROM utilisateur
            WHERE email = ?
        ");

        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function findById($id) {

        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT *
            FROM utilisateur
            WHERE utilisateur_id = ?
        ");

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getEmployes() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT *
            FROM utilisateur
            WHERE role_id = 3
            ORDER BY utilisateur_id DESC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function createEmploye($data) {

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
                telephone,
                password,
                role_id
            )
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        $stmt->execute([

            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['telephone'],
            $password,
            3
        ]);

        // EMAIL EMPLOYÉ

        $to = $data['email'];

        $subject =
            "Création de votre compte employé";

        $message = "

Bonjour "
. $data['prenom'] .

",

Votre compte employé Vite Gourmand
a bien été créé.

Identifiant de connexion :

" . $data['email'] . "

Pour obtenir votre mot de passe,
merci de contacter le responsable.

Cordialement,
Vite Gourmand
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

    public static function updatePassword(
        $email,
        $password
    ) {

        $db = Database::connect();

        $hash = password_hash(
            $password,
            PASSWORD_DEFAULT
        );

        $stmt = $db->prepare("
            UPDATE utilisateur
            SET password = ?
            WHERE email = ?
        ");

        $stmt->execute([

            $hash,
            $email
        ]);
    }

    public static function delete($id) {

        $db = Database::connect();

        $stmt = $db->prepare("
            DELETE FROM utilisateur
            WHERE utilisateur_id = ?
        ");

        $stmt->execute([$id]);
    }

    public static function updateProfile(
        $id,
        $data
    ) {

        $db = Database::connect();

        $stmt = $db->prepare("
            UPDATE utilisateur
            SET
                nom = ?,
                prenom = ?,
                telephone = ?,
                ville = ?,
                adresse_postale = ?
            WHERE utilisateur_id = ?
        ");

        $stmt->execute([

            $data['nom'],
            $data['prenom'],
            $data['telephone'],
            $data['ville'],
            $data['adresse_postale'],
            $id
        ]);
    }
}