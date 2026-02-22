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
}