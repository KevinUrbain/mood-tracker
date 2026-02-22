<?php

define('ROOT', dirname(__DIR__));

//Script de construction de $baseUrl
$protocol = str_contains($_SERVER['SERVER_PROTOCOL'], 'https') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$scritpName = dirname($_SERVER['SCRIPT_NAME']);
$baseUrl = $protocol . '://' . $host . $scritpName;

define('BASE_URL', $baseUrl);