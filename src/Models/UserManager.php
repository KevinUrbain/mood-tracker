<?php
declare(strict_types=1);
namespace App\Models;

use App\Core\Database;
use App\Entities\User;

class UserManager
{
    private $connexion;

    public function __construct()
    {
        $pdo = new Database();
        $this->connexion = $pdo->getConnexion();
    }

    public function getAllUsers(): array
    {
        $sql = "SELECT * FROM users";
        $request = $this->connexion->prepare($sql);
        $request->execute();
        $users = $request->fetchAll(\PDO::FETCH_CLASS, User::class);
        return $users;
    }

    public function findUserByEmail($email): User|null
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $request = $this->connexion->prepare($sql);
        $stmt = $request->execute([
            ':email' => $email
        ]);
        if ($stmt) {
            $userRequest = $request->fetch(\PDO::FETCH_ASSOC);
        }
        if ($userRequest) {
            $user = new User();
            $userByEmail = $user->hydrate($userRequest);
            return $userByEmail;
        }

        return null;
    }

    public function addUser(User $user): bool
    {
        $sql = "INSERT INTO users (name, email, password_hash, birthday_date) VALUES (:name, :email, :password_hash, :birthday_date)";
        $request = $this->connexion->prepare($sql);

        $stmt = $request->execute([
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            'password_hash' => $user->getPassword_hash(),
            ':birthday_date' => $user->getBirthday_date()
        ]);

        return $stmt;
    }


}