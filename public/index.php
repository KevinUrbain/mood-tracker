<?php
session_start();
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\UserController;


require_once '../vendor/autoload.php';
require_once '../config/config.php';




$url = $_GET['url'] ?? 'login';


match ($url) {
    'home' => (new HomeController())->index(),
    'users' => (new UserController())->displayAllUsers(),
    'login' => (new AuthController())->login(),
    default => (new AuthController())->login()
};

var_dump($url);

?>

<a href="<?= $baseUrl . '/css/style.css' ?>">Go to css</a>