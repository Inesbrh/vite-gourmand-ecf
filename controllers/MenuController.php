<?php

require_once __DIR__ . '/../models/Menu.php';
require_once __DIR__ . '/../models/Plat.php';

class MenuController {

    public function index() {

        $menus = Menu::getAll();


        // ajouter les plats à chaque menu
        foreach ($menus as $key => $menu) {

            $menus[$key]['plats'] = Plat::getByMenu($menu['menu_id']);

        }

        require_once __DIR__ . '/../views/menus.php';
    }

    public function detail() {

    $id = $_GET['id'];

    $menu = Menu::getById($id);

    $menu['plats'] = Plat::getByMenu($id);

    require_once __DIR__ . '/../views/detail-menu.php';
    }
}