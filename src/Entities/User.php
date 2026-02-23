<?php
declare(strict_types=1);
namespace App\Entities;

class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $password_hash;
    private string $birthday_date;
    private string $created_at;
    private ?string $updated_at;
    private string $role;

    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function getPassword_hash(): string
    {
        return $this->password_hash;
    }
    public function setPassword_hash($password_hash): void
    {
        $this->password_hash = $password_hash;
    }
    public function getBirthday_date(): string
    {
        return $this->birthday_date;
    }
    public function setBirthday_date($birthday_date): void
    {
        $this->birthday_date = $birthday_date;
    }
    public function getCreated_at(): string
    {
        return $this->created_at;
    }
    public function setCreated_at($created_at): void
    {
        $this->created_at = $created_at;
    }
    public function getUpdated_at(): string
    {
        return $this->updated_at;
    }
    public function setUpdated_at($updated_at): void
    {
        $this->updated_at = $updated_at;
    }
    public function getRole(): string
    {
        return $this->role;
    }
    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function hydrate(array $data): self
    {
        foreach ($data as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
        return $this;
    }

}