<?php
declare(strict_types=1);
namespace App\Controllers;

use App\Core\Controller;
use App\Models\UserManager;


class UserController extends Controller
{
    public function displayAllUsers()
    {
        $userManager = new UserManager();
        $users = $userManager->getAllUsers();

        $this->render('users', [
            'users' => $users,
            'title' => 'Tous les utilisateurs'
        ]);
    }

    /**
     * Récupère un objet User grâce à la méthode findUserByEmail(string $email) via son email et retourne l'id. Permet d'avoir l'id via la base de données et de faire des traitements
     *
     * @return string Retourne l'id de l'utilisateur où id est de type string
     */
    public function showById(): string
    {

        $userManager = new UserManager();
        $userByEmail = $userManager->findUserByEmail($_SESSION['user']['email']);

        $userById = $userByEmail->getId();
        return (string) $userById;
    }

}