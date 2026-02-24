<?php
session_start();
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\UserController;


require_once '../vendor/autoload.php';
require_once '../config/config.php';




$url = $_GET['url'] ?? 'landing';


match ($url) {
    'home' => (new HomeController())->index(), // Envoie vers la landing page par défaut
    'dashboard' => (new HomeController())->dashboard(), // Envoie vers le dashboard si utilisateur connecté
    'users' => (new UserController())->displayAllUsers(), // Affiche tous les utilisateurs (A supprimer par la suite)
    'login' => (new AuthController())->login(), // Envoie vers la page de connexion
    'register' => (new AuthController())->register(), // Envoie vers la pge d'inscription
    'logout' => (new AuthController())->logout(), // Déconnecter l'utilisateur (via le bouton dans le dashboard)
    'profile' => (new UserController())->showById(), // A FAIRE : Développer la vue profile et ajouter une méthode render() dans le UserController
    default => (new AuthController())->login()
};

//!!!! password_verify() à ajouter dans login() du AuthController
