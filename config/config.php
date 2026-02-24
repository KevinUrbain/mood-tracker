<?php
define('ROOT', dirname(__DIR__));

// On sécurise la récupération des variables $_SERVER
$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? 'HTTP/1.1';
$protocol = str_contains($serverProtocol, 'HTTPS') ? 'https' : 'http';

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptName = dirname($_SERVER['SCRIPT_NAME'] ?? '');

$baseUrl = $protocol . '://' . $host . $scriptName;

define('BASE_URL', $baseUrl);
define('PROJECT_URL', 'http://localhost/Mood-tracker/');