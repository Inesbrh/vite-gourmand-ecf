<?php

require_once __DIR__ . '/../config/database.php';

class Commande {

    public static function create(
        $data,
        $menu_id,
        $utilisateur_id
    ) {

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

        $numero = rand(1000, 9999);

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
            SELECT
                commande.*,
                menu.titre
            FROM commande

            INNER JOIN menu
            ON commande.menu_id =
            menu.menu_id

            WHERE utilisateur_id = ?

            ORDER BY date_commande DESC
        ");

        $stmt->execute([$utilisateur_id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAll() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT
                commande.*,
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.telephone,
                utilisateur.email,
                menu.titre
            FROM commande

            INNER JOIN utilisateur
            ON commande.utilisateur_id =
            utilisateur.utilisateur_id

            INNER JOIN menu
            ON commande.menu_id =
            menu.menu_id

            ORDER BY date_commande DESC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function updateStatus(
        $numero_commande,
        $statut
    ) {

        $db = Database::connect();

        $stmt = $db->prepare("
            UPDATE commande
            SET statut = ?
            WHERE numero_commande = ?
        ");

        $stmt->execute([

            $statut,
            $numero_commande
        ]);
    }

    public static function countCommandes() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT COUNT(*) as total
            FROM commande
        ");

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['total'];
    }

    public static function delete($numero_commande) {

        $db = Database::connect();

        $stmt = $db->prepare("
            DELETE FROM commande
            WHERE numero_commande = ?
            AND statut = 'en attente'
        ");

        $stmt->execute([$numero_commande]);
    }

    public static function filterByStatus($statut) {

        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT
                commande.*,
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.telephone,
                utilisateur.email,
                menu.titre
            FROM commande

            INNER JOIN utilisateur
            ON commande.utilisateur_id =
            utilisateur.utilisateur_id

            INNER JOIN menu
            ON commande.menu_id =
            menu.menu_id

            WHERE commande.statut = ?

            ORDER BY date_commande DESC
        ");

        $stmt->execute([$statut]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function searchByNumero(
        $numero_commande
    ) {

        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT
                commande.*,
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.telephone,
                utilisateur.email,
                menu.titre
            FROM commande

            INNER JOIN utilisateur
            ON commande.utilisateur_id =
            utilisateur.utilisateur_id

            INNER JOIN menu
            ON commande.menu_id =
            menu.menu_id

            WHERE commande.numero_commande
            LIKE ?

            ORDER BY date_commande DESC
        ");

        $stmt->execute([
            '%' . $numero_commande . '%'
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function assignEmploye(
        $numero_commande,
        $employe_id
    ) {

        $db = Database::connect();

        $stmt = $db->prepare("
            UPDATE commande
            SET employe_id = ?
            WHERE numero_commande = ?
        ");

        $stmt->execute([

            $employe_id,
            $numero_commande
        ]);
    }

   public static function statsEmployes() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT

                utilisateur.prenom,
                utilisateur.nom,

                COUNT(commande.numero_commande)
                as total_commandes

            FROM commande

            INNER JOIN utilisateur
            ON commande.employe_id =
            utilisateur.utilisateur_id

            WHERE commande.employe_id IS NOT NULL

            GROUP BY commande.employe_id

            ORDER BY total_commandes DESC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}