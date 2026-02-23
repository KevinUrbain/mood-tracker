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

    public function findUserByEmail($email): array|null
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $request = $this->connexion->prepare($sql);
        $stmt = $request->execute([
            ':email' => $email
        ]);
        if ($stmt) {
            $user = $request->fetch(\PDO::FETCH_ASSOC);
        }
        if ($user) {
            return $user;
        }

        return null;
    }


}