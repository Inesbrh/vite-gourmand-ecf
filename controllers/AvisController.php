<?php

require_once __DIR__ . '/../models/Avis.php';
require_once __DIR__ . '/../models/Commande.php';

class AvisController {

    public function create() {

        session_start();

        if (!isset($_SESSION['user'])) {

            die("Vous devez être connecté");
        }

        $commande_id = $_GET['commande_id'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            Avis::create(
                $_POST,
                $_SESSION['user']['id'],
                $commande_id
            );

            $message = "Avis envoyé avec succès.";

            require_once __DIR__ . '/../views/avis.php';

            exit;
        }

        require_once __DIR__ . '/../views/avis.php';
    }

    public function adminAvis() {

        session_start();

        if (
            $_SESSION['user']['role_id'] != 1 &&
            $_SESSION['user']['role_id'] != 3
        ) {

            die("Accès refusé");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            Avis::updateStatus(
                $_POST['avis_id'],
                $_POST['statut']
            );
        }

        $avis = Avis::getAll();

        require_once __DIR__ . '/../views/admin-avis.php';
    }
}