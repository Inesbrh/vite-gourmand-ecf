<?php

require_once __DIR__ . '/../models/Avis.php';

class HomeController {

    public function index() {

        $avis = Avis::getAllValides();

        require_once __DIR__ . '/../views/home.php';
    }
}