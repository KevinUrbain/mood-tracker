<?php

use App\Controllers\HomeController;
require_once '../vendor/autoload.php';
require_once '../config/config.php';

$url = $_GET['url'];

$urlRequest = match ($url) {
    '' => (new HomeController())->index(),
};

var_dump($url);

?>

<a href="<?= $baseUrl . '/css/style.css' ?>">Go to css</a>