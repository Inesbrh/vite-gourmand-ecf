<?php

$page = $_GET['page'] ?? 'home';

/* MENU */

if ($page == 'menu') {

    require_once
        __DIR__
        . '/../controllers/MenuController.php';

    $controller =
        new MenuController();

    $controller->index();
}

/* DETAIL MENU */

elseif ($page == 'detail-menu') {

    require_once
        __DIR__
        . '/../controllers/MenuController.php';

    $controller =
        new MenuController();

    $controller->detail();
}

/* AUTH */

elseif ($page == 'login') {

    require_once
        __DIR__
        . '/../controllers/AuthController.php';

    $controller =
        new AuthController();

    $controller->login();
}

elseif ($page == 'register') {

    require_once
        __DIR__
        . '/../controllers/AuthController.php';

    $controller =
        new AuthController();

    $controller->register();
}

elseif ($page == 'logout') {

    require_once
        __DIR__
        . '/../controllers/AuthController.php';

    $controller =
        new AuthController();

    $controller->logout();
}

/* COMMANDES */

elseif ($page == 'commande') {

    require_once
        __DIR__
        . '/../controllers/CommandeController.php';

    $controller =
        new CommandeController();

    $controller->create();
}

elseif ($page == 'mes-commandes') {

    require_once
        __DIR__
        . '/../controllers/CommandeController.php';

    $controller =
        new CommandeController();

    $controller->mesCommandes();
}

elseif ($page == 'admin-commandes') {

    require_once
        __DIR__
        . '/../controllers/CommandeController.php';

    $controller =
        new CommandeController();

    $controller->adminCommandes();
}

elseif ($page == 'delete-commande') {

    require_once
        __DIR__
        . '/../controllers/CommandeController.php';

    $controller =
        new CommandeController();

    $controller->delete();
}

/* AVIS */

elseif ($page == 'avis') {

    require_once
        __DIR__
        . '/../controllers/AvisController.php';

    $controller =
        new AvisController();

    $controller->create();
}

elseif ($page == 'admin-avis') {

    require_once
        __DIR__
        . '/../controllers/AvisController.php';

    $controller =
        new AvisController();

    $controller->adminAvis();
}

/* DASHBOARD */

elseif ($page == 'dashboard') {

    require_once
        __DIR__
        . '/../controllers/DashboardController.php';

    $controller =
        new DashboardController();

    $controller->index();
}

/* CONTACT */

elseif ($page == 'contact') {

    require_once
        __DIR__
        . '/../controllers/ContactController.php';

    $controller =
        new ContactController();

    $controller->index();
}

/* PAGES */

elseif ($page == 'mentions-legales') {

    require_once
        __DIR__
        . '/../views/mentions-legales.php';
}

elseif ($page == 'cgv') {

    require_once
        __DIR__
        . '/../views/cgv.php';
}

/* MENUS ADMIN */

elseif ($page == 'admin-menus') {

    require_once
        __DIR__
        . '/../controllers/AdminMenuController.php';

    $controller =
        new AdminMenuController();

    $controller->index();
}

elseif ($page == 'add-menu') {

    require_once
        __DIR__
        . '/../controllers/AdminMenuController.php';

    $controller =
        new AdminMenuController();

    $controller->add();
}

elseif ($page == 'delete-menu') {

    require_once
        __DIR__
        . '/../controllers/AdminMenuController.php';

    $controller =
        new AdminMenuController();

    $controller->delete();
}

/* EMPLOYÉS */

elseif ($page == 'admin-users') {

    require_once
        __DIR__
        . '/../controllers/AdminUserController.php';

    $controller =
        new AdminUserController();

    $controller->index();
}

elseif ($page == 'add-user') {

    require_once
        __DIR__
        . '/../controllers/AdminUserController.php';

    $controller =
        new AdminUserController();

    $controller->add();
}

elseif ($page == 'delete-user') {

    require_once
        __DIR__
        . '/../controllers/AdminUserController.php';

    $controller =
        new AdminUserController();

    $controller->delete();
}

/* PASSWORD */

elseif ($page == 'forgot-password') {

    require_once
        __DIR__
        . '/../controllers/ForgotPasswordController.php';

    $controller =
        new ForgotPasswordController();

    $controller->index();
}

/* PROFIL */

elseif ($page == 'profile') {

    require_once
        __DIR__
        . '/../controllers/ProfileController.php';

    $controller =
        new ProfileController();

    $controller->index();
}

/* HORAIRES */

elseif ($page == 'admin-horaires') {

    require_once
        __DIR__
        . '/../controllers/HoraireController.php';

    $controller =
        new HoraireController();

    $controller->index();
}

/* HOME */

else {

    require_once
        __DIR__
        . '/../controllers/HomeController.php';

    $controller =
        new HomeController();

    $controller->index();
}