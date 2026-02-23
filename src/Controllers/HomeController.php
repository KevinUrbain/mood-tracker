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
        $this->render('dashboard', [
            'title' => 'MoodTracker — Mon journal',
            'nav' => 'navbar-dashboard',
            'date' => DateHelper::formatFrenchDate()
        ]);
    }
}