<?php

require_once __DIR__ . '/../config/database.php';

class Commande {

    public static function create($data, $menu_id, $utilisateur_id) {

        $db = Database::connect();

        $stmt = $db->prepare("
            INSERT INTO commande (
                numero_commande,
                date_commande,
                date_prestation,
                heure_livraison,
                nombre_personne,
                pret_materiel,
                statut,
                menu_id,
                utilisateur_id
            )
            VALUES (?, NOW(), ?, ?, ?, ?, ?, ?, ?)
        ");

        $numero = rand(1000,9999);

        $stmt->execute([
            $numero,
            $data['date_prestation'],
            $data['heure_livraison'],
            $data['nombre_personne'],
            $data['pret_materiel'],
            'en attente',
            $menu_id,
            $utilisateur_id
        ]);
    }

    public static function getByUser($utilisateur_id) {

        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT *
            FROM commande
            WHERE utilisateur_id = ?
            ORDER BY date_commande DESC
        ");

        $stmt->execute([$utilisateur_id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAll() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT *
            FROM commande
            ORDER BY date_commande DESC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}