<?php
require_once "vendor/autoload.php";

use App\Controller\MainController;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$controller = new MainController();
$controller->index();
