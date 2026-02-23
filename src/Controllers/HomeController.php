<?php
namespace App\Controllers;

use App\Core\Controller;


class HomeController extends Controller
{

    public function index()
    {
        $this->render('home', [
            'title' => 'Acceuil', // devient $title = 'Accueil'
            'message' => "Bienvenue sur l'accueil" // devient $message = 'Bienvenue sur l'accueil'
        ]);
    }

}