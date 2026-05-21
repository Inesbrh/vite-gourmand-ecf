<?php

require_once __DIR__ . '/../models/User.php';

class ForgotPasswordController {

    public function index() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email =
                $_POST['email'];

            $password =
                $_POST['password'];

            User::updatePassword(
                $email,
                $password
            );

            $message =
                "Mot de passe mis à jour.";
        }

        require_once
            __DIR__ . '/../views/forgot-password.php';
    }
}