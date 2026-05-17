<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Auth.php';

class AuthController {

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = User::findByEmail($email);

            if ($user && $password === $user['password']) {

                session_start();

                $_SESSION['user'] = [
                    'id' => $user['utilisateur_id'],
                    'prenom' => $user['prenom'],
                    'role_id' => $user['role_id']
                ];

                header('Location: ?page=home');
                exit;

            } else {

                echo "Email ou mot de passe incorrect";

            }
        }

        require_once __DIR__ . '/../views/login.php';
    }

    public function logout() {

        session_start();

        session_destroy();

        header('Location: ?page=home');
        exit;
    }

    public function register() {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        Auth::register($_POST);

        header('Location: ?page=login');
        exit;
    }

    require_once __DIR__ . '/../views/register.php';
    }

}