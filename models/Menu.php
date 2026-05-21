<?php

require_once __DIR__ . '/../config/database.php';

class Menu {

    public static function getAll() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT *
            FROM menu
        ");

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

   public static function create($data) {

    $db = Database::connect();

    $stmt = $db->prepare("
        INSERT INTO menu (
            titre,
            description,
            prix_par_personne,
            nombre_personne_minimum,
            regime,
            theme,
            allergenes,
            conditions_menu,
            quantite_restante,
            image,
            image1,
            image2,
            image3
        )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->execute([

        $data['titre'],
        $data['description'],
        $data['prix_par_personne'],
        $data['nombre_personne_minimum'],
        $data['regime'],
        $data['theme'],
        $data['allergenes'],
        $data['conditions_menu'],
        $data['quantite_restante'],

        $data['image'],
        $data['image1'],
        $data['image2'],
        $data['image3']
    ]);
}

    public static function delete($id) {

        $db = Database::connect();

        $stmt = $db->prepare("
            DELETE FROM menu
            WHERE menu_id = ?
        ");

        $stmt->execute([$id]);
    }

    public static function decreaseStock($menu_id) {

        $db = Database::connect();

        $stmt = $db->prepare("
            UPDATE menu
            SET quantite_restante = quantite_restante - 1
            WHERE menu_id = ?
            AND quantite_restante > 0
        ");

        $stmt->execute([$menu_id]);
    }

    public static function countMenus() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT COUNT(*) as total
            FROM menu
        ");

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['total'];
    }
}