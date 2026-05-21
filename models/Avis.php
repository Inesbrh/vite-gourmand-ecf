<?php

require_once __DIR__ . '/../config/database.php';

class Avis {

    public static function create(
        $data,
        $utilisateur_id,
        $commande_id
    ) {

        $db = Database::connect();

        $stmt = $db->prepare("
            INSERT INTO avis (
                note,
                description,
                statut,
                utilisateur_id,
                commande_id
            )
            VALUES (?, ?, ?, ?, ?)
        ");

        $stmt->execute([
            $data['note'],
            $data['description'],
            'en attente',
            $utilisateur_id,
            $commande_id
        ]);
    }

    public static function getAllValides() {

        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT *
            FROM avis
            WHERE statut = 'validé'
            ORDER BY avis_id DESC
        ");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAll() {

        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT *
            FROM avis
            ORDER BY avis_id DESC
        ");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function updateStatus(
        $avis_id,
        $statut
    ) {

        $db = Database::connect();

        $stmt = $db->prepare("
            UPDATE avis
            SET statut = ?
            WHERE avis_id = ?
        ");

        $stmt->execute([
            $statut,
            $avis_id
        ]);
    }

    public static function countAvis() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT COUNT(*) as total
            FROM avis
        ");

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['total'];
    }
}