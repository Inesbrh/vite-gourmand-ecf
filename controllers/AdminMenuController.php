<?php

require_once __DIR__ . '/../models/Menu.php';

class AdminMenuController {

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

        $menus = Menu::getAll();

        require_once
            __DIR__ . '/../views/admin-menus.php';
    }

    public function add() {

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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // IMAGE PRINCIPALE

            $image =
                $_FILES['image']['name'];

            move_uploaded_file(

                $_FILES['image']['tmp_name'],

                __DIR__
                . '/../public/assets/img/'
                . $image
            );

            // IMAGE 1

            $image1 =
                $_FILES['image1']['name'];

            if ($image1) {

                move_uploaded_file(

                    $_FILES['image1']['tmp_name'],

                    __DIR__
                    . '/../public/assets/img/'
                    . $image1
                );
            }

            // IMAGE 2

            $image2 =
                $_FILES['image2']['name'];

            if ($image2) {

                move_uploaded_file(

                    $_FILES['image2']['tmp_name'],

                    __DIR__
                    . '/../public/assets/img/'
                    . $image2
                );
            }

            // IMAGE 3

            $image3 =
                $_FILES['image3']['name'];

            if ($image3) {

                move_uploaded_file(

                    $_FILES['image3']['tmp_name'],

                    __DIR__
                    . '/../public/assets/img/'
                    . $image3
                );
            }

            // DONNÉES

            $_POST['image'] = $image;

            $_POST['image1'] = $image1;

            $_POST['image2'] = $image2;

            $_POST['image3'] = $image3;

            Menu::create($_POST);

            header('Location: ?page=admin-menus');
            exit;
        }

        require_once
            __DIR__ . '/../views/add-menu.php';
    }

    public function delete() {

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

        Menu::delete($_GET['id']);

        header('Location: ?page=admin-menus');
        exit;
    }
}