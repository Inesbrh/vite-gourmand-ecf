<?php

require_once __DIR__ . '/../models/User.php';

class AdminUserController {

    public function index() {

        session_start();

        if (
            !isset($_SESSION['user']) ||
            $_SESSION['user']['role_id'] != 1
        ) {

            die("Accès refusé");
        }

        $employes = User::getEmployes();

        require_once
            __DIR__ . '/../views/admin-users.php';
    }

    public function add() {

        session_start();

        if (
            !isset($_SESSION['user']) ||
            $_SESSION['user']['role_id'] != 1
        ) {

            die("Accès refusé");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            User::createEmploye($_POST);

            header('Location: ?page=admin-users');
            exit;
        }

        require_once
            __DIR__ . '/../views/add-user.php';
    }

    public function delete() {

        session_start();

        if (
            !isset($_SESSION['user']) ||
            $_SESSION['user']['role_id'] != 1
        ) {

            die("Accès refusé");
        }

        User::delete($_GET['id']);

        header('Location: ?page=admin-users');
        exit;
    }
}