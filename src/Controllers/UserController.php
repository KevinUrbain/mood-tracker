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

}