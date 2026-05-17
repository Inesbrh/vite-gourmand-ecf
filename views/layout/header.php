<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<nav>

    <a href="?page=home">Accueil</a> |
    <a href="?page=menu">Nos menus</a> |
    <a href="?page=contact">Contact</a>

    <?php if(isset($_SESSION['user'])): ?>

        | Bonjour <?= htmlspecialchars($_SESSION['user']['prenom']); ?>

    <?php if($_SESSION['user']['role_id'] == 1): ?>

        | <a href="?page=admin-commandes">Admin</a>

    <?php endif; ?>

    <?php if($_SESSION['user']['role_id'] == 3): ?>

        | <a href="?page=admin-commandes">Employé</a>

    <?php endif; ?>

        | <a href="?page=mes-commandes">Mes commandes</a>

        | <a href="?page=logout">Déconnexion</a>

    <?php else: ?>

        | <a href="?page=login">Connexion</a>

        | <a href="?page=register">Inscription</a>

    <?php endif; ?>

</nav>

<hr>