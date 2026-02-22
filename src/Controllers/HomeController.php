<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('home', [
            'title' => 'Acceuil',
            'message' => "Bienvenue sur l'accueil"
        ]);
    }
}