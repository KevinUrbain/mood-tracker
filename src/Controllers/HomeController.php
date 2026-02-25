<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Utils\DateHelper;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('home', [
            'title' => 'MoodTracker — Prenez soin de vous', // devient $title = 'MoodTracker — Prenez soin de vous'
            'message' => "Bienvenue sur l'accueil" // devient $message = 'Bienvenue sur l'accueil'
        ]);
    }

    public function dashboard()
    {
        $this->redirectIfNotConnected();

        $userName = $_SESSION['user']['name'] ?? 'Inconnu';
        $userEmail = $_SESSION['user']['email'] ?? '';

        $this->render('dashboard', [
            'title' => 'MoodTracker — Mon journal',
            'nav' => 'navbar-dashboard',
            'currentDate' => DateHelper::formatFrenchDate(),
            'name' => $userName,
            'email' => $userEmail
        ]);
    }
}
