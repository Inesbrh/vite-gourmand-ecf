<?php

require_once __DIR__ . '/../models/Menu.php';
require_once __DIR__ . '/../models/Commande.php';
require_once __DIR__ . '/../models/Avis.php';

class DashboardController {

    public function index() {

        session_start();

        if (
            !isset($_SESSION['user']) ||
            (
                $_SESSION['user']['role_id'] != 1 &&
                $_SESSION['user']['role_id'] != 3
            )
        ) {

            die("Accès refusé");
        }

        $totalMenus =
            Menu::countMenus();

        $totalCommandes =
            Commande::countCommandes();

        $statsEmployes =
            Commande::statsEmployes();

        $totalAvis =
            Avis::countAvis();

        require_once
            __DIR__ . '/../views/dashboard.php';
    }
}