<?php
declare(strict_types=1);
namespace App\Core;

abstract class Controller
{

    protected function render(string $pathView, array $data = [])
    {
        extract($data);

        ob_start();

        require_once dirname(__DIR__, 2) . '/views/' . $pathView . '.php';

        $content = ob_get_clean();

        require_once dirname(__DIR__, 2) . '/views/templates/layout.php';
    }

    public function isConnected(): bool
    {
        if (!empty($_SESSION) && isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }

    public function redirectIfNotConnected(): void
    {
        if (!$this->isConnected()) {
            header('Location: ' . PROJECT_URL . 'login');
            exit();
        }
    }
}