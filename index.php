<?php

use App\Controllers\FrontController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/src/views');
$twig = new Environment($loader, [
    'cache' => false,
]);

$frontController = new FrontController($twig);
$frontController->index();
