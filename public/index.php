<?php

$page = $_GET['page'] ?? 'home';

if ($page == 'menu') {

    require_once __DIR__ . '/../controllers/MenuController.php';

    $controller = new MenuController();
    $controller->index();

} elseif ($page == 'login') {

    require_once __DIR__ . '/../controllers/AuthController.php';

    $controller = new AuthController();
    $controller->login();

} elseif ($page == 'logout') {

    require_once __DIR__ . '/../controllers/AuthController.php';

    $controller = new AuthController();
    $controller->logout();

}elseif ($page == 'commande') {

    require_once __DIR__ . '/../controllers/CommandeController.php';

    $controller = new CommandeController();
    $controller->create();

}elseif ($page == 'mes-commandes') {

    require_once __DIR__ . '/../controllers/CommandeController.php';

    $controller = new CommandeController();
    $controller->mesCommandes();

}elseif ($page == 'admin-commandes') {

    require_once __DIR__ . '/../controllers/CommandeController.php';

    $controller = new CommandeController();
    $controller->adminCommandes();

} elseif ($page == 'contact') {

    require_once __DIR__ . '/../views/contact.php';

} elseif ($page == 'mentions-legales') {

    require_once __DIR__ . '/../views/mentions-legales.php';

} elseif ($page == 'cgv') {

    require_once __DIR__ . '/../views/cgv.php';

}elseif ($page == 'detail-menu') {

    require_once __DIR__ . '/../controllers/MenuController.php';

    $controller = new MenuController();
    $controller->detail();

}elseif ($page == 'register') {

    require_once __DIR__ . '/../controllers/AuthController.php';

    $controller = new AuthController();
    $controller->register();

}else {

    require_once __DIR__ . '/../controllers/HomeController.php';

    $controller = new HomeController();
    $controller->index();

}