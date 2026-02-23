<?php
namespace App\Controllers;

use App\Core\Controller;


class HomeController extends Controller
{

    public function index()
    {
        $this->render('home', [
            'title' => 'MoodTracker — Prenez soin de vous', // devient $title = 'MoodTracker — Prenez soin de vous'
            'message' => "Bienvenue sur l'accueil" // devient $message = 'Bienvenue sur l'accueil'
        ]);
    }
}