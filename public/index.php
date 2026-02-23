<?php
session_start();
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\UserController;


require_once '../vendor/autoload.php';
require_once '../config/config.php';




$url = $_GET['url'] ?? 'login';


match ($url) {
    'home' => (new HomeController())->index(), //Ok fait !
    'users' => (new UserController())->displayAllUsers(), //Ne sert à rien pour l'instant
    'login' => (new AuthController())->login(), //OK fait !
    'register' => (new AuthController())->register(), //Développer la méthode
    default => (new AuthController())->login()
};
