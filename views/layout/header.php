<?php

if (session_status() === PHP_SESSION_NONE) {

    session_start();
}

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Vite Gourmand
    </title>

    <link
        rel="stylesheet"
        href="/vite-gourmand-ecf/public/assets/css/style.css"
    >

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<nav>

    <!-- UTILISATEUR NON CONNECTÉ -->

    <?php if(!isset($_SESSION['user'])): ?>

        <a href="?page=home">
            Accueil
        </a>

        <a href="?page=menu">
            Nos menus
        </a>

        <a href="?page=contact">
            Contact
        </a>

        <a href="?page=login">
            Connexion
        </a>

        <a href="?page=register">
            Inscription
        </a>

    <?php else: ?>

        <!-- ADMIN / EMPLOYÉ -->

        <?php if(
            $_SESSION['user']['role_id'] == 1
            ||
            $_SESSION['user']['role_id'] == 3
        ): ?>

            <span>

                Bonjour
                <?= htmlspecialchars(
                    $_SESSION['user']['prenom']
                ); ?>

            </span>

            <div class="burger-menu">

                ☰ Menu

                <div class="burger-links">

                    <a href="?page=dashboard">
                        Dashboard
                    </a>

                    <a href="?page=admin-commandes">
                        Commandes
                    </a>

                    <a href="?page=admin-menus">
                        Menus
                    </a>

                    <a href="?page=admin-avis">
                        Avis
                    </a>

                    <a href="?page=admin-horaires">
                        Horaires
                    </a>

                    <?php if(
                        $_SESSION['user']['role_id']
                        == 1
                    ): ?>

                        <a href="?page=admin-users">
                            Employés
                        </a>

                    <?php endif; ?>

                    <a href="?page=logout">
                        Déconnexion
                    </a>

                </div>

            </div>

        <?php else: ?>

            <!-- UTILISATEUR -->

            <a href="?page=home">
                Accueil
            </a>

            <a href="?page=menu">
                Nos menus
            </a>

            <a href="?page=contact">
                Contact
            </a>

            <span>

                Bonjour
                <?= htmlspecialchars(
                    $_SESSION['user']['prenom']
                ); ?>

            </span>

            <a href="?page=mes-commandes">
                Mes commandes
            </a>

            <a href="?page=profile">
                Mon profil
            </a>

            <a href="?page=logout">
                Déconnexion
            </a>

        <?php endif; ?>

    <?php endif; ?>

</nav>

<hr>