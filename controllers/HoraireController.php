<?php

require_once __DIR__ . '/../models/Horaire.php';

class HoraireController {

    public function index() {

        session_start();

        if (
            !isset($_SESSION['user']) ||
            (
                $_SESSION['user']['role_id'] != 1
                &&
                $_SESSION['user']['role_id'] != 3
            )
        ) {

            die("Accès refusé");
        }

        $horaire = Horaire::get();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            Horaire::update(
                $_POST['contenu']
            );

            $message =
                "Horaires mis à jour.";

            $horaire =
                Horaire::get();
        }

        require_once
            __DIR__
            . '/../views/admin-horaires.php';
    }
}