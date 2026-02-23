<?php
declare(strict_types=1);
namespace App\Core;

class Database
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=localhost;dbname=mood_tracker;port=3308", "root", "root");
    }

    public function getConnexion(): \PDO
    {
        return $this->pdo;
    }

}