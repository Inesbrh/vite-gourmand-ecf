<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Auth.php';

class AuthController {

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email =
                $_POST['email'];

            $password =
                $_POST['password'];

            $user =
                User::findByEmail($email);

            if (

                $user &&

                password_verify(
                    $password,
                    $user['password']
                )

            ) {

                session_start();

                $_SESSION['user'] = [

                    'id' =>
                        $user['utilisateur_id'],

                    'prenom' =>
                        $user['prenom'],

                    'role_id' =>
                        $user['role_id']
                ];

                // RETOUR MENU APRÈS LOGIN

                if (isset($_GET['menu_id'])) {

                    header(
                        'Location: ?page=commande&menu_id='
                        . $_GET['menu_id']
                    );

                } else {

                    header(
                        'Location: ?page=home'
                    );
                }

                exit;

            } else {

                $error =
                    "Email ou mot de passe incorrect";
            }
        }

        require_once
            __DIR__ . '/../views/login.php';
    }

    public function logout() {

        session_start();

        session_destroy();

        header('Location: ?page=home');

        exit;
    }

    public function register() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $password =
                $_POST['password'];

            // SÉCURITÉ MOT DE PASSE

            if (

                strlen($password) < 10 ||

                !preg_match('/[A-Z]/', $password) ||

                !preg_match('/[a-z]/', $password) ||

                !preg_match('/[0-9]/', $password) ||

                !preg_match('/[\W]/', $password)

            ) {

                $error =
                    "Le mot de passe doit contenir au minimum 10 caractères avec une majuscule, une minuscule, un chiffre et un caractère spécial.";

                require_once
                    __DIR__
                    . '/../views/register.php';

                exit;
            }

            Auth::register($_POST);

            header('Location: ?page=login');

            exit;
        }

        require_once
            __DIR__
            . '/../views/register.php';
    }
}