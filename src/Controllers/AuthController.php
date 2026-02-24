<?php
declare(strict_types=1);
namespace App\Controllers;

use App\Core\Controller;
use App\Entities\User;
use App\Models\UserManager;

class AuthController extends Controller
{

    public function login(): void
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = null;
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                $errors[] = 'Veuillez remplir tous les champs';
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Format email invalide';
            }

            if (empty($errors)) {
                $userManager = new UserManager();
                $userData = $userManager->findUserByEmail($email);
                if ($userData === null) {
                    $errors['user_notfound'] = 'Utilisateur introuvable';
                } else {
                    $user = $userData;
                }
            }

            if ($user && is_object($user) && password_verify($password, $user->getPassword_hash())) {
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
                $errors[] = 'Identifiants incorrects';
                //On reste flou sur la cause de l'échec du login
            }
        }

        $this->render('login', [
            'title' => 'MoodTracker - Connexion',
            'errors' => $errors
        ]);
    }

    public function register(): void
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $birthday_date = $_POST['birthday_date'] ?? '';
            $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if (empty($name) || empty($email)) {
                $errors[] = 'Veuillez remplir tous les champs';
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Format email invalide';
            }

            if (strlen($password_hash) < 8) {
                $errors[] = 'Entrer 8 caractères minimum';
            }

            if (empty($errors)) {
                $user = new User();
                $userObj = $user->hydrate([
                    'name' => $name,
                    'email' => $email,
                    'birthday_date' => $birthday_date,
                    'password_hash' => $password_hash
                ]);


                $userManager = new UserManager();
                $request = $userManager->addUser($userObj);

                if ($request) {
                    header('Location: ' . PROJECT_URL . 'login');
                    exit();
                }
            }
        }

        $this->render('register', [
            'title' => 'MoodTracker - Inscription',
            'errors' => $errors
        ]);
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: ' . PROJECT_URL . 'login');
        exit();
    }
}