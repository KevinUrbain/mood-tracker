<?php
declare(strict_types=1);
namespace App\Controllers;

use App\Core\Controller;
use App\Entities\User;
use App\Models\UserManager;

class AuthController extends Controller
{

    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            $user = null;
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                $errors['input_empty'] = 'Veuillez remplir tous les champs';
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email_invalid'] = 'format email invalide';
            }

            if (empty($errors)) {
                $userManager = new UserManager();
                $userData = $userManager->findUserByEmail($email);
                if ($userData === null) {
                    echo 'Utilisateur pas trouvé';
                    $errors['user_notfound'] = 'Utilisateur introuvable';
                } else {
                    $user = (new User())->hydrate($userData);
                }
            }

            if ($user && is_object($user) && $user->getPassword_hash() === $password) {
                session_regenerate_id(true);
                $_SESSION['user'] = [
                    'id' => $user->getId(),
                    'email' => $user->getEmail(),
                    'name' => $user->getName(),
                    'role' => $user->getRole()
                ];
                header('Location: ' . PROJECT_URL . 'dashboard');
                //❗ A BIEN PASSER PAR LE ROUTEUR -> PAS DE CHEMIN VERS LA VUE 
                exit();


            } else {
                echo 'Accès refusé';
                $errors['password_invalid'] = 'Mot de passe incorrect';
            }
        }

        $this->render('login', [
            'title' => 'MoodTracker - Connexion',
            'errors' => (!empty($errors) ? $errors : '')
        ]);
    }

    public function register()
    {
        //Développer
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: ' . PROJECT_URL . 'login');
        exit();
    }
}