<?php
require 'views/layout/header.php';
require 'views/layout/sidebar.php';

$page = $_GET['page'] ?? 'home';

if ($page == 'pasien') {
    require 'controllers/PasienController.php';
    $c = new PasienController();
    $action = $_GET['action'] ?? 'index';
    $c->$action();
} else {
    require 'views/home.php';
}

require 'views/layout/footer.php';
