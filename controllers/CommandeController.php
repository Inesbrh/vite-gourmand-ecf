<?php

require_once __DIR__ . '/../models/Commande.php';

class CommandeController {

    public function create() {

        session_start();

        if (!isset($_SESSION['user'])) {
            die("Vous devez être connecté");
        }

        $menu_id = $_GET['menu_id'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            Commande::create(
                $_POST,
                $menu_id,
                $_SESSION['user']['id']
            );

            echo "Commande enregistrée";
            exit;
        }

        require_once __DIR__ . '/../views/commande.php';
    }

    public function mesCommandes() {

        session_start();

        if (!isset($_SESSION['user'])) {

            die("Vous devez être connecté");
        }

        $commandes = Commande::getByUser($_SESSION['user']['id']);

        require_once __DIR__ . '/../views/mes-commandes.php';
    }

    public function adminCommandes() {

        session_start();

        if (
            $_SESSION['user']['role_id'] != 1 &&
            $_SESSION['user']['role_id'] != 3
        ) {
            die("Accès refusé");
        }
        $commandes = Commande::getAll();

        require_once __DIR__ . '/../views/admin-commandes.php';
    }
}