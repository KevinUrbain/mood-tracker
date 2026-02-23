<?php
declare(strict_types=1);
namespace App\Utils;

class DateHelper
{
    public static function formatFrenchDate(): string
    {
        $days = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
        $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

        $date = new \DateTime();
        $dayString = $days[$date->format('w')];
        $dayNumber = $date->format('d');
        $month = $months[$date->format('n') - 1];
        $year = $date->format('Y');
        $dateResult = $dayString . ' ' . $dayNumber . ' ' . $month . ' ' . $year;
        return $dateResult;
    }
}