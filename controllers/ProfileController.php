<?php

require_once __DIR__ . '/../models/User.php';

class ProfileController {

    public function index() {

        session_start();

        if (!isset($_SESSION['user'])) {

            die("Vous devez être connecté");
        }

        $user = User::findById(
            $_SESSION['user']['id']
        );

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            User::updateProfile(
                $_SESSION['user']['id'],
                $_POST
            );

            $message =
                "Profil mis à jour.";

            $user = User::findById(
                $_SESSION['user']['id']
            );
        }

        require_once
            __DIR__ . '/../views/profile.php';
    }
}